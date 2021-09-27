<?php include 'include/header.php';?>
<div class="main">
    <div class="container-center">
        <h1>Reservierung bestätigen</h1>
        <p>Schritt 2 von 2</p>
        <form class="content-form" method="post" action="reservierung-bestaetigen.php">
            <div class="couple">
                <p class="text-label">Anzahl:</p>
                <h3 class="text-label"><?php echo $_SESSION['anzahl'];?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Modell:</p>
                <h3 class="text-label"><?php echo $modell->bezeichnung;?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Von:</p>
                <h3 class="text-label"><?php echo date('d.m.Y', strtotime($_SESSION['von']));?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Bis:</p>
                <h3 class="text-label"><?php echo date('d.m.Y', strtotime($_SESSION['bis']));?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Bemerkung:</p>
                <h3 class="text-label"><?php echo $_SESSION['bemerkung'];?></h3>
            </div>
            <div class="btn-group">
                <Button class="btn-big btn-secondary"  type="submit" value="zurueck" name="zurueck">Zurück</Button>
               <Button class="btn-big btn-primary" type="submit" value="Submit" name="submit">Fertig</Button>               
            </div>
    </div>  
</div>
<?php include 'include/footer.php';?>