<?php
include 'db.php';

$currentMonth = date('n');
$currentQuarter = ceil($currentMonth / 3);

$quarterStartDate = date('Y-m-d', mktime(0, 0, 0, (($currentQuarter - 1) * 3) + 1, 1, date('Y')));

$quarterEndDate = date('Y-m-t', mktime(0, 0, 0, $currentQuarter * 3, 1, date('Y')));

$sql = "SELECT 
            MONTH(date_borrow) AS month,
            COUNT(*) AS total
        FROM 
            borrow
        WHERE 
            date_borrow BETWEEN '$quarterStartDate' AND '$quarterEndDate'
        GROUP BY 
            MONTH(date_borrow)
        ORDER BY 
            MONTH(date_borrow)";

$query = $con->query($sql);

$labels = [];
$borrowedData = [];
$returnedData = [];

for ($i = 0; $i < 3; $i++) {
    $month = (($currentQuarter - 1) * 3) + $i + 1;
    $monthName = date('F', mktime(0, 0, 0, $month, 1));
    $labels[] = $monthName;

    $borrowedSql = "SELECT COUNT(*) AS total 
                    FROM borrow 
                    WHERE MONTH(date_borrow) = '$month' 
                    AND YEAR(date_borrow) = YEAR(CURRENT_DATE())";
    $borrowedQuery = $con->query($borrowedSql);
    $borrowedRow = $borrowedQuery->fetch_assoc();
    $borrowedData[] = ($borrowedRow['total']) ? $borrowedRow['total'] : 0;

    $returnedSql = "SELECT COUNT(*) AS total 
                    FROM borrow 
                    WHERE MONTH(date_return) = '$month' 
                    AND YEAR(date_return) = YEAR(CURRENT_DATE())";
    $returnedQuery = $con->query($returnedSql);
    $returnedRow = $returnedQuery->fetch_assoc();
    $returnedData[] = ($returnedRow['total']) ? $returnedRow['total'] : 0;
}

$barChartData = [
    'labels' => $labels,
    'datasets' => [
        [
            'label' => 'Borrowed',
            'backgroundColor' => '#ffd75e',
            'data' => $borrowedData
        ],
        [
            'label' => 'Returned',
            'backgroundColor' => '#20c997',
            'data' => $returnedData
        ]
    ]
];


?>
