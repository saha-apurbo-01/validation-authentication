<?php require 'db.php';
require 'header.php';



$skill = "SELECT * FROM skills";
$skill_res =  mysqli_query($db_connection, $skill);


?>

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
                    <form class="card-body" action="skill_post.php" method="post">
                        <div class="form-control">
                            <h1 class="bg-slate-300 p-2 rounded-sm">Add skill</h1>
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                        
                            <input type="text" name="name" placeholder="Html, Css, Tailwind etc." class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Parcentage</span>
                            </label>
                            <input type="text" name="parcentage" placeholder="Parcentage" class="input input-bordered" />
                        </div>
                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-neutral w-40">Add Skill</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="card card-body w-full">
            <div class="card-body ">
            
                <div class="card bg-base-100 w-full max-w-lg shrink-0 shadow-2xl">
                
                <table class="table">
                <h1 class="bg-slate-300 p-2 rounded-sm">Skills List</h1>
                <?php if(isset($_SESSION['set'])) {?>
                        <div class="alert alert-success"><?= $_SESSION['set'] ?></div>
                        <?php } unset($_SESSION['set'])?>
                    <tr>
                        <th>Id</th>
                        <th>Skills</th>
                        <th>Parcentage</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    <?php foreach($skill_res as $index => $skills) {?>       
                    <tr>
                        <td><?= $index+1 ?></td>
                        <td><?= $skills['Name'] ?></td>
                        <td><?= $skills['Parcentage'] ?></td>

                        <td><a class="badge badge-<?=($skills['Status'] == 1 ? 'success': 'error') ?>" href="status.php?id=<?= $skills['Id'] ?>"><?=($skills['Status'] == 1 ? 'Active': 'Deactive') ?></a></td>

                        <td><a href="delete_skill.php?id=<?= $skills['Id'] ?>" title="Delete skill"><i class="fa-solid fa-delete-left"></i></a></td>
                        
                        <td><a href="edit.php?id=<?= $skills['Id'] ?>" title="Edit skill"><i class="fa-regular fa-pen-to-square"></i></a></td>
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