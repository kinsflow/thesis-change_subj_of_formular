<?php

@session_start();

@$txt1 = $_GET['txt1'];
@$txt2 = $_GET['txt2'];
@$txt3 = $_GET['txt3'];
@$txt4 = $_GET['txt4'];
@$subj = $_GET['subj'];


if (!empty($txt1 && $txt2 && $txt3 && $txt4 && $subj)) {
//    √
   $eqtn4 = $txt1.'='. '√'.$txt2.$txt3.$txt4;
    $_SESSION['eqtn4'] = $eqtn4;
    if($eqtn4){
        header("Location: index.php");
    }
    exit();


}
else{
    $error_empty = 'kindly fill in all  input spaces and also ensure you select a radio button';

    $_SESSION['error_empty4'] = $error_empty;
    header("Location: index.php");

    exit();


//    die($error_empty);
}