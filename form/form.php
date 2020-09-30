<?php
    require_once __DIR__ . '/data.php';
    require_once __DIR__ . '/functions.php';

    if (!empty($_POST)) {
        print_r($_POST);
        $fields = load($fields);
        //echo '<pre>';print_r($fields);echo '</pre>';

        if ($errors = validate($fields)) {
            echo '<pre>';print_r($errors);echo '</pre>';
        } else {
            echo 'OK';
        }
    }
?>
<form action="#" method="post" class="needs-validation" novalidate>
    <div class="row contact_top">
        <div class="col-sm-6">
            <input type="text" name="name" id="name" placeholder="Имя" required>
            <div class="invalid-feedback">Введите имя</div>
        </div>
        <div class="col-sm-6">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <div class="invalid-feedback">Введите Email</div>
        </div>
    </div>
    <input type="text" name="phone" id="phone" placeholder="Номер телефона">
    <textarea name="message" id="message" placeholder="Сообщение..." required></textarea>
    <div class="invalid-feedback">Введите сообщение</div>
    <label for="captcha">Заполните капчу</label>
    <input type="text" name="captcha" id="captcha" placeholder="<?=set_captcha();?>">
    <div class="invalid-feedback">Введите капчу</div>
    <input type="submit" value="Отправить">
    <div class="mt-3" id="answer"></div>
</form>
<script src="js/formValidation.js"></script>