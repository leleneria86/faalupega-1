<?php
require_once('../../../classes/UserService.php');
require_once('../../../classes/DBUtil.php');

$message = $_GET['vercode'];//"Bad Link";

if(isset($_GET['vercode'])) {

    $verCode = $_GET['vercode'];
    $conn = DBUtil::getConnection();
    $service = new UserService($conn);

    $user = $service->getByVerificationCode($verCode);

    if($user instanceof User) {

        if($user->getStatus() === User::ACTIVE) {

            $message = '<label class="text-info">Your email was already verified.</label>';
        } else {

            $user->setStatus(User::ACTIVE);
            if($service->updateUserStatus($user)) {

                $message = '<label class="text-success">Your email has been verified <br />You can login here - <a href="../../index.php">Login</a></label>';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 align="center">Email Verification</h2>

    <h4><?php echo $message; ?></h4>

</div>

</body>

</html>



