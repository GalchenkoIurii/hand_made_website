<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 02.09.2020
 * Time: 12:14
 */

require_once('db.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
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
<div class="main" id="home">
    <div class="main-banner">
        <div class="container">
            <div class="mx-auto text-center">
                <h1>Nibh eleifend nulla nascetur pharetra
                    <br>commodo mi augue interdum tellus.</h1>
                <p class="banp mx-auto mt-3">Nulla pellentesque mi non laoreet eleifend. Integer porttitor
                    mollisar lorem, at molestie arcu</p>
                <a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr" href="#about" role="button">Подробнее</a>
            </div>
        </div>
    </div>

    <section class="about-wrapper" id="about">
        <h3 class="heading mb-5">Обо мне</h3>
        <img src="images/about.jpg" class="img-fluid" alt="">
        <p class="about_p mt-5"> Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis
            aliquam mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis
            accumsan lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl
            fermentum consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra
            commodo mi augue interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum
            ullamcorper lacinia natoque aenean scelerisque.</p>
    </section>

    <?php
    $query = "SELECT * FROM gallery";
    $gallery_items = $pdo->query($query)->fetchAll();
    ?>
    <div class="gallery" id="gallery">
        <div class="text-center">
            <h2 class="heading">Галерея</h2>
            <p class="main_p text-center mx-auto">Nulla pellentesque mi non laoreet eleifend. Integer
                porttitor mollisar curae suspendisse mauris posuere accumsan massa posuere lacus convallis
                tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus sit arcu
                sociis.</p>
        </div>
        <div class="row gallery-grids">
            <?php
            foreach ($gallery_items as $item) { ?>
                <div class="gallery-top mt-5">
                    <a href="#gal<?= $item['id']; ?>">
                        <img src="<?= $item['img']; ?>" alt="<?= $item['title']; ?>" class="img-fluid"></a>
                    <h4><?= $item['title']; ?></h4>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- popups -->
    <?php
    foreach ($gallery_items as $item) { ?>
        <div id="gal<?= $item['id']; ?>" class="pop-overlay animate">
            <div class="popup">
                <img src="<?= $item['img']; ?>" alt="<?= $item['title']; ?>" class="img-fluid"/>
                <p class="mt-4"><?= $item['description']; ?></p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
    <?php } ?>
    <!-- end popups -->

    <div class="services-wrap" id="services">
        <div class="container">
            <div class="text-center">
                <h3 class="heading">Что я делаю</h3>
                <p class="main_p mb-5 text-center mx-auto">Nulla pellentesque mi non laoreet eleifend.
                    Integer porttitor mollisar curae suspendisse mauris posuere accumsan massa posuere lacus
                    convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                    sit arcu sociis.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-cog p-sm-4 p-2"></span>
                    <h4 class="my-3">Lorem ipsum dolor </h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-refresh p-sm-4 p-2"></span>
                    <h4 class="my-3"> sit amet sed diam nonumy </h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-camera p-sm-4 p-2"></span>
                    <h4 class="my-3">eirmod tempor invidunt</h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-bell-o p-sm-4 p-2"></span>
                    <h4 class="my-3"> ut labore et dolore </h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa fa-smile-o p-sm-4 p-2"></span>
                    <h4 class="my-3">magna aliquyam erat</h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-plus-square-o p-sm-4 p-2"></span>
                    <h4 class="my-3">At vero eos et accusam</h4>
                </div>
            </div>
        </div>
    </div>
    <section class="contacts" id="contact">
        <h3 class="heading mb-5">Контакты</h3>
        <p class="contacts_p mb-5 text-center mx-auto">Nulla pellentesque mi non laoreet eleifend. Integer
            porttitor mollisar curae suspendisse mauris posuere accumsan massa posuere lacus convallis
            tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus sit arcu sociis.</p>
        <div class="contacts_grid mt-5 mx-auto text-center">
            <form action="#" method="post">
                <div class="row contact_top">
                    <div class="col-sm-6">
                        <input type="text" name="Name" placeholder="Name" required="">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="Email" placeholder="Email" required="">
                    </div>
                </div>
                <input type="text" name="Name" placeholder="Name" required="">
                <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '')
						{this.value = 'Message...';}" required="">Message...</textarea>
                <input type="submit" value="Send Message">
            </form>
        </div>
        <div class="copyright text-center">
            <div class="follow">
                <ul class="social_section">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                </ul>
            </div>
            <p>© 2020 Shamarina Iryna. All rights reserved | Design by
                <a href="https://smarttsoft.com">STS</a>
            </p>
        </div>
    </section>
</div>
</body>
</html>