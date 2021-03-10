<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrado</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
            $artigoModel = new artigoModelo();
            $coautModel = new coautModelo();
            $projetoModel = new projetoModelo();
            $responsavelModel = new tccModelo();
            $tccModel = new responsavelModelo();
            
            $sth = $pdo->prepare("SELECT * FROM projeto;");
            $sth->execute();
            $modeloArtigo = $sth->fetchAll(PDO::FETCH_CLASS, "artigoModelo");
            $modeloCoaut = $sth->fetchAll(PDO::FETCH_CLASS, "coautModelo");
            $modeloProjeto = $sth->fetchAll(PDO::FETCH_CLASS, "projetoModelo");
            $modeloResponsavel = $sth->fetchAll(PDO::FETCH_CLASS, "responsavelModelo");
            $modeloTcc = $sth->fetchAll(PDO::FETCH_CLASS, "tccModelo");
            
                echo "<div class='p-2 table-responsive'>
                        <table class='table table-dark table-hover'>
                                <tr>
                                    <th scope='col' class='text-center'>CÓDIGO DO PROJETO</th>
                                    <th scope='col' class='text-center'>TÍTULO</th>
                                    <th scope='col' class='text-center'>NATUREZA</th>
                                    <th scope='col' class='text-center'>AUTOR PRINCIPAL</th>
                                    <th scope='col' class='text-center'>EMAIL DO AUTOR PRINCIPAL</th>
                                </tr>";
                echo "<tr>";
            foreach($modeloArtigo as $item){
                echo "<tr>";
                echo "<td class='text-center'>{$item->getCodProj()}</td>";
                echo "<td class='text-center'>{$item->getTitulo()}</td>";
                echo "<td class='text-center'>{$item->getNatureza()}</td>";
                echo "<td class='text-center'>{$item->getAutPrinc()}</td>";
                echo "<td class='text-center'>{$item->getEmailAutPrinc()}</td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodProj()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodTitulo()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodNatureza()}' class='btn btn-danger'>Apagar</a></td>";                    echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodAutPrinc()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getEmailAutPrinc()}' class='btn btn-danger'>Apagar</a></td>";
                echo "</tr>";
                            }
                echo "<div class='p-2 table-responsive'>
                        
                        <table class='table table-dark table-hover'>
                                <tr>
                                    <th scope='col' class='text-center'>CÓDIGO DO ARTIGO</th>
                                    <th scope='col' class='text-center'>NOME DO COAUTOR</th>
                                    <th scope='col' class='text-center'>EMAIL DO CO AUTOR</th>
                                </tr>";
                                echo "<tr>";
            foreach($modeloCoaut as $item){                      
                echo "<tr>";
                echo "<td class='text-center'>{$item->getCodArtigo()}</td>";
                echo "<td class='text-center'>{$item->getNome()}</td>";
                echo "<td class='text-center'>{$item->getEmailCoautor()}</td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodArtigo()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getNome()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getEmailCoautor()}' class='btn btn-danger'>Apagar</a></td>";
                echo "</tr>";
                }
        
                echo "<div class='p-2 table-responsive'>
                            <table class='table table-dark table-hover'>
                                    <tr>
                                        <th scope='col' class='text-center'>CÓDIGO</th>
                                        <th scope='col' class='text-center'>CÓDIGO DO RESPONSÁVEL</th>
                                        <th scope='col' class='text-center'>DATA DE INÍCIO</th>
                                        <th scope='col' class='text-center'>DATA DE FIM</th>
                                        <th scope='col' class='text-center'>SITUAÇÃO ATUAL</th>
                                    </tr>";
                echo "<tr>";
            foreach($modeloProjeto as $item){
                echo "<tr>";                
                echo "<td class='text-center'>{$item->getCodigo()}</td>";
                echo "<td class='text-center'>{$item->getCodResp()}</td>";
                echo "<td class='text-center'>{$item->getDataInicio()}</td>";
                echo "<td class='text-center'>{$item->getDataFim()}</td>";
                echo "<td class='text-center'>{$item->getSituAtual()}</td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodigo()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodResp()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getDataInicio()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getDataFim()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getSituAtual()}' class='btn btn-danger'>Apagar</a></td>";
                echo "</tr>";
                }
                
                echo "<div class='p-2 table-responsive'>
                            <table class='table table-dark table-hover'>
                                    <tr>
                                        <th scope='col' class='text-center'>NOME DO RESPONSÁVEL</th>
                                        <th scope='col' class='text-center'>EMAIL DO RESPONSÁVEL</th>
                                    </tr>";
                echo "<tr>";
            foreach($modeloResponsavel as $item){
                echo "<tr>";                
                echo "<td class='text-center'>{$item->getNome()}</td>";
                echo "<td class='text-center'>{$item->getEmail()}</td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getNome()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getEmail()}' class='btn btn-danger'>Apagar</a></td>";
                echo "</tr>";
                }
                echo "<div class='p-2 table-responsive'>
                            <table class='table table-dark table-hover'>
                                    <tr>
                                        <th scope='col' class='text-center'>CÓDIGO DO PROJETO</th>
                                        <th scope='col' class='text-center'>TÍTULO TCC</th>
                                        <th scope='col' class='text-center'>AUTOR TCC</th>
                                        <th scope='col' class='text-center'>SITUAÇÃO DO TCC</th>
                        </tr>";
                        echo "<tr>";
                
            foreach($modeloTcc as $item){
                echo "<tr>";
                echo "<td class='text-center'>{$item->getCodProj()}</td>";
                echo "<td class='text-center'>{$item->getTituloTcc()}</td>";
                echo "<td class='text-center'>{$item->getAutorTcc()}</td>";
                echo "<td class='text-center'>{$item->getSituacao()}</td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodProj()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getTituloTcc()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getAutorTcc()}' class='btn btn-danger'>Apagar</a></td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getSituacao()}' class='btn btn-danger'>Apagar</a></td>";
                echo "</tr>";
            }
            echo "</table>
            <a href='registrar.php'; class= 'mt-5 btn btn-primary'>HOME</a>
            </div>";
        } catch(PDOException $e){
             echo ("Ocorreu um erro inesperado: {$e->getMessage()}");
            }
        ?>
</body>
</html>