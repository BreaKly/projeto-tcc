<?php
    require_once('../../Conexao/Conexao.class.php');
    require_once('../../modelo/artigoModel.php');
    try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        
        $codArtigo = $_GET['codArtigo'];

        $comando = $pdo->prepare('DELETE FROM artigo WHERE CodArtigo=:n');
        $comando->bindValue(":n", $codArtigo);
        if($comando->execute()) {
            header("refresh:0, ../../../frontend/listaGeral");
        } else {
            echo "O Artigo ".$codArtigo." não foi excluída devido a problemas inesperados.";
        }


    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    }



?>