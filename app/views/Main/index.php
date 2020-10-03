<?php
require_once ROOT . '/form/data.php';
require_once ROOT . '/form/functions.php';

if (!empty($_POST)) {
    $fields = load($fields);

    if ($errors = validate($fields)) {
        $res = ['answer' => 'error', 'errors' => $errors];
    } else {
        if (!send_mail($fields, $mail_settings)) {
            $res = ['answer' => 'error', 'errors' => 'Ошибка отправки сообщения'];
        } else {
            $res = ['answer' => 'ok', 'captcha' => set_captcha()];
        }
    }
    exit(json_encode($res));
}
?>
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
                        <img src="images/<?= $item['img']; ?>" alt="<?= $item['title']; ?>" class="img-fluid"></a>
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
                    <span class="fa fa-gifts p-sm-4 p-2"></span>
                    <h4 class="my-3">Lorem ipsum dolor </h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-heart p-sm-4 p-2"></span>
                    <h4 class="my-3"> sit amet sed diam nonumy </h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-home p-sm-4 p-2"></span>
                    <h4 class="my-3">eirmod tempor invidunt</h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-tree p-sm-4 p-2"></span>
                    <h4 class="my-3"> ut labore et dolore </h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa fa-candy-cane p-sm-4 p-2"></span>
                    <h4 class="my-3">magna aliquyam erat</h4>
                </div>
                <div class="col-lg-4 col-md-6 services-grid py-sm-5 py-4">
                    <span class="fa fa-hand-sparkles p-sm-4 p-2"></span>
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
            <?php
            require_once ROOT . '/form/form.php';
            ?>
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