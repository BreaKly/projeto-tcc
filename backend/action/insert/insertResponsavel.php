<?php
require_once('../../Conexao/Conexao.class.php');
require_once('../../modelo/responsavelModel.php');
try {
        $conn = new Conexao("../../Conexao/configDB.ini");
        $pdo = $conn->getPDO();
        $responsavel = new responsavelModelo();

        $responsavel->setNome($_POST['nome']);
        $responsavel->setEmail($_POST['email']);

        $respPDO = $pdo->prepare("INSERT INTO responsavel(Nome, Email) VALUES(:n, :e)"); 

        $responsavelNome = $responsavel->getNome();
        $responsavelEmail = $responsavel->getEmail();

        $respPDO->bindValue(":n", $responsavelNome);
        $respPDO->bindValue(":e", $responsavelEmail);

        if($respPDO->execute()) {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <div class='p-2'>
                </p style='font-size: 18px;'>Foi feito o cadastro do responsável com sucesso. Voltando automaticamente.</p>
                <a href='../../../frontend/listaGeral.php' class='btn btn-outline-primary'>Listagem geral</a>
                </div>";
            header("refresh:3, ../../../frontend/home.php");
        } else {
            echo 
                "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
                <p style='font-size: 18px;'>Um erro inesperado ocorreu!</p>
                <a href='../../../frontend/addResponsavel.php' class='btn btn-outline-primary m-2'>HOME</a>";
        }
    } catch(PDOException $e) {
        echo "Surgiu um erro inesperado relacionado ao Banco de Dados: ".$e->getMessage();
    } 
?>