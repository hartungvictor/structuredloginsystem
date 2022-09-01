<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Login</title>
    
</head>
<body>
    <form>
        <h1>Cadastrar</h1>
        
        <div class="erro-geral animate__animated animate__shakeX">
            Aqui vai o erro para o usuario
        </div>
        <div class = "input-group">
            <img class = "input-icon" src="img/card.png">
            <input class ="erro-input" type="text" placeholder="Nome completo">
            <div class ="erro">Por favor informe um nome válido</div>
        </div>
        <div class = "input-group">
            <img class = "input-icon" src="img/social-media.png">
            <input type="email" placeholder="Digite seu email">
        </div>
        <div class = "input-group">
            <img class = "input-icon" src ="img/password.png">
            <input type="password" placeholder="Digite sua senha até 6 digitos">
        </div>
        <div class = "input-group">
            <img class = "input-icon" src ="img/password.png">
            <input type="password" placeholder="Repita a sua senha">
        </div>
        <div class = "input-group">
            <input type="checkbox" id="termos" name="termos" value="ok">
            <label for="termos">Ao se cadastrar você concorda com nossos termos de <a class = "link" href="#">privacidade</a> e os termos de <a class = "link" href ="#">uso.</a></label>
        </div>
        
        <button class="btn-red"type="submit">Fazer Login</button>
        <a href = "index.php">Já tenho uma conta</a>
    </form>
</body>
</html>