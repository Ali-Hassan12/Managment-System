<?php
if (isset($_POST['logout-btn'])) {
    session_destroy();
    header("location:index.php");
}
?>
<form method="post">
    <button class="btn-primary" name="logout-btn" type="submit">Logout</button>
</form>