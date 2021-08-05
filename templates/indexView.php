<?php include 'include/header.php';?>
<div class="main">


    <div class="container-center">
        <h1>Meine Reservierungen</h1>
        <table class="content-table">

            <thead>
                <tr>
                    <th>Erstellt am</th>
                    <th>Status</th>
                    <th>Auftrags-Nr.</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($reservierungen as $reservierung): ?>
                    <tr>
                        <td>
                            <?php 
                            echo date('d.m.Y', strtotime($reservierung ->erstelldatum));
                            ?>
                        </td>
                        <td>
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
                                    <?php echo $reservierung->bezeichnung;?>
                                </div>
                        </td>
                        <td>
                            <a href="reservierung.php?id=<?php echo $reservierung->id;?>">
                                <Button class="btn-big btn-primary">
                                    <?php echo $reservierung->id;?>
                                </Button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>










<!-- <?php echo $title; ?>
    <?php 
    echo isset($_SESSION['modell']) && !empty($_SESSION['modell']) ? $_SESSION['modell']:  NULL ;
    echo isset($_SESSION['anzahl']) && !empty($_SESSION['anzahl']) ? $_SESSION['anzahl']:  NULL ;
    ?>
    <?php foreach($reservierungen as $reservierung): ?>
        <h1><?php echo $reservierung ->modell;?></h1>
        <a href="reservierung.php?id=<?php echo $reservierung->id;?>">Details</a>
    <?php endforeach;?> -->

    <!-- Ab hier löschen -->
    <!-- <?php foreach($reservierungen as $reservierung): ?>
        <h1><?php echo $reservierung ->anzahl;?></h1>
        <a href="reservierung.php?id=<?php echo $reservierung->id;?>">Details</a>
    <?php endforeach;?> -->
        <!-- bis hier löschen -->

</div>

<?php include 'include/footer.php';?>