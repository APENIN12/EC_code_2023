<?php
ob_start();
?>

<!-- /*************************************************************
 * ----- page to confirm the reception of the user demand -----
 ************************************************************** -->

<div class="container-fluid d-flex h-100 characterBackground">
    <div class= "row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3 class="mb-3 ">
                Thank you for your message! We'll answer you ASAP 🎉<br> 
            </h3>
            <div class="mb-3">
                <a class="text-dark mt-3" href="loginView.php"> ⬅️ Home Page</a>
            </div>
        </div>
    </div>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('base.php'); ?>