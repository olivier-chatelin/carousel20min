<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Carousel</title>
</head>
<body>
<?php require "data.php";?>
    <div class="window">
        <div class="band" id="band">
            <?php foreach ($slides as $index => $slide):?>
                <img src="<?=$slide?>" class="slide" alt="photo<?=$index + 1?>">
            <?php endforeach;?>
        </div>
    </div>
    <div class="button-container">
        <span class="slide-button button-left">
            <
        </span>
        <span class="slide-button button-right">
            >
        </span>
    </div>
<script src="script.js"></script>
</body>
</html>
