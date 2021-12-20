<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/navbar.css" type="text/css">
    <link href="../assets/img/favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="../assets/css/voltar.css" rel="stylesheet">
    <link href="../assets/css/admin/login.css" rel="stylesheet">
    <title>CADS - Acesso</title>
</head>
<body>
    <a class="voltar" onclick="window.open('../', '_self')">Voltar</a>
    <div class="formulario">
        <form action="../componentes/acesso.php" method="post">
            <label for="usuario">Usúario</label>
            <input type="text" name="usuario"></input>
            <label for="senha">Senha</label>
            <input type="password" name="senha"></input>
        </form>
    </div>
</body>
</html>