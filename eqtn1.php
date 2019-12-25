<?php
/**
 * Created by PhpStorm.
 * User: kingsley
 * Date: 12/14/19
 * Time: 6:57 AM
 */
session_start();
ob_start();
//instance of y=a+c
//    c = y -a;
//die(str_replace('a', 'b', 'aka'));

@$txt1 = $_GET['txt1'];
@$txt2 = $_GET['txt2'];
@$txt3 = $_GET['txt3'];
@$subj = $_GET['subj'];

if(!empty($txt1 && $txt2 && $txt3 && $subj)){
    if($subj == 1){
        $subject = $txt1;
        $change = $txt2;
    }
    elseif($subj == 2){
        $subject = $txt2;
        $change = $txt1;
    }
    elseif($subj == 3){
        $subject = $txt3;
    }
//    die($change);
//    echo $check_for_negative = strpos($change, '-');

//    var_dump($check_for_negative);

    if(strpos($change, '-') === 0){
//        die($change);
        $trimmed_change = str_replace('-', '+', $change);
    }else{
//        die('not working');
        $trimmed_change = '-'.$change;
    }
    if(strpos($subject, '+')){
        $subject = str_replace('+', '', $subject);
    }

    $eqtn1 = $subject.' = '.$txt3.$trimmed_change;

    $_SESSION['eqtn1'] = $eqtn1;
    if($eqtn1){
    header("Location: index.php");
    }
    exit();





//    $check_for_negative = strpos($subject, '-');
//    if($check_for_negative == true){
//        $trimmed_subject = trim($subject);
//    }
}
else{
    $error_empty = 'kindly fill in all  input spaces and also ensure you select a radio button';

        $_SESSION['error_empty1'] = $error_empty;
        header("Location: index.php");

    exit();


//    die($error_empty);
}


