<?php include_once 'config/init.php'; ?>

<?php
$reservierung = new Reservierung;

$template = new Template('templates/frontpage.php');

$template->title = 'Latest Jobs';
$template->reservierungen = $reservierung->getAllReservierung();

echo $template;