<?php
ob_start();
session_start();

// Récupération du pseudo dans l'URL
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$pseudo = urldecode($_GET['pseudo']);
$fragment = isset($_GET['#']) ? $_GET['#'] : '#';

echo $pseudo;
?>


<div class="container-fluid d-flex h-100 characterBackground">
    <div class= "row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
        Welcome on Discoding!<br> 
        Your pseudo is :
        </div>
    </div>
</div>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Confirmation d'inscription</title>
</head>
<body>
    <h3 style= "margin-left:2%;">Welcome on Discoding!</h3>
    <p style= "margin-left:2%;">Your pseudo is : <?php //echo $pseudo ?></p>
    <p style= "margin-left:2%;">Thank you for you registration .</p>
</body>
</html>
<?php $content =ob_get_clean(); ?>
<?php require('base.php'); ?>