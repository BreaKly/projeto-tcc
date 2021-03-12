<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto Integrado - Cadastrar Responsável</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/simpleAnimation.css">
</head>
<body class="d-flex vh-100">
    <div class='w-100 d-flex justify-content-center align-items-center flex-column'>
        <div class='w-50'>
            <div>
                <h1 id='cad' class='h2 fw-bolder mb-2'>CADASTRO DE RESPONSÁVEL</h1>
            </div>
            <form enctype='multipart/form-data' action='../backend/action/insert/insertResponsavel.php' method='post'>
                <div class='form-div form-floating mb-3'>
                    <input type='text' class='form-control' id='nome' name='nome' placeholder='Nome para usuário' style='outline: none;' required>
                    <label for='nome'>Nome do responsável</label>
                </div>
                <div class='form-div form-floating mb-3'>
                    <input type='email' class='form-control' id='email' name='email' placeholder='nome@exemplo.com' required>
                    <label for='email'>Endereço de e-mail do responsável</label>
                </div>
                <div>
                    <button type="submit" class='w-100 float-end btn btn-primary'>
                        <i class="fas fa-user-plus"></i>   CADASTRAR NOVO RESPONSÁVEL
                    </button>
                    <a href='home.php' class='mt-2 btn btn-secondary w-100' title='Home'><i class='fas fa-home'></i> HOME</a>
                    <a href='listaGeral.php' class='btn btn-outline-secondary w-100 mt-2' title='Função disponível apenas para administradores'>
                        <i class="fas fa-users"></i>   LISTA DOS RESPONSÁVEIS
                    </a>     
                </div>  
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
</body>
</html>