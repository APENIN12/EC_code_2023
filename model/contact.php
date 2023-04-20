<?php
require_once('database.php');

 class Contact
{
    public static function messageContact($name, $email, $subject, $message)
    {
        //connection to the DB
        $db = init_db();
        //insert into Database
        $stmt = $db->prepare('INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $email, $subject, $message]);
    }
}
