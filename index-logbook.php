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
    <div class="card-header">
        <h5 class="card-title mt-2">
            Logbook Records
        </h5>
        <h6 class="card-subtitle text-muted">
            Real-time view of digital records of the Library Logbook
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Name</th>
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
                            <td><?= htmlspecialchars($user['DateTime']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>