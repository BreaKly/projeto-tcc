<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto Integrado - HOME</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/simpleAnimation.css">
</head>
<body>
    <div class="d-flex vh-100">
        <div id='title-box' class='w-50 d-flex justify-content-center align-items-center'>
            <div id='title-text' class='justify-content-center align-items-center flex-column overflow-hidden' style=''>
                <h1 id='cad' class='h1 fw-bolder m-0' style='width:220px; animation:cad 2.4s ease;'>CADASTRO DE TCC</h1>
                <p id='atual'>cadastre-o, atualize-o.</p>
            </div>
        </div>
        <div class='w-50 d-flex justify-content-center align-items-center flex-column'>
            <a class='btn btn-primary w-50 m-1' href='addArtigo.php'>TCC</a>
            <a class='btn btn-primary w-50 m-1' href='addArtigo.php'>Responsáveis</a>
            <a class='btn btn-primary w-50 m-1' href='addArtigo.php'>Artigos</a>
            <a class='btn btn-primary w-50 m-1' href='addArtigo.php'>Projetos</a>
            <a class='btn btn-primary w-50 m-1' href='addArtigo.php'>Co-Autor</a>
            

            
        </div>
        <!-- <div class='w-50 d-flex justify-content-center align-items-center'>
            <form enctype='multipart/form-data' action='../backend/action/inserir.php' method='post' class='w-75'>
                <div class='form-div form-floating mb-3'>
                    <input type='text' class='form-control' id='userNome' name='nome' placeholder='Nome para usuário' style='outline: none;' required>
                    <label for='userNome'>Nome de usuário</label>
                </div>
                <div class='form-div form-floating mb-3'>
                    <input type='email' class='form-control' id='userEmail' name='email' placeholder='nome@exemplo.com' required>
                    <label for='userEmail'>Endereço de e-mail</label>
                </div>
                <div class='form-div form-floating mb-3'>
                    <input type='password' class='form-control' id='userSenha' name='senha' placeholder='senha' required>
                    <label for='userSenha'>Senha</label>
                </div>
                <div>
                    <button type="submit" class='w-100 float-end btn btn-primary'>
                        <i class="fas fa-user-plus"></i>   CADASTRAR
                    </button>
                    <a href='userLista.php' class='btn btn-outline-secondary w-100 mt-2' title='Função disponível apenas para administradores'>
                        <i class="fas fa-users"></i>   LISTA DE USUÁRIOS
                    </a>     
                </div>   
            </form>
        </div> -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
</body>
</html>