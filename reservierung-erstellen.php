<?php include_once 'config/init.php'; ?>

<?php
$reservierungService = new ReservierungService;

if(isset($_POST['weiter'])){

    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
        $_SESSION['modell'] = $_POST['modell'];
        $_SESSION['anzahl'] = $_POST['anzahl'];
        $_SESSION['von'] = $_POST['von'];
        $_SESSION['bis'] = $_POST['bis'];
        $_SESSION['bemerkung'] = $_POST['bemerkung'];

        redirect('reservierung-bestaetigen.php', 'Reservierung erfoglreich!', 'success');
    }

    


$template = new Template('templates/reservierungErstellenView.php');


echo $template;
?>
