<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php

    require 'db.php';
    $user_list = "SELECT * FROM users";
    $user_res = mysqli_query($db_connection, $user_list);
    ?>
    <?php require 'header.php' ?>
    
    <div class="flex">
        <div class="flex flex-col card card-body bg-slate-300 mt-2 ">
            <div class="mx-8">
                <a href="dashboard.php" class="flex justify-center items-center p-2 link link-hover">Dashboard</a>
            </div>


            <div class="mx-8">
                <a href="users_list.php" class="flex justify-center items-center p-2 link link-hover">Users</a>
            </div>

            <div class="mx-8">
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Logos</a>
            </div>

            <div class="mx-8">
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Apps</a>
            </div>

            <div class="mx-8">
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Charts</a>
            </div>

            <div class="mx-8">
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Deleveries</a>
            </div>
        </div>
        <div class="card card-body w-full">
        <div class="flex flex-row">

<div class="card card-body w-2/3">

    <table class="bg-slate-200">
        <tr class="font-bold bg-slate-300">
            <td class="p-4">Id</td>
            <td class="p-4">Email</td>
            <td class="p-4">Postion</td>
            <td class="p-4">Country</td>
            <td class="p-4">Gender</td>
            <?php if($after_assoc_logged['Role'] == 1){?>
            <td class="p-2">Action</td>
            <?php }?>
        </tr>

        <?php foreach ($user_res as $index => $user) { ?>
            <tr>
                <td class="p-4"><?= $index + 1 ?></td>
                <td class="p-4"><?= $user['Email'] ?></td>
                <td class="p-4"><?= $user['Role'] ?></td>
                <td class="p-4"><?= $user['Country'] ?></td>
                <td class="p-4"><?= $user['Gender'] ?></td>
                

                <?php if($after_assoc_logged['Role'] == 1) {?>
                <td class="p-2"><a href="user_delete.php?Id=<?= $user['Id'] ?>" title="Delete User"><i class="fa-solid fa-delete-left"></i></a></td>
                <?php }?>
            </tr>
        <?php } ?>
    </table>

</div>
<?php if($after_assoc_logged['Role'] == 1) {?>

<form method="post" action="role.php">
<div class="card card-body ">
<?php if(isset($_SESSION['role_update'])){?>
    <strong class="alert alert-success"><?= $_SESSION['role_update']?></strong>
    <?php } unset($_SESSION['role_update'])?>
    <h2 class="bg-slate-300 rounded-sm p-2">Assign Role</h2>
    <select name="user_id" class="select select-bordered w-full max-w-xs">
        <option disabled selected>Select User</option>
        <?php foreach ($user_res as $user) { ?>
            <option value="<?= $user['Id'] ?>"><?= $user['Email'] ?></option>
        <?php } ?>
    </select>

    <select name="role_id" class="select select-bordered w-full max-w-xs">
        <option disabled selected>Select role</option>
            <option value="1">Super Admin</option>
            <option value="2">Admin</option>
            <option value="3">Modarator</option>
            <option value="4">Editor</option>
    </select>
    <button type="submit" class="btn btn-active">Submit Here</button>
</div>
</form>
<?php }?>
</div>


            
            </div>
    </div>
    <?php require 'footer.php' ?>


</body>

</html>