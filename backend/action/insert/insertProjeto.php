<?php
require_once('../Conexao/Conexao.class.php');
require_once('../modelo/artigoModel.php');
require_once('../modelo/coautModel.php');
try {
        $conn = new Conexao("../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        $projeto = new projetoModelo();

        $projeto->setCodProj($_POST['Código Do Projeto']);
        $projeto->setCodResp($_POST['Código Do Responsável']);
        $projeto->setDataInicio($_POST['Data De Início']);
        $projeto->setDataFim($_POST['Data De Fim']);
        $projeto->setSituAtual($_POST['Situação Atual']);

        $projetoPDO = $pdo->prepare("INSERT INTO projeto(CodProj, CodResp, DataInicio, DataFim, SituAtual) 
        VALUES(:t, :n, :ap, :eap)"); 

        $projetoCodProj = $projeto->getCodProj();
        $projetoCodResp = $projeto->getCodResp();
        $projetoDataInicio = $projeto->getDataInicio();
        $projetoDataFim = $projeto->getDataFim();
        $projetoSituAtual = $projeto->getSituAtual();

        $projetoPDO->bindValue(":t", $projetoCodProj);
        $projetoPDO->bindValue(":n", $projetoCodResp);
        $projetoPDO->bindValue(":ap", $projetoDataInicio);
        $projetoPDO->bindValue(":eap", $projetoDataFim);
        $projetoPDO->bindValue(":eap", $projetoSituAtual);
        if($artigoPDO->execute()) {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <div class='p-2'>
                </p style='font-size: 18px;'>Foi feito o cadastro do artigo com sucesso. Voltando automaticamente.</p>
                <a href='../../frontend/listaGeral.php' class='btn btn-outline-primary'>Listagem geral</a>
                </div>";
            header("refresh:3, ../../frontend/registrar.php");
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