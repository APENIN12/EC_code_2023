<?php
require_once('database.php');

 class Contact
{
    public static function messageContact($name, $email, $subject, $message)
    {
        $db = init_db();

        $stmt = $db->prepare('INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $email, $subject, $message]);
    }
}
