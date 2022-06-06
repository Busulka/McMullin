<?php

require_once __DIR__ . '/contact/vendor/autoload.php';
require_once __DIR__ . '/contact/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>McMullin</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/contact.css">

    <script src="https://kit.fontawesome.com/2436301015.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->

    <title>Contact Us</title>

    <!-- reCAPTCHA Javascript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php
include "templates/header.php";
include "templates/menu.php";
?>
<div class="main container">
    <div class="main__left">

        <div class="contact-form">
        <h2>Contact Us</h2>

                    <?php
                    if (!empty($success)) {
                        ?>
                        <div class="alert-success">Your message was sent successfully!</div>
                        <?php
                    }
                    ?>

                    <?php
                    if (!empty($error)) {
                        ?>
                        <div class="alert-error"><?= $error ?></div>
                        <?php
                    }
                    ?>

                    <form method="post" action="contact/submit.php" class="contact">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="text-box" placeholder="Your Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="text-box" placeholder="Your Email Address" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="text-box" placeholder="Your Subject" required>
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="message" class="text-box" rows="12" placeholder="Your Message" required></textarea>
                        </div>

                        <div class="submit-group">
                            <div class="g-recaptcha" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
                            <button class="send-btn">Send</button>
                        </div>


                    </form>
                </div>
    </div>

    <?php
    include "templates/sidebar.php"
    ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
<?php
include "templates/footer.php";
?>

