<?php

session_start();

require_once('model/user.php');

/****************************
 * ----- LOAD LOGIN PAGE -----
 ****************************/

function loginPage()
{
    $user = new stdClass();
    $user->id = $_SESSION['user_id'] ?? false;
    require('view/loginView.php');
}

/***************************
 * ----- LOGIN FUNCTION -----
 ***************************/

function login($post)
{
    $email = $post['email'];
    $password = $post['password'];
    // code uses the SHA-256 algorithm to hash the value of $password
    $passwordcode = hash('sha256', $password);
    $user_data = User::getUserByCredentials($email, $passwordcode);

    if ($user_data == null) {
        $error_msg = "Email ou mot de passe incorrect";
        require('view/loginView.php');
        return;
    }

    // Set session
    $_SESSION['user_id'] = $user_data['id'];
    $user_id = $_SESSION['user_id'] ?? false;
    header('location: index.php ');
}

/****************************
 * ----- LOGOUT FUNCTION -----
 ****************************/

function logout()
{
    $_SESSION = array();
    session_destroy();

    header('location: index.php');
}

/****************************
 * ----- TO GO TO the Home Page  
 * (FUNCTION) -----
 ****************************/

function previous()
{
    header('location: view/loginView.php');
}

/****************************
 * ----- TO GO TO the contact 
 * demand (FUNCTION) -----
 ****************************/

function contactForm()
    {
        header('location: view/contactForm.php');
    }

/****************************
 * ----- TO GO TO the 
 * registration page  (FUNCTION) -----
 ****************************/

 function signIn()
 {
    header('location: view/signInForm.php');
 }

 /****************************
 * ----- TO GO TO the 
 *  createAServer page  (FUNCTION) -----
 ****************************/

 function  createAServer()
 {
    header('location: view/ createAServer.php');
 }