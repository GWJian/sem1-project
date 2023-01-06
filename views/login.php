<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->


<!-- Login -->
<section>
    <div class="container mt-5 mb-2 mx-auto" style="max-width: 900px">
        <div class="min-vh-50">
            <!-- login form -->
            <div class="card rounded shadow-sm mx-auto border-primary" style="max-width: 500px">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title text-center mb-3 py-3 border-bottom">
                        Login To Your Account
                    </h5>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" />
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-fu">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- links -->
            <div class="d-flex justify-content-between align-items-center gap-3 mx-auto pt-3" style="max-width: 500px">
                <a href="/" class="text-decoration-none small"><i class="bi bi-arrow-left-circle"></i> Go back</a>
                <a href="/signup" class="text-decoration-none small">Don't have an account? Sign up here
                    <i class="bi bi-arrow-right-circle"></i></a>
            </div>
        </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->