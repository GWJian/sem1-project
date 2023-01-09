<!-- require the header part -->
<?php require "parts/header.php" ?>
<!-- require the header part -->



<!-- admin main page -->
<section class="bg-dark vh-100">
    <div class="container text-white">
        <h1 class="text-warning text-center display-1">Administration</h1>
    </div>

    <div class="container">
        <div class="list-group w-auto">
            <a href="/movie_management" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true">
                <img src="https://cdn-icons-png.flaticon.com/512/31/31087.png" alt="twbs" width="32" height="32"
                    class="rounded-circle flex-shrink-0" />
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Movie Management</h6>
                    </div>
                </div>
            </a>
            <a href="/cart" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://thumbs.dreamstime.com/b/ticket-icon-white-background-vector-illustration-eps-113357837.jpg"
                    alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0" />
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Ticket order</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- require the footer part -->
<?php require "parts/footer.php" ?>
<!-- require the footer part -->