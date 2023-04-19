<?php
require_once('model/contact.php');

    function sendContactDemand($post)
    {
        //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

            $user_data = Contact::messageContact($name, $email, $subject, $message);
        
    }
