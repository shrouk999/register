<?php


function connection(): PDO
{
    $DSN = "mysql:host=localhost;dbname=fdb1029.awardspace.net";
    $USERNAME = "4794496_shrouktest1";
    $PASSWORD = "Sa123456789*";
    try {
        $DB = new PDO($DSN, $USERNAME, $PASSWORD);
        $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Database Connection Faild:{$e->getMessage()}";
        exit;
    }
    return $DB;
}
