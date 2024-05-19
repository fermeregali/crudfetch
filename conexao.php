<?php

$servidor = "mysql:dbname=crud;host=localhost";
$user="root";
$password="";

try {
    $pdo = new PDO($servidor,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
} catch (PDOException $e) {
    echo "conexao falhou" .$e->getMessage();
}