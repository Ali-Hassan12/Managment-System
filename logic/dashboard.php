<?php

if (!$_SESSION['unique_id']) {
    $function->redirect("index.php");
}
$uuid = null;
$user = [];
if ($_SESSION['unique_id']) {
    $uuid = $_SESSION['unique_id'];
    $user = $database->read("SELECT * FROM `admin` WHERE `unique_id` = ${uuid}");
}
