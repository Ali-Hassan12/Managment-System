<?php
require "./includes/_header.php";
require "./logic/login.php"
?>

<main class="form">
    <div class="login__form form-inner flex flex-column gap-3">
        <h1 class="text-center">Login</h1>
        <form class="flex flex-column gap-1 align-center" method="post">
            <div class="flex flex-column gap-sm">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div class="flex flex-column gap-sm">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="btn-primary w-100">Sign In</button>
            <div class="flex gap-sm">Create new Account? <a href="index.php">Register</a></div>
        </form>
    </div>
</main>

<?php require "./includes/_footer.php" ?>