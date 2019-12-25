<?php

@session_start();

@$txt1 = $_GET['txt1'];
@$txt2 = $_GET['txt2'];
@$txt3 = $_GET['txt3'];
@$txt4 = $_GET['txt4'];
@$txt5 = $_GET['txt5'];
@$txt6 = $_GET['txt6'];
@$txt7 = $_GET['txt7'];
@$subj = $_GET['subj'];


if (!empty($txt1 && $txt2 && $txt3 && $txt4 && $subj)) {
    if ($subj == 1) {
        $subject = $txt1;
    } elseif ($subj == 2) {
        $subject = $txt2;
    } elseif ($subj == 3) {
        $subject = $txt3;
    } elseif ($subj == 4) {
        $subject = $txt4;
    } elseif ($subj == 5) {
        $subject = $txt5;
    } elseif ($subj == 6) {
        $subject = $txt6;
    } elseif ($subj == 7) {
        $subject = $txt7;
    }

    if ($subject == $txt5) {
//        die('okay');
        if (strpos($txt1, '-') === 0) {
            $change = str_replace('-', '', $txt1);
            $eqtn5 = $txt4 . $txt7 . '+' . $txt4 . $change . $txt2 . ' / ' . $txt6 . ' ^2';
        } else {
            $change = str_replace('-', '', $txt1);
            $eqtn5 = $txt5 . '=' . $txt4 . $txt7 . '-' . $txt4 . $change . $txt2 . ' / ' . $txt6 . ' ^2';
        }
    } elseif ($subject == $txt1) {
        $eqtn5 = $txt1 . '=' . $txt7 . '-' . $txt3 . '/' . $txt4 . $txt5 . $txt6;
    } elseif ($subject == $txt2 || $txt6) {
        $eqtn5 = $txt2 . '=' . $txt7 . '-' . $txt1 . '*' . $txt4 . $txt5;
    }
    $_SESSION['eqtn5'] = $eqtn5;
    if ($eqtn5) {
        header("Location: index.php");
    }
    exit();
} else {
    $error_empty = 'kindly fill in all  input spaces and also ensure you select a radio button';

    $_SESSION['error_empty5'] = $error_empty;
    header("Location: index.php");

    exit();


//    die($error_empty);
}