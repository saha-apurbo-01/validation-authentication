
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="">

    <?php require 'header.php'?>

    <div class="card mt-2">
        <div class="card-body ">
            <h1 class="bg-slate-300 font-blod text-xl p-2 rounded">Welcome to admin panel</h1>
        </div>
    </div>
    
    <div class="h-10 w-16 mx-8 rounded-lg bg-green-400">
        <a href="users_list.php" class="flex justify-center items-center p-2 link link-hover">Users</a>
    </div>
    <?php require 'footer.php' ?>
    
</body>

</html>