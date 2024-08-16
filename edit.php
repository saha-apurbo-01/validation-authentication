<?php
require 'db.php';
require 'header.php';


$skill_id = $_GET['id'];
$select = "SELECT * FROM skills WHERE id= $skill_id ";
$select_res = mysqli_query($db_connection, $select);
$after_assoc_skill = mysqli_fetch_assoc($select_res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex flex-row">
        <div class="flex flex-col card card-body bg-slate-300 mt-2 ">
            <div class="mx-8">
                <a href="dashboard.php" class="flex justify-center items-center p-2 link link-hover">Dashboard</a>
            </div>


            <div class="mx-8">
                <a href="users_list.php" class="flex justify-center items-center p-2 link link-hover">Users</a>
            </div>

            <div class="mx-8">
                <a href="logo.php" class="flex justify-center items-center p-2 link link-hover">Logos</a>
            </div>

            <div class="mx-8">
                <a href="about.php" class="flex justify-center items-center p-2 link link-hover">About</a>
            </div>

            <div class="mx-8">
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Charts</a>
            </div>

            <div class="mx-8">
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Deleveries</a>
            </div>
        </div>
        <div class="card card-body w-full">
            <div class="card-body ">
                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body" action="skill_update.php" method="post">
                        <div class="form-control">
                            <h1 class="bg-slate-300 p-2 rounded-sm">Edit Skill</h1>
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>

                            <input type="text" name="name" placeholder="Html, Css, Tailwind etc." class="input input-bordered" value="<?= $after_assoc_skill['Name'] ?>" />
                            <input type="hidden" name="id" value="<?= $after_assoc_skill['Id'] ?>" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Parcentage</span>
                            </label>
                            <input type="text" name="parcentage" placeholder="Parcentage" class="input input-bordered" value="<?= $after_assoc_skill['Parcentage'] ?>" />
                        </div>
                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-neutral w-40">Edit Skill</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
<?php require 'footer.php' ?>