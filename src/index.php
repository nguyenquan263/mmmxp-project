<?php
require "./services/StartUp.php";

$returnData = array(
    "message" => "Hello World",
    "errorCode" => 200,
    "currentMethod" => $_SERVER["REQUEST_METHOD"]
);

echo json_encode($returnData);

