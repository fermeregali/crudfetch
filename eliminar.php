<?php
$data = file_get_contents("php://input");
//print_r($data);
require "conexao.php";
$query = $pdo->prepare("DELETE FROM produtos WHERE ID= :id");
$query->bindParam(":id", $data);
$query->execute();
echo "ok";

