<?php include_once 'config/init.php'; ?>

<?php
$reservierung = new Reservierung;

if(isset($_POST['submit'])){
    $data = array();
    $data['von'] =$_POST['von'];
    $data['bis'] =$_POST['bis'];
    $data['fahrradId'] =$_POST['fahrradId'];
    $data['reservierungsvorgangId'] =$_POST['reservierungsvorgangId'];

    if($reservierung->create($data)){
        redirect('index.php', 'Reservierung erfoglreich!', 'success');
    } else {
        redirect('index.php', 'Ups, da ist was schif gelaufen', 'error');
    }
}

$template = new Template('templates/reservierung-erstellen.php');


echo $template;