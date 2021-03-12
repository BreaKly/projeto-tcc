<?php
    require_once('../../Conexao/Conexao.class.php');
    require_once('../../modelo/tccModel.php');
    try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        
        $tituloTcc = $_GET['tituloTcc'];

        $comando = $pdo->prepare('DELETE FROM tcc WHERE TituloTCC=:t');
        $comando->bindValue(":t", $tituloTcc);
        if($comando->execute()) {
            header("refresh:0, ../../../frontend/listaGeral");
        } else {
            echo "O tcc ".$tituloTcc." não foi excluída devido a problemas inesperados.";
        }


    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    }



?>