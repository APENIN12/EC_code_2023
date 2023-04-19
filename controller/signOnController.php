
<?php

require_once('model/user.php');
function newUser($post){

//We retrieve the values of the form inputs written in 'name'
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

//Password Hashing Method : creating a secure hash function, with SHA-256
$passwordcode = hash('sha256', $password);

//We create a unique username by combining the '#' symbol with unique elements such as numbers or letters
$code = substr(hash('md5',$pseudo), -4); //
$newpseudo= $pseudo.'#'.$code;

//we call the model with the function addNewUser
$user_data = User::addNewUser($email,$newpseudo,$passwordcode);

// encode url : If we don't encode the new username, it might mistake it for an anchor and cause some chaos!
$pseudo_encoding = urlencode($newpseudo);

header("Location: view/welcomeNewUser.php?pseudo=$pseudo_encoding");

exit();

}



