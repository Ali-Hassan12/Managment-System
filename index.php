<?php
require './includes/_header.php';
require './logic/register.php';
?>

<main class="form">
    <div class="register__form form-inner flex flex-column gap-3">
        <h1 class="text-center">Register</h1>
        <form class="flex flex-column gap-1 align-center w-100" method="post">
            <div class="flex flex-column gap-sm">
                <div class="profile-img">
                    <img src="./img/profile-placeholder.png" alt="profile-img">
                    <span>Choose Image</span>
                    <input type="file" name="image">
                </div>
            </div>
            <div class="flex flex-column gap-sm w-100">
                <label for="">Username</label>
                <input type="text" name="name">
            </div>
            <div class="flex flex-column gap-sm">
                <label for="">Institute Name</label>
                <input type="text" name="ins-name">
            </div>
            <div class="flex flex-column gap-sm">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div class="flex flex-column gap-sm">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="btn-primary w-100">Sign Up</button>
            <div class="flex gap-sm">Already a User? <a href="login.php">Login</a></div>
        </form>
    </div>
</main>

<?php require './includes/_footer.php'; ?>