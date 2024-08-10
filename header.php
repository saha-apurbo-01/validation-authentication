<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
}

require 'db.php';

$logged_id = $_SESSION['logged_id'];
$select_logged_user = "SELECT * FROM users WHERE Id = $logged_id";
$select_logged_user_res = mysqli_query($db_connection, $select_logged_user);
$after_assoc_logged = mysqli_fetch_assoc($select_logged_user_res);

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
            <a class="btn btn-ghost text-xl">Admin Panel</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a class="label-text-alt link link-hover">Notification</a></li>
                <li><a class="label-text-alt link link-hover" href="profile.php">Profile</a></li>
                

            </ul>
        </div>
        <label class="label px-6">


            <?php
            if($after_assoc_logged['Photo'] == null) {?>
            <div class="avatar">
                <div class="w-10 m-2 rounded-full">
                <img src="" />
                </div>
                </div>
            <?php } else {?>
                <div class="avatar">
                <div class="w-10 m-2 rounded-full">
                <img src="/RegisterPage/uploads/<?= $after_assoc_logged['Photo'] ?>" />
                </div>
                </div>
                <?php }?>

                
            <details>
                <summary><?= $after_assoc_logged['Email'] ?></summary>
                <ul class="bg-base-300 rounded-t-none p-2">
                    <a href="logout.php" class="label-text-alt link link-hover">Log Out</a>
                </ul>
            </details>

        </label>
    </div>
</body>

</html>