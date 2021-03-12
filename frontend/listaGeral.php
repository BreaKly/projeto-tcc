<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
        require_once('../backend/Conexao/Conexao.class.php');
        require_once('../backend/modelo/artigoModel.php');
        require_once('../backend/modelo/coautModel.php');
        require_once('../backend/modelo/projetoModel.php');
        require_once('../backend/modelo/responsavelModel.php');
        require_once('../backend/modelo/tccModel.php');
            try {
            $conn = new Conexao("../backend/Conexao/configDB.ini");
            $pdo = $conn->getPDO();

            $artigoModel = new ArtigoModelo();
            $coautModel = new CoautModelo();
            $projetoModel = new ProjetoModelo();
            $responsavelModel = new ResponsavelModelo();
            $tccModel = new TccModelo();
            
            $sthArtigo = $pdo->prepare("SELECT * FROM artigo;");
            $sthResponsavel = $pdo->prepare("SELECT * FROM responsavel;");
            $sthTcc = $pdo->prepare("SELECT * FROM tcc;");
            $sthProjeto= $pdo->prepare("SELECT * FROM projeto;");
            $sthCoAutor = $pdo->prepare("SELECT * FROM coautor;");

            $sthArtigo->execute();
            $sthResponsavel->execute();
            $sthTcc->execute();
            $sthProjeto->execute();
            $sthCoAutor->execute();

            $modeloArtigo = $sthArtigo->fetchAll(PDO::FETCH_CLASS, "ArtigoModelo");
            $modeloResponsavel = $sthResponsavel->fetchAll(PDO::FETCH_CLASS, "ResponsavelModelo");
            $modeloTcc = $sthTcc->fetchAll(PDO::FETCH_CLASS, "TccModelo");
            $modeloProjeto = $sthProjeto->fetchAll(PDO::FETCH_CLASS, "ProjetoModelo");
            $modeloCoAutor = $sthCoAutor->fetchAll(PDO::FETCH_CLASS, "CoautModelo");

            echo "<a href='home.php' class='mt-2 ms-2 btn btn-dark' title='Home'><i class='fas fa-home'></i></a>";

            echo "<div class='p-2 table-responsive'>
                    <table class='table table-dark table-hover'>
                        <caption>ARTIGOS</caption>
                        <tr>
                            <th scope='col' class='text-center'>ARTIGOS</th>
                        </tr>
                        <tr>
                            <th scope='col' class='text-center'>CÓDIGO DO PROJETO</th>
                            <th scope='col' class='text-center'>TÍTULO</th>
                            <th scope='col' class='text-center'>NATUREZA</th>
                            <th scope='col' class='text-center'>AUTOR PRINCIPAL</th>
                            <th scope='col' class='text-center'>EMAIL DO AUTOR PRINCIPAL</th>
                            <th scope='col' class='text-center'>DELETAR</th>
                        </tr>
                        <tr>";
                    foreach($modeloArtigo as $item){
                        echo "<tr>
                                <td class='text-center'>{$item->getCodArtigo()}</td>
                                <td class='text-center'>{$item->getTitulo()}</td>
                                <td class='text-center'>{$item->getNatureza()}</td>
                                <td class='text-center'>{$item->getAutPrinc()}</td>
                                <td class='text-center'>{$item->getEmailAutPrinc()}</td>
                                <td class='text-center'><a href='../backend/action/delete/deleteArtigo.php?codArtigo={$item->getCodArtigo()}' class='btn btn-danger'>Deletar</a></td>
                        </tr>";
                    }   
            echo "</table>
                </div>";
            echo "<div class='p-2 table-responsive'>
                    <table class='table table-dark table-hover'>
                        <tr>
                            <th scope='col' class='text-center'>CO-AUTORES</th>
                        </tr>
                        <tr>
                            <th scope='col' class='text-center'>CÓDIGO DO ARTIGO</th>
                            <th scope='col' class='text-center'>NOME DO COAUTOR</th>
                            <th scope='col' class='text-center'>EMAIL DO CO AUTOR</th>
                            <th scope='col' class='text-center'>DELETAR</th>
                        </tr>
                        <tr>";
                    foreach($modeloCoAutor as $item){                      
                        echo "<tr>
                                <td class='text-center'>{$item->getCodArtig()}</td>
                                <td class='text-center'>{$item->getNome()}</td>
                                <td class='text-center'>{$item->getEmailCoaut()}</td>
                                <td class='text-center'><a href='../backend/action/delete/deleteCoaut.php?nomeCoaut={$item->getNome()}' class='btn btn-danger'>Deletar</a></td>
                        </tr>";
                    }
            echo "</table>
                </div>";
            echo "<div class='p-2 table-responsive'>
                    <table class='table table-dark table-hover'>
                        <tr>
                            <th scope='col' class='text-center'>PROJETOS</th>
                        </tr>
                        <tr>
                            <th scope='col' class='text-center'>CÓDIGO</th>
                            <th scope='col' class='text-center'>CÓDIGO DO RESPONSÁVEL</th>
                            <th scope='col' class='text-center'>DATA DE INÍCIO</th>
                            <th scope='col' class='text-center'>DATA DE FIM</th>
                            <th scope='col' class='text-center'>SITUAÇÃO ATUAL</th>
                            <th scope='col' class='text-center'>DELETAR</th>
                        </tr>
                        <tr>";
                    foreach($modeloProjeto as $item){
                        echo "<tr>                
                            <td class='text-center'>{$item->getCodProj()}</td>
                            <td class='text-center'>{$item->getCodResp()}</td>
                            <td class='text-center'>{$item->getDataInicio()}</td>
                            <td class='text-center'>{$item->getDataFim()}</td>
                            <td class='text-center'>{$item->getSituAtual()}</td>
                            <td class='text-center'><a href='../backend/action/delete/deleteProjeto.php?codProj={$item->getCodProj()}' class='btn btn-danger'>Deletar</a></td>
                        </tr>";
                    }
            echo "</table>
                </div>";
            echo "<div class='p-2 table-responsive'>
                    <table class='table table-dark table-hover'>
                        <tr>
                            <th scope='col' class='text-center'>RESPONSÁVEIS</th>
                        </tr>
                        <tr>
                            <th scope='col' class='text-center'>NOME DO RESPONSÁVEL</th>
                            <th scope='col' class='text-center'>EMAIL DO RESPONSÁVEL</th>
                            <th scope='col' class='text-center'>DELETAR</th>
                        </tr>
                        <tr>";
                    foreach($modeloResponsavel as $item){
                        echo "<tr>               
                            <td class='text-center'>{$item->getNome()}</td>
                            <td class='text-center'>{$item->getEmail()}</td>
                            <td class='text-center'><a href='../backend/action/delete/deleteResponsavel.php?nomeResp={$item->getNome()}' class='btn btn-danger'>Deletar</a></td>
                        </tr>";
                    }
            echo "</table>
                </div>";
            echo "<div class='p-2 table-responsive'>
                    <table class='table table-dark table-hover'>
                        <tr>
                            <th scope='col' class='text-center'>TCC</th>
                        </tr>
                        <tr>
                            <th scope='col' class='text-center'>CÓDIGO DO PROJETO</th>
                            <th scope='col' class='text-center'>TÍTULO TCC</th>
                            <th scope='col' class='text-center'>AUTOR TCC</th>
                            <th scope='col' class='text-center'>SITUAÇÃO DO TCC</th>
                            <th scope='col' class='text-center'>DELETAR</th>
                        </tr>
                        <tr>";
                    foreach($modeloTcc as $item){
                        echo "<tr>
                            <td class='text-center'>{$item->getCodProj()}</td>
                            <td class='text-center'>{$item->getTituloTCC()}</td>
                            <td class='text-center'>{$item->getAutorTCC()}</td>
                            <td class='text-center'>{$item->getSituacao()}</td>
                            <td class='text-center'><a href='../backend/action/delete/deleteTcc.php?tituloTcc={$item->getTituloTCC()}' class='btn btn-danger'>Deletar</a></td>
                        </tr>";
                    }
            echo "</table>
            </div>";
        } catch(PDOException $e){
             echo ("Ocorreu um erro inesperado: {$e->getMessage()}");
            }
        ?>
</body>
</html>