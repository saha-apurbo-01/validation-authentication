<?php
require 'db.php';
require 'header.php';

$logo = "SELECT * FROM logos";
$logo_query = mysqli_query($db_connection, $logo);
$after_assoc_logo = mysqli_fetch_assoc($logo_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>


    <div class="flex gap-10 m-4">
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
                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <form action="logo_update.php" enctype="multipart/form-data" method="post">
            <div class="card card-body shadow-xl">

                <h1 class="card-title bg-gray-400 rounded p-2 ">Upload your logo here</h1>
                <h1 class=" text-xl p-2">Header Logo</h1>
                <input type="file" name="header_logo" class="file-input file-input-bordered w-full max-w-xs" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" />
                <img src="/RegisterPage/logos/<?= $after_assoc_logo['Header'] ?>" id="blah" class="w-52" alt="">
                <button type="submit" class="btn btn-neutral w-20 mt-1">update</button>


            </div>
        </form>
                </div>
            </div>
        </div>
        <div class="card card-body w-full">
            <div class="card-body ">
                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <form action="logo_update.php" enctype="multipart/form-data"  method="post">
            <div class="card card-body shadow-xl">

                <h1 class="card-title bg-gray-400 rounded p-2">Upload your logo here</h1>
                <h1 class=" text-xl p-2">Footer Logo</h1>
                <input type="file" name="footer_logo" class="file-input file-input-bordered w-full max-w-xs" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])"/>
                <img src="/RegisterPage/logos/<?= $after_assoc_logo['Footer'] ?>" id="blah1" class="w-52" alt="">
                <button type="submit" class="btn btn-neutral w-20 mt-1">update</button>


            </div>
        </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php require 'footer.php' ?>