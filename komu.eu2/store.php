<!DOCTYPE html>
<?php include"file-html-language.php"; ?>

<head>
    <title>Store</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php include"file-head.php"; ?>
</head>

<body>

    <div class="boxed animated fadeIn animation-delay-5">


        <?php include"file-header.php"; ?>

        <?php include"file-nav.php"; ?>

        <header class="wrap-title">
            <div class="container">
                <h1 class="page-title">Rivenditori Komu</h1>

                <?php include("file-breadcrumb.php"); ?>
            </div>
        </header>
          
        <div class="container">
            <div class="row">

               <!-- <div class="col-xs-12">
                    <p class="lead lead-lg text-center animated bounceInLeft animation-delay-12">Rivenditori <strong>Komu</strong></p>
                </div>-->

                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2>Acquista adesso i nostri prodotti</h2>
                        <p>
                        <h3><br>
                            Iscriviti alla nostra newsletter per ricevere Offerte imperdibili.</h3>

                            <div class="clearfix"></div>
                        </p>
                        <p>
                            <a href="http://www.komustore.com" target="_blank" class="btn btn-lg pull-right" role="button">
                                <img src="img/logo-general-3011.png" class="img-responsive" width="300">
                                <span class="footer-widget-title">Official Store</span>
                            </a>
                        </p>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 ">
                        <section class="coming-info">
                            <h2>Store Komu</h2>
                            <p>Puoi diventare subito un nostro rivenditore.<br>
                                I passaggi sono semplici e veloci:<br>
                                Compila il form di seguito e ti risponderemo via email.
                            </p>
                        </section>
                    </div>
                    <div class="col-md-8 ">
                        <section class="coming-logo">
                            <h2><i class="fa fa-refresh fa-spin"></i> Diventa nostro rivenditore!</h2>
                            <p>
                                Presenta i nostri prodotti e avrai a disposizione offerte per te e per i tuoi clienti.
                                <br><br>
                            </p>
                        </section>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Invia messaggio</h2>
                    <div class="panel panel-primary animated fadeInDown">
                        <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="InputUserName" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="InputFirstName" placeholder="Cognome">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="InputEmail" placeholder="Email">
                                        </div>

                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> I read <a href="#">Terms and Conditions</a>.
                                        </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container  -->

        <?php include"file-footer.php"; ?>

    </div> <!-- boxed -->


    <div id="back-top">
        <a href="#header"><i class="fa fa-chevron-up"></i></a>
    </div>

    <?php include"file-script.php"; ?>
</body>

</html>
