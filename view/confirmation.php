<?php
 ob_start();
session_start();
// Récupération du pseudo dans l'URL
$pseudo = $_GET['pseudo'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation d'inscription</title>
</head>
<body>
    <h3 style= "margin-left:2%;">Welcome on Discoding!</h3>
    <p style= "margin-left:2%;">Your pseudo is : <?php echo $pseudo ?></p>
    <p style= "margin-left:2%;">Thank you for you registration .</p>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>