<?php
ob_start();
session_start();

 //***************************************************
 //* ----- page to say welcome to our new user  -----
 //****************************************************

// decode url
$pseudo = urldecode($_GET['pseudo']);
?>

<div class="container-fluid d-flex h-100 characterBackground">
    <div class= "row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3 class="mb-3 ">
                🎉 Welcome on Discoding 🎉<br> 
                Your pseudo is : <?php echo $pseudo ?>
            </h3>
            <div class="mb-3">
                <a class="text-dark mt-3" href="loginView.php"> ⬅️ Login page</a>
            </div>
        </div>
    </div>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('base.php'); ?>