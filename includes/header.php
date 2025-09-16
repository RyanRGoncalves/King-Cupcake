<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 style="font-size: 40px">KING CAKES</h1>

        <nav style="justify-self: center">
        </nav>
        <script>
            nav = document.querySelector('nav')
            nav.innerHTML += (!window.location.href.includes("cardapio.php")) ? '<a href="cardapio.php">Cardapio</a>' : '<b>Cardapio</b>'
            nav.innerHTML += (!window.location.href.includes("carrinho.php")) ? '<a href="carrinho.php">Carrinho</a>' : '<b>Cardapio</b>'
            nav.innerHTML += (!window.location.href.includes("contato.php")) ? '<a href="contato.php">Contatos</a>' : '<b>Cardapio</b>'
        </script>
    </header>