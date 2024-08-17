<?php
require 'db.php';
require 'header.php';

$select_data = "SELECT * FROM abouts";
$data_query = mysqli_query($db_connection, $select_data);
$after_assoc_data = mysqli_fetch_assoc($data_query);
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
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Charts</a>
            </div>

            <div class="mx-8">
                <a href="#" class="flex justify-center items-center p-2 link link-hover">Deleveries</a>
            </div>
        </div>
        <div class="card card-body w-full">
            <div class="card-body ">
                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body" action="about_post.php" method="post">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Designation</span>
                            </label>
                            <input type="text" name="designation" placeholder="Designation" class="input input-bordered" value="<?= $after_assoc_data['Designation'] ?>" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                            <input type="text" name="name" placeholder="Name" class="input input-bordered" value="<?= $after_assoc_data['Name'] ?>" />

                        </div>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Description</span>
                            </label>
                            <textarea name="description" id="" placeholder="Description" class="input input-bordered"><?= $after_assoc_data['Description'] ?></textarea>

                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-neutral w-20">Update</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <div class="card card-body w-full">
            <div class="card-body ">
                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body" action="about_image_update.php" method="post" enctype="multipart/form-data">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Change Image</span>
                            </label>
                            <input type="file" name="image" class="file-input file-input-bordered w-full max-w-xs" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" />
                        </div>
                        <div class="mt-2">
                            <img src="/RegisterPage/uploads/<?= $after_assoc_data['Image'] ?>" id="blah" width="200" alt="">
                        </div>

                        <div class="form-control mt-6">
                            <button class="btn btn-neutral w-20">Update</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>

<?php require 'footer.php' ?>