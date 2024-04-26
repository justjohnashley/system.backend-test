<?php
$sqlBorrowed = "SELECT COUNT(*) AS count FROM borrow WHERE status = 0 AND DATE(date_borrow) = CURDATE()";
$resultBorrowed = mysqli_query($con, $sqlBorrowed);
$rowBorrowed = mysqli_fetch_assoc($resultBorrowed);
$borrowed = $rowBorrowed['count'];

$sqlReturned = "SELECT COUNT(*) AS count FROM borrow WHERE status = 1 AND DATE(date_return) = CURDATE()";
$resultReturned = mysqli_query($con, $sqlReturned);
$rowReturned = mysqli_fetch_assoc($resultReturned);
$returned = $rowReturned['count'];

if ($borrowed < 1 && $returned < 1) {
    $CSumPie = [
        'labels' => ['Data Unavailable'],
        'datasets' => [
            [
                'backgroundColor' => ['#999999'],
                'borderWidth' => 0,
                'data' => [1]
            ]
        ]
    ];
} else {
    $CSumPie = [
        'labels' => ['Borrowed', 'Returned'],
        'datasets' => [
            [
                'backgroundColor' => ['#ffd75e', '#20c997'],
                'borderWidth' => 0,
                'data' => [$borrowed, $returned]
            ]
        ]
    ];
}

?>