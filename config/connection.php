<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 30/04/2019
 * Time: 14:20
 */
$connection = null;
try {
    $username = 'root';
    $password = 'xxxxxx';
    $database = 'mysql:dbname=kuliah_pabw;host=localhost';
    $connection = new PDO($database, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage();
    die();
}
