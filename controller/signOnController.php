
<?php

require_once('model/user.php');

function newUser($post){

//We retrieve the values of the form inputs written in 'name'
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

//Password Hashing Method : creating a secure hash function, with SHA-256
$hashpassword = hash('sha256', $password);

//We create a unique username by combining the '#' symbol with unique elements such as numbers or letters
$hash = substr(hash('md5',$pseudo), -4);
$newpseudo= $pseudo.'#'.$hash;

//we call the model with the function addNewUser : return false OR id 
$user_data = User::addNewUser($email,$newpseudo,$hashpassword);


//check if is not the same user 
if ($user_data !== false) {
    // encode url : If we don't encode the new username, it might mistake it for an anchor and cause some chaos!
    $pseudoencoding = urlencode($newpseudo);
    header("Location: view/welcomeNewUser.php?pseudo=$pseudoencoding");
} else {
    header("Location: view/signinForm.php");
}

exit();

}



