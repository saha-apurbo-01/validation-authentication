<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>


</head>


<body>



  <div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">

        <form method="post" action="register_post.php" class="card-body">

          <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
            <?php } unset($_SESSION['success']) ?>

          <div class="form-control">
            <?php
            if (isset($_SESSION['email'])) {
              $email = $_SESSION['email'];
            } else {
              $email = ' ';
            }
            ?>

            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" name="email" placeholder="Email" value="<?= $email ?>" class="input input-bordered" />
            <?php if (isset($_SESSION['email_err'])) { ?>
              <strong><?= $_SESSION['email_err'] ?></strong>
            <?php }
            unset($_SESSION['email_err']) ?>
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" placeholder="Password" class="input input-bordered" />
            <?php if (isset($_SESSION['pass_err'])) { ?>
              <strong><?= $_SESSION['pass_err'] ?></strong>
            <?php }
            unset($_SESSION['pass_err']) ?>
          </div>
          <div class="form-control">
            <?php if (isset($_SESSION['pass_errr'])) { ?>
              <strong><?= $_SESSION['pass_errr'] ?></strong>
            <?php }
            unset($_SESSION['pass_errr']) ?>
            <label class="label">
              <span class="label-text">Confirm Password</span>
            </label>

            <input type="password" name="con_password" placeholder="Confirm Password" class="input input-bordered" />
            <?php if (isset($_SESSION['con_pass_err'])) { ?>
              <strong><?= $_SESSION['con_pass_err'] ?></strong>
            <?php }
            unset($_SESSION['con_pass_err']) ?>

          </div>
          <?php
            if (isset($_SESSION['country'])) {
              $country = $_SESSION['country'];
            } else {
              $country = ' ';
            }
            ?>
          <select class="select select-info w-full max-w-xs" name="country">
          <option disabled selected>Select Country</option>
            <option value="BAN" <?= ($country == "BAN" ? "selected": "")?>>BAN</option>
            <option value="USA" <?= ($country == "USA" ? "selected": "")?>>USA</option>
            <option value="UK" <?=  ($country == "UK" ? "selected" : "")?>>UK</option>
          </select>
          <?php
          if (isset($_SESSION['country_err'])){ ?>
          <strong><?= $_SESSION['country_err']?></strong>
          <?php } unset($_SESSION['country_err']) ?>

          <?php
            if (isset($_SESSION['gender'])) {
              $gender = $_SESSION['gender'];
            } else {
              $gender = ' ';
            }
            ?>
          <div class="flex flex-col gap-2">
          <div class="flex flex-row gap-2">
          <input type="radio" name="radio" class="radio" value="male" <?=($gender == "male"? "checked": "") ?> />
          <h1>Male</h1>
          </div>
          <div class="flex flex-row gap-2">
          <input type="radio" name="radio" class="radio" value="female" <?=($gender == "female"? "checked": "") ?> />
          <h1>Female</h1>
          </div>
          </div>
          <?php if(isset($_SESSION['gender_err'])) {?>
            <strong><?= $_SESSION['gender_err'] ?></strong>
            <?php } unset($_SESSION['gender_err'])?>
          <div class="form-control mt-6">
            <button class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  
</body>

</html>


<?php
unset($_SESSION['email']);
unset($_SESSION['country']);
unset($_SESSION['gender']);
?>