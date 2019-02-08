<?php
require_once('../../../classes/UserService.php');
require_once('../../../classes/DBUtil.php');

include_once '../../../classes/config/core.php';
include_once '../../../classes/jwt/BeforeValidException.php';
include_once '../../../classes/jwt/ExpiredException.php';
include_once '../../../classes/jwt/SignatureInvalidException.php';
include_once '../../../classes/jwt/JWT.php';
use \Firebase\JWT\JWT;

$jwt = $_GET['jwt'];
if($jwt){

    // if decode succeed, show user details
    try {
        // decode jwt
        $decoded = JWT::decode($jwt, $key, array('HS256'));

        // set response code
        http_response_code(200);

        // show user details
        echo json_encode(array(
            "message" => "Access granted.",
            "success" => 1,
            "data" => $decoded->data
        ));

    } catch (Exception $e){

        // set response code
        http_response_code(401);

        // tell the user access denied  & show error message
        echo json_encode(array(
            "message" => "Access denied.",
            "error" => $e->getMessage()
        ));
    }
}


