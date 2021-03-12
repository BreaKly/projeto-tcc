<?php
    require_once('../../Conexao/Conexao.class.php');
    require_once('../../modelo/responsavelModel.php');
    try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        
        $nomeResp = $_GET['nomeResp'];

        $comando = $pdo->prepare('DELETE FROM responsavel WHERE Nome=:n');
        $comando->bindValue(":n", $nomeResp);
        if($comando->execute()) {
            header("refresh:0, ../../../frontend/listaGeral");
        } else {
            echo "O responsável ".$nomeResp." não foi excluída devido a problemas inesperados.";
        }


    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    }



?>