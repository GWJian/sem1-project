<!DOCTYPE html>
<html lang="en">
<head>
  <title>GC-login</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
  />
  <style type="text/css">
    body {
      background: rgb(33, 37, 41);
    }
  </style>
</head>
<body>


  <!-- nav menu-->
  <header class="p-3 bg-black">
    <div class="container">
      <div
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
      >
        <ul
          class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
        >
          <li>
            <a href="/" class="nav-link px-2 text-white">Home</a>
          </li>
          <li>
            <a href="/movie" class="nav-link px-2 text-white">Movies</a>
          </li>
          <li>
            <a href="/contant_us" class="nav-link px-2 text-white"
              >Contant Us</a
            >
          </li>
        </ul>

        <div class="text-end">
          <a href="/login">
            <button type="button" class="btn btn-outline-light me-2">
              Login
            </button></a
          >
          <a href="/signup"
            ><button type="button" class="btn btn-warning">Sign-up</button></a
          >
          <a href="/logout"
            ><button type="button" class="btn btn-danger">Logout</button></a
          >
          <a href="/admin_page"
            ><button type="button" class="btn btn-primary">
              admin page
            </button></a
          >
        </div>
      </div>
    </div>
  </header>