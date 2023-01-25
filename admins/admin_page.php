<?php
//only admin can access
if ( !AUTHENTICATION::whoCanAccess('editor') ){
    header('Location:/admin_page');
    exit;
}


?>
<!-- require the header part -->
<?php require 'parts/header.php' ?>
<!-- require the header part -->


<!-- admin main page -->
<section class="bg-dark vh-100">
    <div class="container text-white">
        <h1 class="text-warning text-center display-1">Administration</h1>
    </div>

    <div class="container">
        <div class="list-group w-auto">
            <a href="/management" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://img.icons8.com/external-solid-design-circle/512/external-E-commerce-seo-development-and-marketing-solid-design-circle.png"
                    alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0" />
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Product Management</h6>
                    </div>
                </div>
            </a>

            <?php if ( Authentication::whoCanAccess('admin') ) : ?>
            <a href="/manage-users" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true">
                <img src="https://img.icons8.com/ios/512/admin-settings-male.png" alt="twbs" width="32" height="32"
                    class="rounded-circle flex-shrink-0" />
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Manage Users</h6>
                    </div>
                </div>
            </a>
            <?php endif; ?>

            <?php if ( Authentication::whoCanAccess('admin') ) : ?>
            <a href="/all_orders" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://img.icons8.com/external-photo3ideastudio-lineal-photo3ideastudio/512/external-shopping-cart-supermarket-photo3ideastudio-lineal-photo3ideastudio.png"
                    alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0" />
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">All Orders</h6>
                    </div>
                </div>
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- require the footer part -->
<?php require 'parts/footer.php' ?>
<!-- require the footer part -->