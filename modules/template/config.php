<?php
/*
************************************************************
Long name  : Internet Project Framework
Short name : ip1F
Author     : Alexey Abramov
E-mail     : abramov.developer@gmail.com
LinkedIn   : https://www.linkedin.com/in/alexey-abramov-kz/
City       : Christchurch / NewZealand
Year       : 2020
************************************************************
*/
?>

<?php

//No error will be shown
error_reporting(0);

//Define variable paths for usually used files
$fileAccessDenied = $_SERVER['DOCUMENT_ROOT'] . "/ip1/modules/template/access_denied.php";
$fileTechHeader   = $_SERVER['DOCUMENT_ROOT'] . "/ip1/modules/template/techheader.php";
$fileHeader       = $_SERVER['DOCUMENT_ROOT'] . "/ip1/modules/template/header.php";
$fileMenu         = $_SERVER['DOCUMENT_ROOT'] . "/ip1/modules/template/menu.php";
$fileFooter       = $_SERVER['DOCUMENT_ROOT'] . "/ip1/modules/template/footer.php";
$fileConfig       = $_SERVER['DOCUMENT_ROOT'] . "/ip1/modules/template/config.php";

//Create a new MySQL instance
$mysqli = new mysqli("localhost", "root", "", "aspire2_internet_project");

//In case there is an error in connection then we print a message
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//This function is used to clean up data retrieved from a database or from an HTML form
function cleanData($data) {
    $data = trim(htmlspecialchars(strip1slashes($data)));
    $data = mysqli_real_escape_string($GLOBALS['mysqli'], $data);
    $data = str_replace("'", "`", $data);
    return trim($data);
}

?>
