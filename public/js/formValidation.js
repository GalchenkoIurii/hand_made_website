(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    $.ajax({
                        url: 'index.php',
                        type: 'POST',
                        data: $('#form').serialize(),
                        beforeSend: function() {
                            $('.loader').fadeIn();
                        },
                        success: function(response) {
                            $('.loader').fadeOut('slow', function() {
                                console.log(response);
                                let result = JSON.parse(response);
                                console.log(result);
                            });
                        },
                        error: function() {
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