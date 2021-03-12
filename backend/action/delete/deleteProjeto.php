<?php
    require_once('../../Conexao/Conexao.class.php');
    require_once('../../modelo/projetoModel.php');
    try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        
        $codProj = $_GET['codProj'];

        $comando = $pdo->prepare('DELETE FROM projeto WHERE CodProj=:cp');
        $comando->bindValue(":cp", $codProj);
        if($comando->execute()) {
            header("refresh:0, ../../../frontend/listaGeral");
        } else {
            echo "O Projeto ".$codProj." não foi excluída devido a problemas inesperados.";
        }


    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    }



?>