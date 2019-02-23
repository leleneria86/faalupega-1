<?php
require_once('../../../classes/UserService.php');
require_once('../../../classes/DBUtil.php');

include_once '../../../classes/config/core.php';
include_once '../../../classes/jwt/BeforeValidException.php';
include_once '../../../classes/jwt/ExpiredException.php';
include_once '../../../classes/jwt/SignatureInvalidException.php';
include_once '../../../classes/jwt/JWT.php';
use \Firebase\JWT\JWT;

$conn = DBUtil::getConnection();
$service = new UserService($conn);

$user = $service->getActiveUserByEmail($_GET['email']);

if($user instanceof User && password_verify($_GET['pass'], $user->getPassword())) {

    $token = array(
        "iss" => $iss,
        "aud" => $aud,
        "iat" => $iat,
        "nbf" => $nbf,
        "data" => array(
            "id" => $user->getId(),
            "firstname" => $user->getFirstname(),
            "lastname" => $user->getLastname(),
            "email" => $user->getEmail()
        )
    );

    // set response code
    http_response_code(200);

    // generate jwt
    $jwt = JWT::encode($token, $key);

    echo json_encode(
        array(
            "message" => "Successful login.",
            "success" => 1,
            "jwt" => $jwt
        )
    );
} else{

    // set response code
    http_response_code(401);

    // tell the user login failed
    echo json_encode(array("message" => "Login Failed."));
}



