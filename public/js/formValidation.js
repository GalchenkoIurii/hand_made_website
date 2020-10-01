(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    $.ajax({
                        url: 'index.php',
                        type: 'POST',
                        data: $('#form').serialize(),
                        beforeSend: function () {
                            $('.loader').fadeIn();
                        },
                        success: function (response) {
                            $('.loader').fadeOut('slow', function () {
                                let result = JSON.parse(response);
                                if (result.answer == 'ok') {
                                    $('#form').removeClass('was-validated').trigger('reset');
                                    $('#captcha').text(result.captcha);
                                    $('#answer').html(`<div class="alert alert-success" role="alert">
                                        Ваше сообщение отправлено. Я с Вами свяжусь в ближайшее время.</div>`);
                                } else {
                                    $('#answer').html(`<div class="alert alert-danger" role="alert">
                                        ${result.errors}</div>`);
                                }
                            });
                        },
                        error: function () {
                            alert('Error');
                        }
                    });
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();