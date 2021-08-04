<?php include 'include/header.php';?>
    <h2>Reservierung erstellen</h2>
    <form method="post" action="erstellen.php">
        <div>
            <label>von</label>
            <input type="text" name="von">
        </div>
        <div>
            <label>bis</label>
            <input type="text" name="bis">
        </div>
        <div>
            <label>FahrradID</label>
            <input type="text" name="fahrradId">
        </div>
        <div>
            <label>ReservierungsvorgangID</label>
            <input type="text" name="reservierungsvorgangId">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>

<?php include 'include/footer.php';?>