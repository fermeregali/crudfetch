<?php

if (isset($_POST)){
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    require("conexao.php");

    if (empty($_POST['idp'])) {

        $query = $pdo->prepare("INSERT INTO produtos (codigo, produto, preco, quantidade) VALUES (:cod, :pro, :pre, :qua)");
        $query->bindParam(":cod",$codigo);
        $query->bindParam(":pro",$produto);
        $query->bindParam(":pre",$preco);
        $query->bindParam(":qua",$quantidade);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else {
        $id = $_POST['idp'];

        $query = $pdo->prepare("UPDATE PRODUTOS set codigo = :cod, produto = :pro, preco= :pre, quantidade= :qua WHERE ID= :id");
        $query->bindParam(":cod",$codigo);
        $query->bindParam(":pro",$produto);
        $query->bindParam(":pre",$preco);
        $query->bindParam(":qua",$quantidade);
        $query->bindParam(":id",$id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }

}

//print_r($_POST); //show result request;
