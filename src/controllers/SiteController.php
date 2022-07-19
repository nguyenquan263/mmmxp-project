<?php
include("../services/StartUp.php");

$currentHttpMethod = $_SERVER["REQUEST_METHOD"];

echo $currentHttpMethod;
echo isset($_GET["data"]);

if ($currentHttpMethod == "GET")
{

} 
elseif ($currentHttpMethod == "POST")
{

}
elseif ($currentHttpMethod == "PUT")
{

}
else 
{

}