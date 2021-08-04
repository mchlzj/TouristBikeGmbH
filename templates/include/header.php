<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buchungssystem</title>
    <link rel="stylesheet" href="css/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="appbar flex-nav">
            <img src="media/LogoEBike.JPG" class="logo"/>
            <div class="nav">
                <a href="erstellen.php"><Button class="btn-big btn-primary">Neue Reservierung</Button></a>
                <a href="index.php"><Button class="btn-big btn-secondary">Meine Reservierungen</Button></a>
            </div>
        </div>
    </div>

    <?php displayMessage(); ?>