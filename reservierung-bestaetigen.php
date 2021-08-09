<?php include_once 'config/init.php'; ?>

<?php

$template = new Template('templates/reservierungBestaetigenView.php');
$reservierungService = new ReservierungService;
$template->modell = $reservierungService -> getModellById($_SESSION['modellId']);
// print_r($_SESSION);

if(isset($_POST['submit'])){
    $data = array();
    $data['modellId'] =$_SESSION['modellId'];
    $data['anzahl'] =$_SESSION['anzahl'];
    $data['von'] =$_SESSION['von'];
    $data['bis'] =$_SESSION['bis'];
    $data['bemerkung'] =$_SESSION['bemerkung'];


    $reservierungService->createReservierung($data);
    if($reservierungService->persistReservierungen()){
        $_SESSION = array();
        redirect('index.php', 'Reservierung erfoglreich!', 'success');
    } else {
        redirect('index.php', 'Ups, da ist was schif gelaufen', 'error');
    }
// }
}




echo $template;
?>
