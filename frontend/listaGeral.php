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
            $coautModel = new coautModelo();
            $projetoModel = new projetoModelo();
            $responsavelModel = new tccModelo();
            $tccModel = new responsavelModelo();
            
            $sth = $pdo->prepare("SELECT * FROM artigo;");
            $sth->execute();
            $modeloArtigo = $sth->fetchAll(PDO::FETCH_CLASS, "ArtigoModelo");
            $modeloCoaut = $sth->fetchAll(PDO::FETCH_CLASS, "coautModelo");
            $modeloProjeto = $sth->fetchAll(PDO::FETCH_CLASS, "projetoModelo");
            $modeloResponsavel = $sth->fetchAll(PDO::FETCH_CLASS, "responsavelModelo");
            $modeloTcc = $sth->fetchAll(PDO::FETCH_CLASS, "tccModelo");

            echo "<a href='home.php' class='mt-2 ms-2 btn btn-dark' title='Home'><i class='fas fa-home'></i></a>";
            echo "<div class='dropdown'>
                <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1'>
                    Artigos
                </button>
            <ul class='dropdown-menu'>
              <div class='p-2 table-responsive'>
                    <table class='table table-dark table-hover'>
                            <tr>
                                <th scope='col' class='text-center'>CÓDIGO DO PROJETO</th>
                                <th scope='col' class='text-center'>TÍTULO</th>
                                <th scope='col' class='text-center'>NATUREZA</th>
                                <th scope='col' class='text-center'>AUTOR PRINCIPAL</th>
                                <th scope='col' class='text-center'>EMAIL DO AUTOR PRINCIPAL</th>
                                <th scope='col' class='text-center'>DELETAR</th>
                            </tr>";
            echo '<li class="dropdown-item">';
            foreach($modeloArtigo as $item){
                echo "<tr>";
                    echo "<td class='text-center'>{$item->getCodArtigo()}</td>";
                    echo "<td class='text-center'>{$item->getTitulo()}</td>";
                    echo "<td class='text-center'>{$item->getNatureza()}</td>";
                    echo "<td class='text-center'>{$item->getAutPrinc()}</td>";
                    echo "<td class='text-center'>{$item->getEmailAutPrinc()}</td>";
                    echo "<td class='text-center'><a href='../backend/action/deletar.php?codArtigo={$item->getCodArtigo()}' class='btn btn-danger'>Apagar</a></td>";
                echo "</tr>";
            }
            echo '</li>
            </div>
            </ul>
            </div>';
            
            echo "</table>
                    </div>";
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
                echo "<td class='text-center'>{$item->getCodArtig()}</td>";
                echo "<td class='text-center'>{$item->getNome()}</td>";
                echo "<td class='text-center'>{$item->getEmailCoaut()}</td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?codArtig={$item->getCodArtig()}' class='btn btn-danger'>Apagar</a></td>";
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
                
            foreach($modeloProjeto as $item){
                echo "<tr>";                
                echo "<td class='text-center'>{$item->getCodProj()}</td>";
                echo "<td class='text-center'>{$item->getCodResp()}</td>";
                echo "<td class='text-center'>{$item->getDataInicio()}</td>";
                echo "<td class='text-center'>{$item->getDataFim()}</td>";
                echo "<td class='text-center'>{$item->getSituAtual()}</td>";
                echo "<td class='text-center'><a href='../backend/action/deletar.php?userNome={$item->getCodProj()}' class='btn btn-danger'>Apagar</a></td>";
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
                    echo "<td class='text-center'>{$item->getTituloTCC()}</td>";
                    echo "<td class='text-center'>{$item->getAutorTCC()}</td>";
                    echo "<td class='text-center'>{$item->getSituacao()}</td>";
                    echo "<td class='text-center'><a href='../backend/action/deletar.php?codProj={$item->getCodProj()}' class='btn btn-danger'>Apagar</a></td>";
                echo "</tr>";
            }
            echo "</table>
            </div>";
        } catch(PDOException $e){
             echo ("Ocorreu um erro inesperado: {$e->getMessage()}");
            }
        ?>
</body>
</html>