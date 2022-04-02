<?php
require_once "./classes/Functions.php";
require_once "./classes/Database.php";
session_start();
$database = new Database;
$function = new Functions;

$site_name = "School Management System";
if (isset($_SESSION['unique_id'])) {
    $unique_id = $_SESSION['unique_id'];
    $data = $database->read("SELECT * FROM `admin` WHERE `unique_id` = ${unique_id}");
    $site_name = $data[0]['ins_name'];
}

define('WEBSITE_NAME', "Dashboard | ${site_name}");
