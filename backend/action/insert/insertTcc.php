<?php
require_once('../../Conexao/Conexao.class.php');
require_once('../../modelo/tccModel.php');
try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        $tcc = new TccModelo();

        $tcc->setCodProj($_POST['codProj']);
        $tcc->setTituloTCC($_POST['titulo']);
        $tcc->setAutorTCC($_POST['autor']);
        $tcc->setSituacao($_POST['situacao']);

        $tccPDO = $pdo->prepare("INSERT INTO tcc(CodProj, TituloTCC, AutorTCC, Situacao) 
        VALUES(:cp, :t, :a, :s)"); 

        $tccCodProj = $tcc->getCodProj();
        $tccTitulo = $tcc->getTituloTCC();
        $tccAutor = $tcc->getAutorTCC();
        $tccSituacao = $tcc->getSituacao();

        $tccPDO->bindValue(":cp", $tccCodProj);
        $tccPDO->bindValue(":t", $tccTitulo);
        $tccPDO->bindValue(":a", $tccAutor);
        $tccPDO->bindValue(":s", $tccSituacao);

        if($tccPDO->execute()) {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <div class='p-2'>
                </p style='font-size: 18px;'>Foi feito o cadastro do artigo com sucesso. Voltando automaticamente.</p>
                <a href='../../../frontend/listaGeral.php' class='btn btn-outline-primary'>Listagem geral</a>
                </div>";
            header("refresh:3, ../../frontend/home.php");
        } else {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <p style='font-size: 18px;'>Um erro inesperado ocorreu!</p>
                <a href='../../frontend/addArtigo.php' class='btn btn-outline-primary m-2'>HOME</a>";
        }
    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    } 
?>