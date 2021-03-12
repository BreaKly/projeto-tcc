<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto Integrado - Cadastrar Projeto</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/simpleAnimation.css">
</head>
<body class="d-flex vh-100">
    <div class='w-100 d-flex justify-content-center align-items-center flex-column'>
        <div>
            <div>
                <h1 id='cad' class='h2 fw-bolder mb-2'>CADASTRO DE PROJETO</h1>
            </div>
            <form enctype='multipart/form-data' action='../backend/action/insert/insertProjeto.php' method='post'>
                <div class='form-div form-floating mb-3'>
                    <input type='text' class='form-control' id='codProj' name='codProj' placeholder='Código do Projeto' style='outline: none;' required>
                    <label for='codProj'>Código do Projeto</label>
                </div>
                <div class='form-div form-floating mb-3'>
                    <input type='text' class='form-control' id='codResp' name='codResp' placeholder='Código do Responsável' required>
                    <label for='codResp'>Código do Responsável</label>
                </div>
                <div class='form-div form-floating mb-3'>
                    <input type='date' class='form-control' id='dataIn' name='dataIn' placeholder='Data de Início' required>
                    <label for='dataIn'>Data de Início</label>
                </div>
                <div class='form-div form-floating mb-3'>
                    <input type='date' class='form-control' id='dataFim' name='dataFim' placeholder='Data Final' required>
                    <label for='dataFim'>Data Final</label>
                </div>
                <div class='form-div mb-3'>
                    <select class="form-select mb-3" name='situacao'>
                        <option selected value='EM ANDAMENTO'>EM ANDAMENTO</option>
                        <option value="CANCELADO">CANCELADO</option>
                        <option value="FINALIZADO">FINALIZADO</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class='w-100 float-end btn btn-primary'>
                        <i class="fas fa-user-plus"></i>   CADASTRAR NOVO PROJETO
                    </button>
                    <a href='home.php' class='mt-2 btn btn-secondary w-100' title='Home'><i class='fas fa-home'></i> HOME</a>
                    <a href='listaGeral.php' class='btn btn-outline-secondary w-100 mt-2' title='Função disponível apenas para administradores'>
                        <i class="fas fa-users"></i>   LISTA DE PROJETOS
                    </a>     
                </div>   
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
</body>
</html>