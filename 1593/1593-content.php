<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1593">

    <div class="container my-container">


            <h2 class="h2-title">Send us a message</h2>
            <p class="contact-description"> Lorem ipsum dolor sit amet, lorem ipsum dolor – consectetur adipiscing elit. Ut
                elit
                tellus,
                luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputName" placeholder="Name *" name="name" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="inputEmail" placeholder="E-mail *" name="email"
                           required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputTelephone" placeholder="Telephone" name="telephone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputCompany" placeholder="Company" name="company">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control message-field" id="inputMessage" placeholder="Message *"
                           name="message" required>
                    <div class="invalid-feedback">Please fill out this field.</div>

                </div>

                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> By using this form
                        you agree with the storage and handling of your data by this website.
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

    </div>
</div>

<script>
    // Disable form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
