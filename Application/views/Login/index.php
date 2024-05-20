<!--Tela de Login-->
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
        <nav class="navigation">
            <a href="Application\views\Home\passenger.php" class="active">Sou Estudante</a>
            <a href="Application\views\Home\driver.php">Sou Motorista</a>
            <a href="Application\views\Home\enterprise.php">Sou Proprietário</a>
        </nav>
    </header>
    <section class="parallax">
        <img class="logo" src="public\assets\img\parallax.png" alt="Logo Parallax">
        <img class="text1" src="public\assets\img\parallax1.png" alt="Palma Parallax">
        <img class="text2" src="public\assets\img\parallax2.png" alt="Mão Parallax">
        <img class="img" src="public\assets\img\titulo.png" alt = "titulo">
    </section>
    <section class="sec">
        <h1>Sou Estudante</h1>
    </section>
    <div class="login">
        <form action="" method="POST">
            <div>
                <label for="email">E-mail</label>
                <input class=input type="text" name="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input class=input type="text" name="senha">
            </div>
            <input class=entrar type="submit" value="Entrar">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>