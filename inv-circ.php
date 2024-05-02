<?php
$sqlBorrowed = "SELECT COUNT(*) AS count FROM borrow WHERE DATE(date_borrow)";
$resultBorrowed = mysqli_query($con, $sqlBorrowed);
$rowBorrowed = mysqli_fetch_assoc($resultBorrowed);
$borrowed = $rowBorrowed['count'];

$sqlReturned = "SELECT COUNT(*) AS count FROM borrow WHERE DATE(date_return)";
$resultReturned = mysqli_query($con, $sqlReturned);
$rowReturned = mysqli_fetch_assoc($resultReturned);
$returned = $rowReturned['count'];

if ($borrowed < 1 && $returned < 1) {
    $CircTotal = [
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
    $CircTotal = [
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