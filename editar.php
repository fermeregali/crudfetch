<?php

$data = file_get_contents("php://input");
require "conexao.php";
$query = $pdo->prepare("SELECT * FROM produtos WHERE ID = :id");
$query->bindParam(":id",$data);
$query->execute();
$resultado = $query->fetch(PDO::FETCH_ASSOC);
//print_r($resultado);

echo json_encode($resultado);