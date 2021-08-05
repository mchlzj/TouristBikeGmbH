<?php include 'include/header.php';?>
<div class="main">
    <h2>Reservierung erstellen</h2>
    <form method="post" action="reservierung-erstellen.php">
        <div>
            <label>Modell</label>
            <input type="text" name="modell" value="<?php echo isset($_SESSION['modell']) && !empty($_SESSION['modell']) ? $_SESSION['modell']:  NULL ;?>">
        </div>
        <div>
            <label>Anzahl</label>
            <input type="text" name="anzahl" value="<?php echo isset( $_SESSION['anzahl']) && !empty($_SESSION['anzahl']) ? $_SESSION['anzahl']:  NULL ;?>"> 
        </div>
        <input type="submit" value="Weiter" name="weiter">
</div>
<?php include 'include/footer.php';?>