<?php

/*************************************
 * ----- INIT DATABASE CONNECTION -----
 *************************************/

function init_db()
{
    try {

        $host = $_ENV['DISCODING_DB_HOST'] ?? '51.91.101.108:3306';
        $dbname = $_ENV['DISCODING_DB_NAME'] ?? 'discoding';
        $charset = $_ENV['DISCODING_DB_CHARSET'] ?? 'utf8';
        $user = $_ENV['DISCODING_DB_USER'] ?? 'discoding';
        $password = $_ENV['DISCODING_DB_PASSWORD'] ?? '^tuSMv4pUu8^M2tRwgVPETdQ36W1@x';

        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",
        $user,
        $password,
        []);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $db;
}
