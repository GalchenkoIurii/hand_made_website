<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class="container">
    <p>Error has occurred!</p>
    <p><b>Error code:</b> <?= $errno; ?></p>
    <p><b>Error text:</b> <?= $errstr; ?></p>
    <p><b>Error file:</b> <?= $errfile; ?></p>
    <p><b>Error line:</b> <?= $errline; ?></p>
    <p><a href="<?= PATH; ?>">Go back to Home</a></p>
</div>
</body>
</html>