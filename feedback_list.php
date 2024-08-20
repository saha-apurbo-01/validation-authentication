<?php 
require 'db.php';
require 'header.php';

$select = "SELECT * FROM feedbacks";
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

            <div class="mx-8">
                <a href="portfolio.php" class="flex justify-center items-center p-2 link link-hover">Portfolios</a>
            </div>

            <div class="mx-8">
                <a href="feedback_list.php" class="flex justify-center items-center p-2 link link-hover">Feedbacks</a>
            </div>

            <div class="mx-8">
                <a href="contact_list.php" class="flex justify-center items-center p-2 link link-hover">Contacts</a>
            </div>
        </div>
        <div class="card card-body w-full">
            <div class="card-body ">
            <div class="card bg-base-100 w-full max-w-xl shrink-0 shadow-2xl">
               
                <table class="table table-bordered">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Feedback</th>
                    <th>Action</th>

                </tr>
                <?php foreach($select_res as $index=>$feedbacks) {?>
                    <tr>
                    <td><?= $index+1 ?></td>
                    <td><?= $feedbacks['Name'] ?></td>
                    <td><?= $feedbacks['Designation'] ?></td>
                    <td><img src="uploads/<?= $feedbacks['Image'] ?>" width="50" alt=""></td>
                    <td><?= $feedbacks['Feedback'] ?></td>
                    <td><a href="feedback_delete.php?id=<?= $feedbacks['Id'] ?>" class="badge badge-error">Delete</a></td>

                </tr>
                    <?php } ?>
                </table>   
               
            </div>
            
            </div>
    </div>
</div>
</body>
</html>
<?php  require 'footer.php' ?>