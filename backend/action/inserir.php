<?php
require_once('../Conexao/Conexao.class.php');
require_once('../modelo/artigoModel.php');
try {
        $conn = new Conexao("../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        $artigo = new artigoModelo();

        $artigo->setTitulo($_POST['titulo']);
        $artigo->setNatureza($_POST['natureza']);
        $artigo->setAutPrinc(($_POST['autPrinc']));
        $artigo->setEmailAutPrinc(($_POST['emailAutPrinc']));

        $artigo = $pdo->prepare("INSERT INTO artigo(Titulo, Natureza, AutPrinc, EmailAutPrinc) 
        VALUES(:t, :n, :ap, :eap)"); 

        $artigoTitulo = $user->getTitulo();
        $artigoNatureza = $user->getNatureza();
        $artigoAutPrinc = $user->getAutPrinc();
        $artigoEmailAutPrinc = $user->getEmailAutPrinc();

        $inserir->bindValue(":t", $artigoTitulo);
        $inserir->bindValue(":n", $artigoNatureza);
        $inserir->bindValue(":ap", $artigoAutPrinc);
        $inserir->bindValue(":eap", $artigoEmailAutPrinc);

        if($inserir->execute()) {
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
                <a href='../../frontend/registrar.php' class='btn btn-outline-primary m-2'>HOME</a>";
        }
    } catch(PDOExpection $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    }
?>