<?php $this->layout("master"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>CONTATO</h1>

    <form action="/contact" method="post">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="email" placeholder="E-mail">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>