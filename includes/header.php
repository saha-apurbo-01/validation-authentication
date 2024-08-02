<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- navbar part -->
    <div class="navbar bg-base-300">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">DashBoard</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a>Link</a></li>
                <li>
                    <details>
                        <summary>Parent</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a>Link 1</a></li>
                            <li><a>Link 2</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
        <label class="label">
            <a href="logout.php" class="label-text-alt link link-hover">Log Out</a>
        </label>
    </div>
    <!-- drawer part -->
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                Open drawer
            </label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-300 text-base-content min-h-full w-50 p-4">
                <!-- Sidebar content here -->
                <li><a>Apps</a></li>
                <li><a>Charts</a></li>
                <li><a>Tailwind</a></li>
                <li><a>Plugins</a></li>
                <li><a>Widget</a></li>
                <li><a>Dashboard</a></li>
                <li><a>Forms</a></li>
                <li><a>Tables</a></li>
                <li><a>Pages</a></li>
                <li><a>DaisyUi</a></li>
                <li><a>Repositories</a></li>
                <li><a>Pages</a></li>
                <li><a>Database</a></li>
                <li><a>Fontends</a></li>
                <li><a>Backends</a></li>
            </ul>
        </div>
    </div>
</body>

</html>