<!-- page pour ajouter le profil freelance à la BDD -->
<?php
//se connection a une session utilisateur
ob_start(); 

// require_once "../model/database.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $bdd = new PDO("mysql:host=localhost;dbname=nomatech","root","root");

$host = $_ENV['DISCODING_DB_HOST'] ?? 'localhost';
        $dbname = $_ENV['DISCODING_DB_NAME'] ?? 'discoding';
        $charset = $_ENV['DISCODING_DB_CHARSET'] ?? 'utf8';
        $user = $_ENV['DISCODING_DB_USER'] ?? 'root';
        $password = $_ENV['DISCODING_DB_PASSWORD'] ?? 'root';

    
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",
            $user,
            $password,
            []);



// on récupére les valeurs du formulaire écrite dans 'name'
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

$passwordcode = hash('sha256', $password); //pour un mot de password hashé

$code = substr(hash('md5',$pseudo), -4); //

$newpseudo= $pseudo.'#'.$code;

//on insére les informations données par l'utilisateur + une image déjà définie
$statement = $db->prepare("INSERT INTO users(users.email, users.username, users.password) VALUES (?,?,?);");
$statement->execute([$email,$newpseudo,$passwordcode]);


// if (isset($_POST['submit'])) {
//     if(!empty ($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['password']){
//         $pseudo = $_POST['pseudo'];
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         $statement = $db->prepare("INSERT INTO users(users.email, users.username, users.password) VALUES (?,?,?);");
//         $statement->execute([$email,$newpseudo,$passwordcode]);
//         header('../view/loginView.php');
//     }
    


// }


?>


