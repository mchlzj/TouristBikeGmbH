<?php include 'include/header.php';?>
<div class="main">
<?php echo $title; ?>
    <?php foreach($reservierungen as $reservierung): ?>
        <h1><?php echo $reservierung ->bezeichnung;?></h1>
        <a href="reservierung.php?id=<?php echo $reservierung->id;?>">Details</a>
    <?php endforeach;?>

    <!-- Ab hier löschen -->
    <?php foreach($reservierungen as $reservierung): ?>
        <h1><?php echo $reservierung ->bezeichnung;?></h1>
        <a href="reservierung.php?id=<?php echo $reservierung->id;?>">Details</a>
    <?php endforeach;?>
    <?php foreach($reservierungen as $reservierung): ?>
        <h1><?php echo $reservierung ->bezeichnung;?></h1>
        <a href="reservierung.php?id=<?php echo $reservierung->id;?>">Details</a>
    <?php endforeach;?>
    <?php foreach($reservierungen as $reservierung): ?>
        <h1><?php echo $reservierung ->bezeichnung;?></h1>
        <a href="reservierung.php?id=<?php echo $reservierung->id;?>">Details</a>
    <?php endforeach;?>
    <?php foreach($reservierungen as $reservierung): ?>
        <h1><?php echo $reservierung ->bezeichnung;?></h1>
        <a href="reservierung.php?id=<?php echo $reservierung->id;?>">Details</a>
    <?php endforeach;?>
        <!-- bis hier löschen -->

</div>

<?php include 'include/footer.php';?>