<?php include_once 'config/init.php'; ?>

<?php
$reservierung = new Reservierung;

$template = new Template('templates/reservierung-einzeln.php');

$reservierungId = isset($_GET['id']) ? $_GET['id'] : null;

$template->reservierung = $reservierung -> getReservierungById($reservierungId);

echo $template;