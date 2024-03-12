<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1><?= $titulo; ?></h1>
        <a href="/veiculo/lista">Listar</a>
        <a href="/veiculo/digitarnovo">Novo</a>
        <hr>
    </header>

    <main>
        <h2>
            <?= $subtitulo; ?>
        </h2>
        <p>
            <?= $conteudo; ?>
        </p>
    </main>

    <footer>
        <hr>
        Rodapé
    </footer>

</body>
</html>