

<?php include 'include/header.php';?>
<div class="main">
    <div class="container-center">
        <h1>Auftrags-Nr. <?php echo $reservierung->id ?></h1>
        <div class="content-form" >
            <div class="couple">
                <p class="text-label">Anzahl:</p>
                <h3 class="text-label"><?php echo $reservierung->anzahl;?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Modell:</p>
                <h3 class="text-label"><?php echo $reservierung->modell;?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Von:</p>
                <h3 class="text-label"><?php echo date('d.m.Y', strtotime($reservierung->von));?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Bis:</p>
                <h3 class="text-label"><?php echo date('d.m.Y', strtotime($reservierung->bis));?></h3>
            </div>
            <div class="couple">
                <p class="text-label">Status</p>
                <div class="label <?php  
                                    switch ($reservierung->statusId){
                                        case 1:
                                            echo 'genehmigt';
                                            break;
                                        case 2:
                                            echo 'abgelehnt';
                                            break;
                                        case 3:
                                            echo 'offen';
                                            break;
                                    }?>">
                                        <?php echo $reservierung->reservierungstatus;?>
                </div>
            </div>
            <div class="couple">
                <p class="text-label">Bemerkung:</p>
                <h3 class="text-label"><?php echo $reservierung->bemerkung;?></h3>
            </div>
                <Button class="btn-big btn-secondary"  value="Zurueck" name="zurueck" onclick="history.back()">Zurück</Button>
        </div>  
    </div>
</div>
<?php include 'include/footer.php';?>