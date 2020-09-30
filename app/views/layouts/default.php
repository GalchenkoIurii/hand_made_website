<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <?=$this->getMeta();?>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6ca0a9715d.js" crossorigin="anonymous"></script>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/media.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<div class="sidenav">
    <div class="row side_top">
        <div class="col-4 side_top_left">
            <img src="images/photo.jpg" alt="news image" class="img-fluid navimg">
        </div>
        <div class="col-8 side_top_right">
            <h6>Ирина Шамарина</h6>
            <p>Дизайнер</p>
        </div>
    </div>
    <header>
        <div class="container-fluid px-md-5 ">
            <nav class="mnu mx-auto">
                <label for="drop" class="toggle">Меню</label>
                <input type="checkbox" id="drop">
                <ul class="menu">
                    <li class="active"><a href="#home" class="scroll">Главная</a></li>
                    <li class="mt-sm-3"><a href="#about" class="scroll">Обо мне</a></li>
                    <li class="mt-sm-3"><a href="#gallery" class="scroll">Галерея</a></li>
                    <li class="mt-sm-3"><a href="#services" class="scroll">Что я делаю</a></li>
                    <li class="mt-sm-3"><a href="#contact" class="scroll">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>
<?=$content;?>
</body>
</html>