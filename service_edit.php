<?php 
require 'db.php';
require 'header.php';

$id = $_GET['id'];
$select = "SELECT * FROM services WHERE id= $id";
$select_res = mysqli_query($db_connection, $select); 
$after_assoc = mysqli_fetch_assoc($select_res);


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
<div class="flex">
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
                <a href="skill.php" class="flex justify-center items-center p-2 link link-hover">Skills</a>
            </div>

            <div class="mx-8">
                <a href="service.php" class="flex justify-center items-center p-2 link link-hover">Services</a>
            </div>
        </div>
        <div class="card card-body w-full">
            <div class="card-body ">
            <div class="card card-body w-full">
            <div class="card-body ">
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body" action="service_update.php" method="post">
                        <div class="form-control">
                            <h1 class="bg-slate-300 p-2 rounded-sm">Edit Service</h1>
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                            <input type="text" name="name" placeholder="Web development, Graphic design etc." class="input input-bordered" value="<?= $after_assoc['Name'] ?>"/>
                            <input type="hidden" name="id" value="<?= $after_assoc['Id'] ?>">
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Description</span>
                            </label>
                            <textarea name="description" placeholder="Add description" id="" class="input input-bordered"><?= $after_assoc['Description'] ?></textarea>
                        </div>
                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-neutral w-40">Edit Service</button>
                        </div>
                    </form>
                </div>    
               
            </div>
            
            </div>

          
               
            </div>
            
            </div>
    </div>
</body>
</html>
<?php require 'footer.php' ?>