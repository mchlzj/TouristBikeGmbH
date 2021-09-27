<?php include 'include/header.php';?>
<div class="main">
    <div class="container-center">
        <h1>Neue Reservierung</h1>
        <p>Schritt 1 von 2</p>
        <form id="reservierung-erstellen-formular" class="content-form" method="post" action="reservierung-erstellen.php">
            <div class="couple">
                <label class="text-label">Anzahl</label>
                <select id="anzahl" class="input" name="anzahl">
                <?php for($i = 1; $i<=50; $i++): ?>
                        <option class="input" value='<?php echo $i;?>' 
                            <?php echo isset($_SESSION['anzahl']) && !empty($_SESSION['anzahl']) && $_SESSION['anzahl'] == $i ? 'selected' : NULL ; ?>>
                            <?php echo $i;?>
                        </option>
                <?php endfor;?>
                </select>
                <p id="error-anzahl" class="error-message"></p>
            </div>
            <div class="couple">
                <label class="text-label">Modell</label>
                <select class="input" name="modellId" id="modellId">
                <?php foreach($modelle as $modell): ?>
                        <option class="input" value='<?php echo $modell->id;?>' 
                            <?php echo isset($_SESSION['modellId']) && !empty($_SESSION['modellId']) && $_SESSION['modellId'] == $modell->id ? 'selected' : NULL ; ?>>
                            <?php echo $modell->bezeichnung;?>
                        </option>
                <?php endforeach;?>
                </select>
                <p id="error-modellId" class="error-message"></p>
            </div>
            <div class="couple">
                <label class="text-label">von</label>
                <input id="von" class="input" type="date"  name="von"
                value="<?php echo isset( $_SESSION['von']) && !empty($_SESSION['von']) ? $_SESSION['von']:  date('Y-m-d', strtotime("+2 day"));?>"
                min="2018-01-01" max="2022-12-31">
            </div>
            <p id="error-von" class="error-message"></p>
            <div class="couple">
                <label class="text-label">bis</label>
                <input class="input" type="date" id="bis" name="bis"
                value="<?php echo isset( $_SESSION['bis']) && !empty($_SESSION['bis']) ? $_SESSION['bis']:  date('Y-m-d', strtotime("+3 day"));?>"
                min="2018-01-01" max="2022-12-31">
            </div>
            <p id="error-bis" class="error-message"></p>
            <div class="couple">
                <label class="text-label">Bemerkung</label>
                <textarea class="input"  id="bemerkung" name="bemerkung">
                <?php echo isset( $_SESSION['bemerkung']) && !empty($_SESSION['bemerkung']) ? $_SESSION['bemerkung']: NULL;?>
                </textarea>
            </div>
            <p id="error-bemerkung" class="error-message"></p>
            <div class="btn-group">
                <Button class="btn-big btn-primary" id="weiter" type="submit" value="Weiter" name="weiter">Weiter</Button>
            </div>
            <p class="error-message"><?php echo $fehlermeldung; ?></p> 
    </div>  
</div>
<?php include 'include/footer.php';?>