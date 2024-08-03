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

  <?php require 'header.php' ?>
  <div class="flex flex-row mx-10">

    <div class="card bg-base-100 w-96 shadow-xl m-4">
      <form method="post" action="profile_update.php" class="card-body mt-2">
        <?php if (isset($_SESSION['updated'])) { ?>
          <div class="alert alert-success"><?= $_SESSION['updated'] ?></div>
        <?php }
        unset($_SESSION['updated']) ?>
        <h2 class="card-title bg-gray-400 rounded p-2">Edit Profile Info</h2>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Id</span>
          </label>
          <input type="text" name="user_id" class="input input-bordered mb-2" value="<?= $after_assoc_logged['Id'] ?>" />
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
          <button class="btn btn-neutral">Update</button>
      </form>
    </div>
  </div>

  <div class="card bg-base-100 w-96 shadow-xl m-4">
    <div class="card-body">
      <h2 class="card-title bg-gray-400 rounded p-2">Update Password</h2>
      <div class="form-control">
        <label class="label">
          <span class="label-text">Current Password</span>
        </label>
        <input type="Password" name="password" placeholder="Current Password" class="input input-bordered" />
      </div>
      <div class="form-control">
        <label class="label">
          <span class="label-text">New Password</span>
        </label>
        <input type="Password" name="password" placeholder="New Password" class="input input-bordered" />
      </div>

      <div class="form-control">
        <label class="label">
          <span class="label-text">Confirm Password</span>
        </label>
        <input type="Password" name="password" placeholder="Confirm Password" class="input input-bordered" />
      </div>






      <div class="form-control mt-1">
        <button class="btn btn-neutral">Update</button>
      </div>
    </div>
  </div>

  <div class="card bg-base-100 w-96 shadow-xl m-4">
    <div class="card-body mt-20">
      <h2 class="card-title bg-gray-400 rounded p-2">Update Photo</h2>

      <input type="file" class="file-input file-input-bordered w-full max-w-xs" />

      <div class="form-control mt-1">
        <button class="btn btn-neutral">Update</button>
      </div>
    </div>
  </div>
  </div>
  <?php require 'footer.php' ?>
</body>

</html>