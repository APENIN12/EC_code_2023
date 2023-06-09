<?php

date_default_timezone_set('Europe/Paris');

//***** List of the controllers *****/
require_once('controller/conversationController.php');
require_once('controller/friendController.php');
require_once('controller/loginController.php');
require_once ('controller/contactController.php');
require_once ('controller/signOnController.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {

        case 'login':
            if (!empty($_POST)) {
                login($_POST);
            } else {
                loginPage();
            }
            break;

        case 'previous':
            previous();
            break;

        case 'logout':
            logout();
            break;
        
        //***** router to sign in, create a new account *****/
        case 'registration':
            if (!empty($_POST)) {
                newUser($_POST);
            } 
            break; 
        
        case 'conversation':
            conversationPage();
            break;

        case 'friend':
            friendPage();
            break;

        case 'contact':
            if (!empty($_POST)) {
                sendContactDemand($_POST);
            }
            break;
        
        case 'contactForm':
            contactForm();
            break;
        
        case 'signIn':
            signIn();
            break;

        case 'createAServer':
            createAServer();
            break;

    }
} else {
    $user_id = $_SESSION['user_id'] ?? false;

    if ($user_id) {
        friendPage();
    } else {
        loginPage();
    }
}
