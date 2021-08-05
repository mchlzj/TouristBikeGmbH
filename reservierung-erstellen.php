<?php include_once 'config/init.php'; ?>

<?php
$reservierungService = new ReservierungService;

// print_r($_SESSION);

if(isset($_POST['submit'])){
    $data = array();
    $data['modell'] =$_POST['modell'];
    $data['anzahl'] =$_POST['anzahl'];

    $reservierungService->createReservierung($data);
    // $reservierungService->persistReservierungen();
    $reservierungService->persistReservierungen();
    // if($reservierungService->persistReservierungen()){
    //     redirect('index.php', 'Reservierung erfoglreich!', 'success');
    // } else {
    //     redirect('index.php', 'Ups, da ist was schif gelaufen', 'error');
    // }
// }
}

if(isset($_POST['weiter'])){
    // $modelle = count($_POST['modell']);
    // $anzahlen = count($_POST['anzahl']);

    // $reservierungen = [];
    if(isset($_SESSION['modell']) && isset($_SESSION['anzahl'])) {
        $_SESSION['modell'] = $_POST['modell'];
        $_SESSION['anzahl'] = $_POST['anzahl'];
    } else {
        session_destroy();
        session_start();
        $_SESSION['modell'] = $_POST['modell'];
        $_SESSION['anzahl'] = $_POST['anzahl'];
    }   
    // $reservierung = new Reservierung($_POST['modell'], $_POST['anzahl']);
    // $_SESSION['reservierung1'] = serialize($reservierung);
	    // for ($i=0; $i < $modelle; $i++) { 
        //     $reservierung = new Reservierung($_POST["modell"][$i], $_POST["anzahl"][$i]);
        //     $_SESSION['reservierung'.$i] =$reservierung;
        //     // $_SESSION['modell'.$i] =$_POST['modell'];
        // }
    

        // redirect('index.php', 'Reservierung erfoglreich!', 'success');

    // } else {
    //     redirect('index.php', 'Ups, da ist was schif gelaufen', 'error');
    }

$template = new Template('templates/reservierungErstellenView.php');


echo $template;
?>
