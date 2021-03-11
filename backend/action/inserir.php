<?php
require_once('../Conexao/Conexao.class.php');
require_once('../modelo/artigoModel.php');
require_once('../modelo/coautModel.php');
try {
        $conn = new Conexao("../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        $artigo = new ArtigoModelo();
        $coaut = new CoautModelo();

        $artigo->setTitulo($_POST['titulo']);
        $artigo->setNatureza($_POST['natureza']);
        $artigo->setAutPrinc($_POST['autPrinc']);
        $artigo->setEmailAutPrinc($_POST['emailAutPrinc']);

        $artigoPDO = $pdo->prepare("INSERT INTO artigo(Titulo, Natureza, AutPrinc, EmailAutPrinc) 
        VALUES(:t, :n, :ap, :eap)"); 

        $artigoTitulo = $artigo->getTitulo();
        $artigoNatureza = $artigo->getNatureza();
        $artigoAutPrinc = $artigo->getAutPrinc();
        $artigoEmailAutPrinc = $artigo->getEmailAutPrinc();


        $artigoPDO->bindValue(":t", $artigoTitulo);
        $artigoPDO->bindValue(":n", $artigoNatureza);
        $artigoPDO->bindValue(":ap", $artigoAutPrinc);
        $artigoPDO->bindValue(":eap", $artigoEmailAutPrinc);

        if($artigoPDO->execute()) {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <div class='p-2'>
                </p style='font-size: 18px;'>Foi feito o cadastro de usuário com sucesso. Voltando automaticamente.</p>
                <a href='../../frontend/userLista.php' class='btn btn-outline-primary'>Lista usuários</a>
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