<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/**
 * Created by PhpStorm.
 * User: bouwehand
 * Date: 5-1-2016
 * Time: 16:59
 */
$pdo = new \PDO(
    'mysql:host=db;dbname=demoName',
    'demoUser',
    'demoPass'
);

die(var_dump($pdo));