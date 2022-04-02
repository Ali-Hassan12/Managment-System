<?php


if ($_SESSION['unique_id']) {
    $function->redirect("dashboard.php");
} else {
    $_SESSION['unique_id'] = null;
}

$login = false;
$error = "";

if (isset($_POST['password']) && isset($_POST['email'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $existing_email = $database->read("SELECT * FROM `admin` WHERE `email` = '${email}' AND `password` = ${password}");
        if (count($existing_email) > 0) {
            $login = true;
            $_SESSION['unique_id'] = $existing_email[0]['unique_id'];
        } else {
            echo "<p class='form-error'>Credentials does'nt match</p>";
        }
    } else {
        $error = "Please Enter Valid Email Address";
        echo "<p class='form-error'> ${error} </p>";
    }
}

if ($login == true) {
    $function->redirect("dashboard.php");
}

// $login = false;
// $_SESSION['unique_id'] = null;
