<?php
require "./includes/_header.php";
require "./logic/dashboard.php";
?>

<h1><?= $user[0]['ins_name'] ?></h1>
<?php

$function->loadComponent("logout-btn");

require "./includes/_footer.php" ?>