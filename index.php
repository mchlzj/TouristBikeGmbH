<?php include_once 'config/init.php'; ?>

<?php
$reservierungService = new ReservierungService;

$template = new Template('templates/indexView.php');

$template->title = 'Latest Jobs';
$template->reservierungen = $reservierungService->getAllReservierungen();

echo $template;