<?php include_once 'config/init.php'; ?>

<?php
$reservierungService = new ReservierungService;

// print_r($_SESSION);

if(isset($_POST['submit'])){
    $data = array();
    $data['modell'] =$_SESSION['modell'];
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


$template = new Template('templates/reservierungBestaetigenView.php');


echo $template;
?>
