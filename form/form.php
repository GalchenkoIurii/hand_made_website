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
<form action="#" method="post">
    <div class="row contact_top">
        <div class="col-sm-6">
            <input type="text" name="name" id="name" placeholder="Имя" required>
        </div>
        <div class="col-sm-6">
            <input type="email" name="email" id="email" placeholder="Email" required>
        </div>
    </div>
    <input type="text" name="phone" id="phone" placeholder="Номер телефона">
    <textarea name="message" id="message" placeholder="Сообщение..." required></textarea>
    <input type="submit" value="Отправить">
</form>