<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL']; ?>public/css/main.css">
    <title>HOME</title>
</head>

<body>
    <H1>VIEW HOME</H1>
    <!-- variavel passada pelo controller -->
    <p><?= $title ?></p>
    <p><?= $id ?></p>
    <p><?= var_dump($data) ?></p>

    <p>Exemplos para retornar em consultas</p>
    <p><?= $data['name'] ?></p>
    <p><?= $data['last_name'] ?></p>

</body>

</html>