<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McMullin</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/footer.css">
    <script src="https://kit.fontawesome.com/2436301015.js" crossorigin="anonymous"></script>



</head>
<body>
<?php
include "templates/header.php";
include "templates/menu.php";
?>

    <div class="main container">
        <div class="main__left">
            <h1>Location</h1>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10183.572766062167!2d-3.9816153!3d50.3498975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65144fc31635bfe2!2sMcMullin%20Motors%20Storage!5e0!3m2!1sen!2sru!4v1654772465629!5m2!1sen!2sru"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
        <?php
        include "templates/sidebar.php"
        ?>
    </div>

<?php
include "templates/footer.php";
?>