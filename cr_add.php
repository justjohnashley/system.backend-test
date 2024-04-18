<?php
session_start();
include 'db.php';

if (isset($_POST['borrow-add'])) {
    $student = $_POST['idnum'];

    $sql = "SELECT * FROM student WHERE student_id = '$student'";
    $query = $con->query($sql);
    if ($query->num_rows < 1) {
        if (!isset($_SESSION['error'])) {
            $_SESSION['error'] = array();
        }
        $_SESSION['error'][] = 'Student not found';
    } else {
        $row = $query->fetch_assoc();
        $student_id = $row['id'];

        $added = 0;
        foreach ($_POST['idmat'] as $itemid) {
            if (!empty($itemid)) {
                $sql = "SELECT * FROM book WHERE bcode = '$itemid' AND status != 1";
                $query = $con->query($sql);
                if ($query->num_rows > 0) {
                    $brow = $query->fetch_assoc();
                    $bid = $brow['id'];

                    $sql = "INSERT INTO borrow (student_id, book_id, date_borrow) VALUES ('$student_id', '$bid', NOW())";
                    if ($con->query($sql)) {
                        $added++;
                        $sql = "UPDATE book SET status = 1 WHERE id = '$bid'";
                        $con->query($sql);
                    } else {
                        if (!isset($_SESSION['error'])) {
                            $_SESSION['error'] = array();
                        }
                        $_SESSION['error'][] = $con->error;
                    }

                } else {
                    if (!isset($_SESSION['error'])) {
                        $_SESSION['error'] = array();
                    }
                    $_SESSION['error'][] = 'Book with Accession No. (' . $itemid . ') is unavailable';
                }

            }
        }

        if ($added > 0) {
            $book = ($added == 1) ? 'Book' : 'Books';
            $_SESSION['success'] = $added . ' ' . $book . ' successfully borrowed';
        }

    }
} else {
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: circulation.php');

?>