<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
    <div class="container mt-5 w-50 bg-dark text-white p-5">
        <?php
            require_once "../objetos/obj_login.php";
        ?>

        <form method="post">
            <div class="form-group">
                <label for="email-usuario">E-mail</label>
                <input type="email" name="email-usuario" class="form-control" id="email-usuario">
            </div>
            <div class="form-group">
                <label for="senha-usuario">Senha</label>
                <input type="password" name="senha-usuario" class="form-control" id="senha-usuario">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>

        <div class="text-center mt-4">
            <p>
                Não possui cadastro ainda?<br>
                <a href="./cadastrar-usuario.php">clique aqui</a>
            </p>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>
</html>