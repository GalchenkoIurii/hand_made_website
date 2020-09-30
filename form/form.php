<form id="form" action="" method="post" class="needs-validation" novalidate>
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