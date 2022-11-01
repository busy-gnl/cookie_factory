<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header("Location: login.php");
}

if (isset($_SESSION['favorite'])) {
    $id = $_SESSION['favorite'];
} else {
    die('Aucun article dans le panier');
}

require 'inc/data/products.php';
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $catalog[$id]['name']; ?></h3>
                    <p><?= $catalog[$id]['description']; ?></p>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>