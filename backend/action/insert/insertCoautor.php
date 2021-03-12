<?php
require_once('../../Conexao/Conexao.class.php');
require_once('../../modelo/coautModel.php');
try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        $coautor = new CoautModelo();

        $coautor->setCodArtig($_POST['codArtigo']);
        $coautor->setNome($_POST['nomeCoat']);
        $coautor->setEmailCoaut($_POST['emailCoat']);

        $coautorPDO = $pdo->prepare("INSERT INTO coautor(CodArtig, Nome, EmailCoaut) 
        VALUES(:ca, :n, :e)"); 

        $coautorCodArtig = $coautor->getCodArtig();
        $coautorNome = $coautor->getNome();
        $coautorEmailCoaut = $coautor->getEmailCoaut();


        $coautorPDO->bindValue(":ca", $coautorCodArtig);
        $coautorPDO->bindValue(":n", $coautorNome);
        $coautorPDO->bindValue(":e", $coautorEmailCoaut);
        

        if($coautorPDO->execute()) {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <div class='p-2'>
                </p style='font-size: 18px;'>Foi feito o cadastro do co-autor com sucesso. Voltando automaticamente.</p>
                <a href='../../../frontend/listaGeral.php' class='btn btn-outline-primary'>Listagem geral</a>
                </div>";
            header("refresh:3, ../../../frontend/home.php");
        } else {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <p style='font-size: 18px;'>Um erro inesperado ocorreu!</p>
                <a href='../../../frontend/addCoaut.php' class='btn btn-outline-primary m-2'>HOME</a>";
        }
    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    } 
?>