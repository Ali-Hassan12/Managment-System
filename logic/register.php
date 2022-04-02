<?php

if (isset($_SESSION['unique_id'])) {
    $function->redirect("dashboard.php");
} else {
    $_SESSION['unique_id'] = null;
}
$register = false;
$error = "";

if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $ins_name = $_POST['ins-name'];
    $unique_id = time() + rand(1, 5000);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $existing_email = $database->read("SELECT `email` FROM `admin` WHERE `email` = '${email}'");

        if (count($existing_email) > 0) {
            echo "<p class='form-error'>Email Already Exists</p>";
        } else {
            $database->write("INSERT INTO `admin` (`name`,`password`,`email`,`unique_id`,`ins_name`) VALUES 
            ('${name}','${password}', '${email}',${unique_id}, '${ins_name}')");
            $register = true;
            $_SESSION['unique_id'] = $unique_id;
        }
    } else {
        $error = "Please Enter Valid Email Address";
        echo "<p class='form-error'> ${error} </p>";
    }
}

if ($register == true) {
    $function->redirect("dashboard.php");
}

// $register = false;
// $_SESSION['unique_id'] = null;
