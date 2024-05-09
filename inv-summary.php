<?php
include 'db.php';

$sqleBook = "SELECT COUNT(*) AS total_count FROM ebooks";
$resulteBook = $con->query($sqleBook);
$roweBook = $resulteBook->fetch_assoc();
$totaleBooks = $roweBook['total_count'];

$sqlBook = "SELECT COUNT(*) AS total_count FROM book";
$resultBook = $con->query($sqlBook);
$rowBook = $resultBook->fetch_assoc();
$totalBooks = $rowBook['total_count'];

$sqlClips = "SELECT COUNT(*) AS total_count FROM clippings";
$resultClips = $con->query($sqlClips);
$rowClips = $resultClips->fetch_assoc();
$totalClips = $rowClips['total_count'];

$sqleMJourn = "SELECT COUNT(*) AS total_count FROM ejournal_emagazine";
$resulteMJourn = $con->query($sqleMJourn);
$roweMJourn = $resulteMJourn->fetch_assoc();
$totaleMJourn = $roweMJourn['total_count'];

$sqlFiction = "SELECT COUNT(*) AS total_count FROM fiction";
$resultFiction = $con->query($sqlFiction);
$rowFiction = $resultFiction->fetch_assoc();
$totalFiction = $rowFiction['total_count'];

$sqlWorkbook = "SELECT COUNT(*) AS total_count FROM workbook";
$resultWorkbook = $con->query($sqlWorkbook);
$rowWorkbook = $resultWorkbook->fetch_assoc();
$totalWorkbook = $rowWorkbook['total_count'];

$sqlThesis = "SELECT COUNT(*) AS total_count FROM thesis";
$resultThesis = $con->query($sqlThesis);
$rowThesis = $resultThesis->fetch_assoc();
$totalThesis = $rowThesis['total_count'];

$sqlCapstone = "SELECT COUNT(*) AS total_count FROM capstone";
$resultCapstone = $con->query($sqlCapstone);
$rowCapstone = $resultCapstone->fetch_assoc();
$totalCapstones = $rowCapstone['total_count'];

$sqlFstudy = "SELECT COUNT(*) AS total_count FROM feasibility";
$resultFstudy = $con->query($sqlFstudy);
$rowFstudy = $resultFstudy->fetch_assoc();
$totalFstudy = $rowFstudy['total_count'];

$sqlNreport = "SELECT COUNT(*) AS total_count FROM nreport";
$resultNreport = $con->query($sqlNreport);
$rowNreport = $resultNreport->fetch_assoc();
$totalNreport = $rowNreport['total_count'];

$totalPubMat = $totaleBooks + $totalBooks + $totalClips + $totaleMJourn + $totalFiction;
$totalUnpubMat = $totalWorkbook + $totalThesis + $totalCapstones + $totalFstudy + $totalNreport;
$totalItems = $totalPubMat + $totalUnpubMat;


?>
<div class="row">
    <div class="col">
        <h1 class="mt-5 mb-5 text-center">
            <?php echo $totalItems; ?>

        </h1>
    </div>
    <div class="col align-self-center">
        <table class="table">
            <tr>
                <td>Published Materials</td>
                <td><?php echo $totalPubMat; ?></td>
            </tr>
            <tr>
                <td>Unpublished Materials</td>
                <td><?php echo $totalUnpubMat; ?></td>
            </tr>
        </table>

    </div>
</div>