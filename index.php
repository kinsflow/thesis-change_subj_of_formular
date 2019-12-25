<?php
//require_once __DIR__ . '/eqtn1.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Phd Thesis</title>
    <style>

    </style>
</head>
<body>



<div class="content">
    <div class="ml-5 mt-4 border-bottom-8 row">
        <div class="col-9">
            <i><h1>Ph.D <span class="text-danger">Thesis</span>....</h1></i>
        </div>
        <div class="col-3">
            <p class="ml-5">changing the subject of a formular</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <ul class="navbar-nav">

        </ul>

        <form class="form-inline ml-5" action="#nosearch">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="help.html">see help</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container">
<br><br>
<div id="body">
<!--    <ul>-->
<!--        <li><a class="active" href="">Mr Ado Thesis</a></li>-->
<!---->
<!--        <li style="float:right"><a href="#about">Help</a></li>-->
<!--    </ul>-->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>equation 1
                            <p>a + c = y</p></h2>
                    </div>

                    <div class="card-body">
                        <form method="GET" action="eqtn1.php">
                            <div class="all">

                                <input type="text" id="txt1" name="txt1"><br>
                                <input name="subj" type="radio" value="1">&nbsp;
                                <input type="text" id="txt2" name="txt2"><br>
                                <input name="subj" type="radio" value="2">
                                &nbsp; = &nbsp;
                                <input type="text" id="txt3" name="txt3"><br><br>&nbsp;
                                <!--        <input name="subj" type="radio" value="3"><br><br>-->
                                <input value="" type="submit">
                            </div>
                        </form>
                        <?php if (@$_SESSION['eqtn1']) { ?>
                            <div class="alert alert-success" role="alert">
                                Your Answer Is = <?php echo @$_SESSION['eqtn1']; ?>

                            </div>
                        <?php } ?>
                        <?php if (@$_SESSION['error_empty1']) { ?>
                            <div class="alert alert-danger" role="alert">
                                 <?php echo @$_SESSION['error_empty1']; ?>

                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>equation 2
                            <p>ab + mc = y</p></h2>
                    </div>

                    <div class="card-body">
                        <form method='GET' action="eqtn2.php">
                            <div class="all">
                                <input type="text" name="txt1" id="txt1">
                                <input name="subj" type="radio" value="1">
                                <input type="text" name="txt2" id="txt2">
                                <input name="subj" type="radio" value="2">
                                +
                                <input type="text" name="txt3" id="txt3">
                                <input name="subj" type="radio" value="3">
                                <input type="text" name="txt4" id="txt4">
                                <input name="subj" type="radio" value="4">
                                =<br>
                                <input type="text" name="txt5" id="txt5"><br><br>&nbsp;
                                <!--        <input name="subj" type="radio" value="5"><br><br>-->
                                <input value="" type="submit">
                            </div>
                        </form>
                        <?php if (@$_SESSION['eqtn2']) { ?>
                            <div class="alert alert-success" role="alert">
                                Your Answer Is = <?php echo @$_SESSION['eqtn2']; ?>

                            </div>
                        <?php } ?>
                        <?php if (@$_SESSION['error_empty2']) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo @$_SESSION['error_empty2']; ?>

                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>equation 3<p> 4/7(Q - 28) = p</p></h2>
                    </div>

                    <div class="card-body">
                        <form method='GET' action="eqtn3.php">
                            <div class="all">
                                <input type="text" name="txt1" id="txt1">
                                &nbsp;/&nbsp;
                                <!--        <input name="subj" type="radio" value="1"><br><br>-->
                                <input type="text" name="txt2" id="txt2">
                                <!--        <input name="subj" type="radio" value="2"><br><br>-->
                                <input type="text" name="txt3" id="txt3">
                                <input name="subj" type="radio" value="3">
                                <input type="text" name="txt4" id="txt4">
                                <!--        <input name="subj" type="radio" value="4"><br><br>-->
                                =<br>
                                <input type="text" name="txt5" id="txt5"><br><br>&nbsp;
                                <!--        <input name="subj" type="radio" value="5"><br><br>-->
                                <input value="" type="submit">
                        </form>
                    </div>

                    <?php if (@$_SESSION['eqtn3']) { ?>
                        <div class="alert alert-success" role="alert">
                            Your Answer Is = <?php echo @$_SESSION['eqtn3']; ?>

                        </div>
                    <?php } ?>
                    <?php if (@$_SESSION['error_empty3']) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo @$_SESSION['error_empty3']; ?>

                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</div>

<hr>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>equation 4<p>b^2 / 8π = c</p></h2>
                </div>

                <div class="card-body">
                    <form method='GET' action="eqtn4.php">
                        <div class="all">
                            <input type="text" name="txt1" id="txt1">
                            <input name="subj" type="radio" value="1">
                            &nbsp;^2&nbsp;&nbsp; / &nbsp;
                            <input type="text" name="txt2" id="txt2">&nbsp;
                            <input type="text" name="txt3" id="txt3">
                            &nbsp;=&nbsp;
                            <input type="text" name="txt4" id="txt4"><br><br>&nbsp;
                            <input value="" type="submit">
                    </form>
                </div>

                <?php if (@$_SESSION['eqtn4']) { ?>
                    <div class="alert alert-success" role="alert">
                        Your Answer Is = <?php echo @$_SESSION['eqtn4']; ?>

                    </div>
                <?php } ?>
                <?php if (@$_SESSION['error_empty4']) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo @$_SESSION['error_empty4']; ?>

                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</div>


<hr>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>equation 5<p>ut+1/2at^2 = s</p></h2>
                </div>

                <div class="card-body">
                    <form method='GET' action="eqtn5.php">
                        <div class="all">
                            <input type="text" name="txt1" id="txt1">
                            <input name="subj" type="radio" value="1">
                            <input type="text" name="txt2" id="txt2">
                            <input name="subj" type="radio" value="2">
                            <input type="text" name="txt3" id="txt3">&nbsp; / &nbsp;
                            <input type="text" name="txt4" id="txt4">
                            <input type="text" name="txt5" id="txt5">
                            <input name="subj" type="radio" value="5">
                            <input type="text" name="txt6" id="txt6">
                            <input name="subj" type="radio" value="6">&nbsp;^2&nbsp;
                            =
                            <input type="text" name="txt7" id="txt7">&nbsp;<br><br>&nbsp;
                            <input value="" type="submit">
                    </form>
                </div>

                <?php if (@$_SESSION['eqtn5']) { ?>
                    <div class="alert alert-success" role="alert">
                        Your Answer Is = <?php echo @$_SESSION['eqtn5']; ?>

                    </div>
                <?php } ?>
                <?php if (@$_SESSION['error_empty5']) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo @$_SESSION['error_empty5']; ?>

                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</div>


<!--<p>height() - returns the height of an element.</p>-->
<?php session_unset(); ?>
</body>

</html>
