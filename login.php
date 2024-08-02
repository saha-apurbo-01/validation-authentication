<?php session_start() ?>

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
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <form method="post" action="login_post.php" class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="email" class="input input-bordered"  />
                    </div>


                    <?php if(isset($_SESSION['email_err'])) {?>
                        <strong><?= $_SESSION['email_err']  ?></strong>
                        <?php } unset($_SESSION['email_err'])?>


                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="password" class="input input-bordered"  />


                        <?php if(isset($_SESSION['pass_err'])) {?>
                        <strong><?= $_SESSION['pass_err']?></strong>
                        <?php } unset($_SESSION['pass_err'])?>

                        
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>