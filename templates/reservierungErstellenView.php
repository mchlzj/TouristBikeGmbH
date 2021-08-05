<?php include 'include/header.php';?>
<div class="main">
    <div class="container-center">
        <h1>Reservierung erstellen</h1>
        <p>Schritt 1 von 2</p>
        <!-- <?php date_default_timezone_set('Europe/Berlin');?> -->
        <form class="content-form" method="post" action="reservierung-erstellen.php">
            <div class="couple">
                <label class="text-label">Anzahl</label>
                <input class="input" type="text" name="anzahl" value="<?php echo isset($_SESSION['anzahl']) && !empty($_SESSION['anzahl']) ? $_SESSION['anzahl']:  NULL ;?>">
            </div>
            <div class="couple">
                <label class="text-label">Modell</label>
                <input class="input" type="text" name="modell" value="<?php echo isset( $_SESSION['modell']) && !empty($_SESSION['modell']) ? $_SESSION['modell']:  NULL ;?>"> 
            </div>
            <div class="couple">
                <label class="text-label">von</label>
                <input class="input" type="date" id="von" name="von"
                value="<?php echo isset( $_SESSION['von']) && !empty($_SESSION['von']) ? $_SESSION['von']:  date('Y-m-d');?>"
                min="2018-01-01" max="2022-12-31">
            </div>
            <div class="couple">
                <label class="text-label">bis</label>
                <input class="input" type="date" id="bis" name="bis"
                value="<?php echo isset( $_SESSION['von']) && !empty($_SESSION['von']) ? $_SESSION['von']:  date('Y-m-d');?>"
                min="2018-01-01" max="2022-12-31">
            </div>
            <div class="couple">
                <label class="text-label">Bemerkung</label>
                <textarea class="input"  id="bemerkung" name="bemerkung"
                rows="4" cols="40">
                <?php echo isset( $_SESSION['bemerkung']) && !empty($_SESSION['bemerkung']) ? $_SESSION['bemerkung']: NULL;?>
                </textarea>
            </div>
            <Button class="btn-big btn-primary" type="submit" value="Weiter" name="weiter">Weiter</Button>
    </div>  
</div>
<?php include 'include/footer.php';?>