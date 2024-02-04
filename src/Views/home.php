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
    <?php $resp = $data[1] ?>
    <p><?= var_dump($resp) ?></p>
    <p>Exemplos para retornar em consultas</p>

</body>

</html>