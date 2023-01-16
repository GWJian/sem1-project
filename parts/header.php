<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GC</title>
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time()?> " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
</head>

<style type="text/css">
body {
    background: rgb(33, 37, 41);
}
</style>

<body>


    <!-- nav menu-->
    <header class="p-3 bg-black">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="/" class="nav-link px-2 text-white">Home</a>
                    </li>
                    <li>
                        <a href="/upcoming" class="nav-link px-2 text-white">Upcoming</a>
                    </li>
                    <li>
                        <a href="/cart" class="nav-link px-2 text-white">Cart</a>
                    </li>
                    <li>
                        <a href="/contant_us" class="nav-link px-2 text-white">Contant Us</a>
                    </li>
                    <?php if ( Authentication::whoCanAccess('editor') ) : ?>
                    <a href="/admin_page" class="btn btn-primary">Admin/Editor</a>
                    <?php endif; ?>
                </ul>

                <div class="text-end">
                    <?php if (AUTHENTICATION::isLoggedIn()) : ?>
                    <a href="/logout" class="btn btn-danger">Logout</a>
                    <?php else : ?>
                    <a href="/login" class="btn btn-outline-light me-2">Login</a>
                    <a href="/signup" class="btn btn-warning">Sign-up</a>
                    <?php endif; ?>

                    </a>
                </div>
            </div>
        </div>
    </header>