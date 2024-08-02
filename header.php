<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- navbar part -->
    <div class="navbar bg-base-300">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">DashBoard</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a>Notification</a></li>
                <li><a href="profile.php">Profile</a></li>
                
            </ul>
        </div>
        <label class="label px-6">
            <a href="logout.php" class="label-text-alt link link-hover">Log Out</a>
        </label>
    </div>
</body>

</html>