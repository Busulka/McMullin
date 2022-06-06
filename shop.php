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

    <script type="text/javascript" src="//www.auctionnudge.com/feed/item/js/theme/grid/page/init/img_size/200/cats_output/dropdown/search_box/1/blank/1/grid_cols/2/grid_width/80%25/lang/english/SellerID/mcmullinplymouth/siteid/3/MaxEntries/6"></script>

    <h1>Shop</h1>

    <div class="main container">
        <div class="main__left">
            <div id="auction-nudge-items" class="auction-nudge"></div>
        </div>
        <?php
        include "templates/sidebar.php"
        ?>
    </div>

<?php
include "templates/footer.php";
?>