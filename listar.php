<?php

    $data = file_get_contents("php://input");
    //print_r($data);

    require "conexao.php";
    $consulta = $pdo->prepare("SELECT * FROM produtos ORDER BY ID DESC");
    $consulta->execute();

    if ($data !="") {
        $consulta = $pdo->prepare("SELECT * FROM produtos where id like '%".$data."%' or produto like '%".$data."%'    ");
        $consulta->execute();
    }

    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultado as $data) {
        echo "<tr>
        <td>".$data['id']."</td>
        <td>".$data['produto']."</td>
        <td>".$data['preco']."</td>
        <td>".$data['quantidade']."</td>
        <td>
            <button type='button class='btn btn-success' onclick=Editar('".$data['id']."')>Editar</button>
            <button type='button class='btn btn-danger' onclick=Eliminar('".$data['id']."')>Eliminar</button>
        </td>
        </tr>";
    }