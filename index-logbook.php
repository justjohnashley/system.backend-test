<?php
include 'db2.php';

$sql = "SELECT col_studentID AS ID, col_lastName AS LastName, col_firstName AS FirstName, 'College' AS Type, col_dateTime AS DateTime FROM logbook_college
        UNION ALL
        SELECT per_ID, per_lastName, per_firstName, 'Personnel' AS Type, per_dateTime FROM logbook_personnel
        ORDER BY DateTime DESC
        LIMIT 5;";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();


?>

<div class="card border-0">
    <a href="logbook-records.php" class="card-click">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-10">
                    <h5 class="card-title mt-2">
                        Logbook Records
                    </h5>
                </div>
                <div class="col-2 align-self-center text-end px-5">
                    <i class="fas fa-th-list fa-md"></i>
                </div>
            </div>
        </div>
    </a>
    <div class="card-body">
        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <th scope="row"><?= htmlspecialchars($user['ID']) ?></td>
                            <td><?= htmlspecialchars($user['LastName']) ?></td>
                            <td><?= htmlspecialchars($user['FirstName']) ?></td>
                            <td><?= htmlspecialchars($user['Type']) ?></td>
                            <td><?= date('M d, Y h:i A', strtotime($user['DateTime'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>