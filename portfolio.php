<?php
require 'db.php';
require 'header.php';

$select = "SELECT * FROM portfolios";
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

            <div class="mx-8">
                <a href="portfolio.php" class="flex justify-center items-center p-2 link link-hover">Portfolio</a>
            </div>
        </div>
        <div class="card card-body w-full">
            <div class="card-body ">
                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body" action="port_post.php" method="post" enctype="multipart/form-data">
                        <h1 class="bg-slate-300 rounded-sm p-2">Add Portfolio</h1>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Title</span>
                            </label>
                            <input type="text" name="title" placeholder="Title" class="input input-bordered" />
                        </div>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Catagory</span>
                            </label>
                            <input type="text" name="catagory" placeholder="Catagory" class="input input-bordered" />
                        </div>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Image</span>
                            </label>
                            <input type="file" name="image" class="file-input file-input-bordered w-full max-w-xs" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" />
                        </div>
                        <div>
                            <img src="" id="blah" alt="">
                        </div>


                        <div class="form-control mt-6">
                            <button class="btn btn-neutral w-40">Add Portfolio</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <div class="card card-body w-full">
            <div class="card-body ">
                <div class="card bg-base-100 w-full max-w-xl shrink-0 shadow-2xl">
                    <h1 class="bg-slate-300 p-2">Portfolio List</h1>
                    <table class="table table-bordered">

                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Catagory</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        <?php foreach ($select_res as $index => $ports) { ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $ports['Title'] ?></td>
                                <td><?= $ports['Catagory'] ?></td>
                                <td><img src="uploads/<?= $ports['Image'] ?>" width="100" alt=""></td>


                                <td><a class="badge badge-<?= ($ports['Status'] == 1 ? 'success' : 'error') ?>" href="portfolio_status.php?id=<?= $ports['Id'] ?>"><?= ($ports['Status'] == 1 ? 'Active' : 'Deactive') ?></a></td>

                                <td><a href="" title="Delete Portfolio"><i class="fa-solid fa-delete-left"></i></a></td>

                                <td><a href="" title="Edit Portfolio"><i class="fa-regular fa-pen-to-square"></i></a></td>


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