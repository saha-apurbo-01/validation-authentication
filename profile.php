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
    <div class="card bg-base-100 w-96 shadow-xl m-4">
        <div class="card-body">
            <h2 class="card-title bg-gray-400 rounded p-2">Edit Profile Info</h2>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email" placeholder="email" class="input input-bordered" />
            </div>

            <select class="select select-info w-full max-w-xs" name="country">
                <option disabled selected>Select Country</option>
                <option>BAN</option>
                <option>USA</option>
                <option>UK</option>
            </select>

            <div class="flex flex-row gap-4">
            <div class="flex flex-row gap-2">
              <input type="radio" name="radio" class="radio" />
              <h1>Male</h1>
            </div>
            <div class="flex flex-row gap-2">
              <input type="radio" name="radio" class="radio"  />
              <h1>Female</h1>
            </div>
          </div>
          <div class="form-control mt-1">
            <button class="btn btn-neutral">Update</button>
          </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
</body>

</html>