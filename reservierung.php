<?php include_once 'config/init.php'; ?>

<?php
$reservierung = new ReservierungService;

$template = new Template('templates/reservierung-einzeln.php');

$reservierungId = isset($_GET['id']) ? $_GET['id'] : null;

$template->reservierung = $reservierung -> getReservierungById($reservierungId);

echo $template;