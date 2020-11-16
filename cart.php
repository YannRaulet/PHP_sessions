<?php 

session_start();
require 'inc/data/products.php';

if(!isset($_SESSION['loginname'])){
    header('location: login.php');
    die();
}

require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php
            foreach($_SESSION['cart'] as $id => $quantity) {
                echo '<li>' . $catalog[$id]['name'] . " : " . $quantity . '</li>';
            }
            ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
