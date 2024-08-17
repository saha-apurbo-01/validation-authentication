<?php
require 'db.php';
require 'header.php';


$select = "SELECT * FROM services";
$select_res = mysqli_query($db_connection, $select); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body" action="service_post.php" method="post">
                        <div class="form-control">
                            <h1 class="bg-slate-300 p-2 rounded-sm">Add Service</h1>
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                            <input type="text" name="name" placeholder="Web development, Graphic design etc." class="input input-bordered"  />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Description</span>
                            </label>
                            <textarea name="description" placeholder="Add description" id="" class="input input-bordered"></textarea>
                        </div>
                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-neutral w-40">Add Service</button>
                        </div>
                    </form>
                </div>    
               
            </div>
            
            </div>

            <div class="card card-body w-full">
            <div class="card-body ">
            
                <div class="card bg-base-100 w-full max-w-4xl shrink-0 shadow-2xl">
                
                <table class="table">
                <h1 class="bg-slate-300 p-2 rounded-sm">Skills List</h1>
                        <th>Id</th>
                        <th>Service</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                      <?php foreach($select_res as $index=> $service) {?>  
                    <tr>
                        <td><?= $index+1 ?></td>
                        <td><?= $service['Name'] ?></td>
                        <td><?= $service['Description'] ?></td>
                        <td><a href="service_status.php?id=<?= $service['Id'] ?>" class="badge badge-<?= $service['Status'] ==1 ? 'success': 'error' ?>"><?= $service['Status'] == 1 ? 'Active': 'Deactive' ?></a></td>
                        <td><a href="service_delete.php?id=<?= $service['Id'] ?>" title="Delete service"><i class="fa-solid fa-delete-left"></i></a></td>
                        <td><a href="service_edit.php?id=<?= $service['Id'] ?>" title="Edit service"><i class="fa-regular fa-pen-to-square"></i></a></td>
                    </tr>
                   <?php } ?>
                </table>
                </div>
            </div>

        </div>
    </div>
    
</body>

</html>
<?php require 'footer.php' ?>