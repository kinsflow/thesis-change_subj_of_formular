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

    if($subject == $txt4){
        if(strpos($txt1, '-') === 0){
            $trimmed_change = str_replace('-', '+', $txt1);
        }else{
            $trimmed_change  = '-'.$txt1;
        }

        $solution = $txt4 . ' = ' . $txt5.$trimmed_change.$txt2. ' / '. $txt3;
//        die($solution);
    }

    if($subject == $txt3){
        if(strpos($txt1, '-') === 0){
            $trimmed_change = str_replace('-', '+', $txt1);
        }else{
            $trimmed_change  = '-'.$txt1;
        }

        $solution = $txt3 . ' = ' . $txt5.$trimmed_change.$txt2. ' / '. $txt4;
//        die($solution);
    }


    if($subject == $txt2){
        if(strpos($txt3, '-') === 0){
            $trimmed_change = str_replace('-', '', $txt3);
        }elseif(strpos($txt3, '+') === 0){
            $trimmed_change  = str_replace('+', '-', $txt3);
        }else{
            $trimmed_change  = str_replace('+', '-', $txt3);
        }

        $solution = $txt2 . ' = ' . $txt5.$trimmed_change.$txt4. ' / '. $txt1;
//        die($solution);
    }

    if($subject == $txt1){
        if(strpos($txt3, '-') === 0){
            $trimmed_change = str_replace('-', '', $txt3);
        }elseif(strpos($txt3, '+') === 0){
            $trimmed_change  = str_replace('+', '-', $txt3);
        }else{
            $trimmed_change  = str_replace('+', '-', $txt3);
        }

        $solution = $txt1 . ' = ' . $txt5.$trimmed_change.$txt4. ' / '. $txt2;
//        die($solution);
    }
    $eqtn2 = $solution;
//    die($eqtn2);
    $_SESSION['eqtn2'] = $eqtn2;
    if($eqtn2){
        header("Location: index.php");
    }
    exit();
}
else{
    $error_empty = 'kindly fill in all  input spaces and also ensure you select a radio button';

    $_SESSION['error_empty2'] = $error_empty;
    header("Location: index.php");

    exit();


//    die($error_empty);
}