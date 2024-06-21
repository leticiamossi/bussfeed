<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BussFeed | Login</title>
    <link rel="stylesheet" href="public\assets\css\style.css">
</head>
<body>
    <header>
        <h2 class="logoDesc">Bussfeed</h2>
    </header>
    <section class="intro" id = "intro">
        <img class="text1" id="text1" src="public\assets\img\parallax1.png" alt="Palma Parallax">
        <img src="public\assets\img\logo.png" alt="logo" class="logo">
        <img class="text2" id="text2" src="public\assets\img\parallax2.png" alt="Mão Parallax">
    </section>
    <section class="sec">
        <h1>Seja bem vindo.</h1>
        <h1>Realize seu login!</h1>
        <div class="login">
        <form action="/login/login" method="POST">
            <div>
                <label for="email">E-mail</label>
                <input class="input" type="text" name="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input class="input" type="password" name="senha">
            </div>
            <input class="entrar" type="submit" value="Entrar">
            <p class="mini-text">ou</p>
            <p class="mini-text"><a href="/cadastro/tipo">Registre-se aqui</a></p>
        </form>
    </div>
    </section>
    <script src="public/assets/JS/script.js"></script>
</body>
</html>