<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../../../classes/UserService.php');
require_once('../../../classes/DBUtil.php');
require_once('../../../classes/User.php');

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$user = new User();
$user->setFirstname($request->first_name);
$user->setLastname($request->last_name);
$user->setEmail($request->email);
$user->setPassword($request->password);
$verCode = getVerificationCode();
$user->setVerificationCode($verCode);

$conn = DBUtil::getConnection();

$service = new UserService($conn);
if($service->create($user)){

    sendConfirmationEmail($user->getEmail(), $verCode);

    // set response code
    http_response_code(200);

    // display message: user was created
    echo json_encode(array("message" => "User was created."));
}

// message if unable to create user
else{

    // set response code
    http_response_code(400);

    // display message: unable to create user
    echo json_encode(array("message" => "Unable to create user."));
}

function getVerificationCode()
{
    $keyValueArray = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9","#","@","%","*"];

    $verCode = "";
    for($i = 0; $i < 8; $i++) {

        $verCode .= $keyValueArray[rand(0, count($keyValueArray) - 1)];
    }
    return $verCode;
}

function sendConfirmationEmail($email, $verCode)
{
    $to      = $email;
    $subject = 'the subject';
    $message = "<h2>Verification Code: ".$verCode."</h2></br></br>";
    $message .= "http://mytest.com/services/api/verifyemail.php?vercode=$verCode";
    $headers = "From: my test \r\n";
    $headers .= "MIME-VERSION:1.0 \r\n";
    $headers .= "Content-type:text/html \r\n";

    return mail($to, $subject, $message, $headers);
}



