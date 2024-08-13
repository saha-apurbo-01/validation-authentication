<?php require 'header.php' ?>
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

  
  <div class="flex flex-row  mx-10">
    <!-- profile info -->
    <div class="card bg-base-100 w-96 shadow-xl m-4">
      <form method="post" action="profile_update.php" class="card-body mt-2">
        <?php if (isset($_SESSION['updated'])) { ?>
          <div class="alert alert-success"><?= $_SESSION['updated'] ?></div>
        <?php }
        unset($_SESSION['updated']) ?>
        <h2 class="card-title bg-gray-400 rounded p-2">Edit Profile Info</h2>
        <div class="form-control">
          <input type="hidden" name="user_id" class="input input-bordered mb-2" value="<?= $after_assoc_logged['Id'] ?>" />
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" name="email" class="input input-bordered" value="<?= $after_assoc_logged['Email'] ?>" />

        </div>

        <select class="select select-info w-full max-w-xs" name="country">
          <option disabled selected>Select Country</option>
          <option value="BAN" <?= ($after_assoc_logged['Country'] == "BAN" ? "selected" : "") ?>>BAN</option>
          <option value="USA" <?= ($after_assoc_logged['Country'] == "USA" ? "selected" : "") ?>>USA</option>
          <option value="UK" <?= ($after_assoc_logged['Country'] == "UK" ? "selected" : "") ?>>UK</option>
        </select>

        <div class="flex flex-row gap-4">
          <div class="flex flex-row gap-2">
            <input type="radio" name="radio" class="radio" value="male" <?= ($after_assoc_logged['Gender'] == "male" ? "checked" : "") ?> />
            <h1>Male</h1>
          </div>
          <div class="flex flex-row gap-2">
            <input type="radio" name="radio" class="radio" value="female" <?= ($after_assoc_logged['Gender'] == "female" ? "checked" : "") ?> />
            <h1>Female</h1>
          </div>
        </div>
        <div class="form-control mt-1">
          <button class="btn btn-neutral w-20">Update</button>
      </form>
    </div>
  </div>
  <!-- password info -->

  <div class="card bg-base-100 w-96 shadow-xl m-4">

    <form method="post" action="password_update.php" class="card-body">
      <?php if (isset($_SESSION['pass_updated'])) { ?>
        <div class="alert alert-success"><?= $_SESSION['pass_updated'] ?></div>
      <?php }
      unset($_SESSION['pass_updated']) ?>
      <h2 class="card-title bg-gray-400 rounded p-2">Update Password</h2>
      <div class="form-control">
        <input type="hidden" name="user_id" class="input input-bordered mb-2" value="<?= $after_assoc_logged['Id'] ?>" />
        <label class="label">
          <span class="label-text">Current Password</span>
        </label>
        <input type="Password" name="current_password" placeholder="Current Password" class="input input-bordered" />

      </div>
      <?php if (isset($_SESSION['cpass_err'])) { ?>
        <strong><?= $_SESSION['cpass_err'] ?></strong>
      <?php }
      unset($_SESSION['cpass_err']) ?>

      <?php if (isset($_SESSION['cpass_err'])) { ?>
        <strong><?= $_SESSION['cpass_err'] ?></strong>
      <?php }
      unset($_SESSION['cpass_err']) ?>
      <div class="form-control">
        <label class="label">
          <span class="label-text">New Password</span>
        </label>
        <input type="Password" name="new_password" placeholder="New Password" class="input input-bordered" />
      </div>
      <?php if (isset($_SESSION['npass_err'])) { ?>
        <strong><?= $_SESSION['npass_err'] ?></strong>
      <?php }
      unset($_SESSION['npass_err']) ?>


      <?php if (isset($_SESSION['dont_match'])) { ?>
        <strong><?= $_SESSION['dont_match'] ?></strong>
      <?php }
      unset($_SESSION['dont_match']) ?>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Confirm Password</span>
        </label>
        <input type="Password" name="confirm_password" placeholder="Confirm Password" class="input input-bordered" />
      </div>
      <?php if (isset($_SESSION['conpass_err'])) { ?>
        <strong><?= $_SESSION['conpass_err'] ?></strong>
      <?php }
      unset($_SESSION['conpass_err']) ?>

      <div class="form-control mt-1">
        <button class="btn btn-neutral w-20">Update</button>
      </div>
    </form>
  </div>
  <!-- update photo -->
  <div class="card bg-base-100 w-96 shadow-xl m-4">
    <form method="post" action="photo_update.php" class="card-body " enctype="multipart/form-data">
      <?php if(isset($_SESSION['photo_update'])) {?>
        <div class="alert alert-success"><?= $_SESSION['photo_update']?></div>
        <?php } unset($_SESSION['photo_update'])?>
      <h2 class="card-title bg-gray-400 rounded p-2">Update Photo</h2>
      <input type="hidden" name="user_id" class="input input-bordered mb-2" value="<?= $after_assoc_logged['Id'] ?>" />
      <input type="file" name="photo" class="file-input file-input-bordered w-full max-w-xs" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" />

      <?php if (isset($_SESSION['err'])) { ?>
        <strong><?= $_SESSION['err'] ?></strong>
      <?php }
      unset($_SESSION['err']) ?>
      <div class="mt-2">
        <img src="/RegisterPage/uploads/<?= $after_assoc_logged['Photo'] ?>" id="blah" width="200" alt="">
      </div>
      <div class="form-control mt-1">
        <button class="btn btn-neutral w-20">Update</button>
    </form>
  </div>
  </div>
  </div>
 
</body>

</html>

<?php require 'footer.php' ?>