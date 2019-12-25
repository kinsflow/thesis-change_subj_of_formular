<?php

@session_start();

@$txt1 = $_GET['txt1'];
@$txt2 = $_GET['txt2'];
@$txt3 = $_GET['txt3'];
@$txt4 = $_GET['txt4'];
@$txt5 = $_GET['txt5'];
@$subj = $_GET['subj'];


if (!empty($txt1 && $txt2 && $txt3 && $txt4 && $txt5 && $subj)) {
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
    }


    if ($subject == $txt3){
        if(strpos($txt4, '-') === 0){
//            die($txt4);
            $change = str_replace('-', '+', $txt4);
            $ans = '+'.$change * $txt1;
        }
        elseif(strpos($txt4, '+') === 0){
//            die($txt4);
            $change = str_replace('+', '-', $txt4);
            $ans = ''.$change * $txt1;
        }

       $eqtn3  = $txt3 .'='. $txt2.$txt5.$ans.' / '.$txt1;
    }
    $_SESSION['eqtn3'] = $eqtn3;
    if($eqtn3){
        header("Location: index.php");
    }
    exit();
}
else{
    $error_empty = 'kindly fill in all  input spaces and also ensure you select a radio button';

    $_SESSION['error_empty3'] = $error_empty;
    header("Location: index.php");

    exit();


//    die($error_empty);
}