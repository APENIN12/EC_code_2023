<?php
require_once('model/contact.php');

function sendContactDemand($post)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //send an email 
        $to = 'contact@discoding.com';
        $subject = 'Nouveau message de contact';
        $body = "+1 user demand ";
        $headers = "From: $email";
        mail($to, $subject, $body, $headers);

        //Static method messageContact() of the Contact class with four parameters
        $user_data = Contact::messageContact($name, $email, $subject, $message);

        header("location: view/contactConfirmation.php");
        
    }
