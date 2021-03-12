<?php
    require_once('../../Conexao/Conexao.class.php');
    require_once('../../modelo/coautModel.php');
    try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        
        $nomeCoaut = $_GET['nomeCoaut'];

        $comando = $pdo->prepare('DELETE FROM coautor WHERE Nome=:n');
        $comando->bindValue(":n", $nomeCoaut);
        if($comando->execute()) {
            header("refresh:0, ../../../frontend/listaGeral");
        } else {
            echo "O co-autor ".$nomeCoaut." não foi excluída devido a problemas inesperados.";
        }


    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    }



?>