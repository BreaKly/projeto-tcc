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
            <div id='title-text' class='justify-content-center align-items-center flex-column overflow-hidden'>
                <h1 id='cad' class='h1 fw-bolder m-0' style='width:220px; animation:cad 1.4s ease;'>CADASTRO DE TCC</h1>
                <p id='atual'>cadastre-o, atualize-o.</p>
            </div>
        </div>
        <div class='w-50 d-flex justify-content-center align-items-center flex-column'>
            <a class='btn btn-primary w-50 m-1' href='addTcc.php'>TCC</a>
            <a class='btn btn-primary w-50 m-1' href='addResponsavel.php'>Responsáveis</a>
            <a class='btn btn-primary w-50 m-1' href='addArtigo.php'>Artigos</a>
            <a class='btn btn-primary w-50 m-1' href='addProjeto.php'>Projetos</a>
            <a class='btn btn-primary w-50 m-1' href='addCoaut.php'>Co-Autor</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
</body>
</html>