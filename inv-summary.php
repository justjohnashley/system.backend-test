<?php
include 'db.php';

$sqlBook = "SELECT COUNT(*) AS total_count FROM book";
$resultBook = $con->query($sqlBook);
$rowBook = $resultBook->fetch_assoc();
$totalBooks = $rowBook['total_count'];

$sqlCapstone = "SELECT COUNT(*) AS total_count FROM capstone";
$resultCapstone = $con->query($sqlCapstone);
$rowCapstone = $resultCapstone->fetch_assoc();
$totalCapstones = $rowCapstone['total_count'];

$totalPubMat = $totalBooks;
$totalUnpubMat = $totalCapstones;
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