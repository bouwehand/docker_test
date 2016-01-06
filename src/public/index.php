<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/**
 * Created by PhpStorm.
 * User: bouwehand
 * Date: 5-1-2016
 * Time: 16:59
 */
try {
    $pdo = new \PDO(
        'mysql:host=db;dbname=demoName',
        'root',
        'demoPass'
    );
} catch(Exception $e) {
    echo $e->getMessage();
}


die(var_dump($pdo));