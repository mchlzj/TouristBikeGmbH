<?php include_once 'config/init.php'; ?>

<?php
$reservierungService = new ReservierungService;
$template = new Template('templates/reservierungErstellenView.php');
$template->modelle = $reservierungService -> getAllModelle();
$template->fehlermeldung = '';

function validateAnzahl() {
    if(is_numeric($_POST['anzahl']) && $_POST['anzahl'] < 50) {
        return true;
    } else {
        return false;
    }
}
function validateVon() {
    if($_POST['von'] > date('Y-m-d', strtotime("+1 day"))) {
        return true;
    } else {
        return false;
    }
}
function validateBis() {
    if($_POST['bis'] > $_POST['von']) {
        return true;
    } else {
        return false;
    }
}
function validateModelle() {
    if($_POST['modellId'] < 4) {
        return true;
    }
}
function validateBemerkung() {
    if(strlen($_POST['bemerkung'] < 500)) {
        return true;
    } else {
        return false;
    }
}

function validateAll() {
    if(validateVon() &&
        validateBis() &&
        validateAnzahl() &&
        validateModelle() &&
        validateBemerkung()
        ) 
        {
        return true;
    } else {      
        return false;
    }
}

if(isset($_POST['weiter'])){

    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
        $_SESSION['anzahl'] = $_POST['anzahl'];
        $_SESSION['von'] = $_POST['von'];
        $_SESSION['bis'] = $_POST['bis'];
        $_SESSION['bemerkung'] = $_POST['bemerkung'];
        $_SESSION['modellId'] = $_POST['modellId'];
        // $_SESSION['modell'] = $reservierungService->getModellById($POST['modellId']);

    if(validateAll()) {
            // redirect('reservierung-bestaetigen.php', 'Reservierung erfoglreich!', 'success');
            header("Location: reservierung-bestaetigen.php");
        } else {
            header("Location: reservierung-erstellen.php");
            $template->fehlermeldung = 'Bitte beachten Sie die Warnhinweise unter den Eingabefeldern';            
        }
    }

    


echo $template;
?>
