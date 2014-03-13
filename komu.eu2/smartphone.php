<!DOCTYPE html>
<?php include"file-html-language.php"; ?>

<head>
    <title>Smartphone</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php include"file-head.php"; ?>
    <script>
        $(document).ready(function(){
            $("[data-toggle=tooltip]").tooltip({ placement: 'left'});
        });
    </script>

    <script type="text/javascript">
        jQuery(function(){
            var max = 3;
            var checkboxes = $('input[type="checkbox"]');
            checkboxes.change(function(){
                var current = checkboxes.filter(':checked').length;
                checkboxes.filter(':not(:checked)').prop('disabled', current >= max);


                var sList = "";
                $('input[type=checkbox]').each(function () {
                    if(this.checked){
                    sList += $(this).val()+"-";
                    }
                });
                console.log (sList);


                if(current<=3 && current>1 ) {
                    document.getElementById('color-switcher').style.right="0px";
                    document.getElementById('alert-confronto').style.display="none";
                    /*document.getElementById('btn-confronta').href="confronta.php?prodotti="+sList;*/
                    $('#btn-confronta').attr('href','compare.php=compare='+sList);
                }
                else{document.getElementById('color-switcher').style.right="-180px";}

            });
        });
    </script>
</head>


<body class="page-smartphone">



<!-- CONFRONTO-->
<div id="color-switcher" class="animated fadeIn animation-dalay-10">
    <div id="color-switcher-content">
        <div class="btn-group">
            <a href="" target="_blank" class="btn btn-success" id="btn-confronta">CONFRONTA</a>
        </div>
    </div>
</div> <!-- CONFRONTA -->


<div class="modal fade" id="smartphone-social" tabindex="-1" role="dialog" aria-labelledby="smartphone-socialLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="smartphone-socialLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Facebook:  <div class="fb-like" data-href="https://www.facebook.com/KomuSmartphone" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->


    <div class="boxed animated fadeIn animation-delay-5">


    <?php include"file-header.php"; ?>

    <?php include"file-nav.php"; ?>

        <header class="wrap-title">
            <div class="container">
                <h1 class="page-title">Smartphone Komu</h1>

                <?php include("file-breadcrumb.php"); ?>
            </div>
        </header>

        <div class="container">
            <div class="row">

<!-- SMARTPHONE 1-->
                <div class="col-md-4 animated fadeInDown animation-delay-4">
                    <section>
                        <!-- NAV -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home_k8" data-toggle="tab">K8</a></li>
                            <li><a href="#specifiche_k8" data-toggle="tab">Specifiche</a></li>
                            <li><a href="#accessori_k8" data-toggle="tab">Accessori</a></li>
                        </ul>
                        <!-- Tab panes -->


                        <div class="tab-content">


                            <!-- HOME-->
                            <div class="tab-pane active" id="home_k8">
                                <h3 class="section-title">Komu K8<small class="pull-right">the next experience</small><div class="clearfix"></div></h3>
                                    <div class="clearfix"></div>
                                        <div class="main-box-smartphone">
                                            <img src="img/komu_k8/home_k8.png" alt="" class="img-responsive">
                                            <div class="clearfix"><br></div>
                                            <a href="#" class="btn btn-danger pull-right" target="_blank" data-toggle="tooltip" title="KomuStore">Prezzo consigliato: 329.90</a>
                                        </div>
                                <hr>
                                <label class="checkbox-inline pull-left checkbox-confronta">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Confronta
                                </label>
                                <a href="" class="social-icon soc animated fadeInDown animation-delay-1 pull-right" data-toggle="modal" data-target="#smartphone-social">
                                    <i class="fa fa-globe" data-toggle="tooltip" title="Condividi"></i>
                                </a>
                                <a href="#" class="btn btn-default pull-right" target="_blank">Dettagli</a>
                            </div>


                            <!-- SPECIFICHE-->
                            <div class="tab-pane" id="specifiche_k8">
                                <h3 class="section-title">Specifiche<small class="pull-right">K8</small><div class="clearfix"></div></h3>
                                    <div class="clearfix"></div>
                                        <div class="main-box-smartphone">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr></tr>
                                                </thead>
                                                <tbody>
                                                <tr><td>Display</td><td>5"</td></tr>
                                                <tr><td>Display</td><td>5"</td></tr>
                                                <tr><td>Display</td><td>5"</td></tr>
                                                <tr><td>Display</td><td>5"</td></tr>
                                                <tr><td>Display</td><td>5"</td></tr>
                                                <tr><td>Display</td><td>5"</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                <hr>
                                <label class="checkbox-inline pull-left checkbox-confronta">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Confronta
                                </label>
                                <a href="" class="social-icon soc animated fadeInDown animation-delay-1 pull-right" data-toggle="modal" data-target="#smartphone-social">
                                    <i class="fa fa-globe" data-toggle="tooltip" title="Condividi"></i>
                                </a>
                                <a href="#" class="btn btn-default pull-right" target="_blank">Dettagli</a>
                            </div>



                            <!-- ACCESSORI-->
                            <div class="tab-pane" id="accessori_k8">
                                <h3 class="section-title">Accessori<small class="pull-right">K8</small><div class="clearfix"></div></h3>
                                <div class="clearfix"></div>
                                <div class="main-box-smartphone">
                                    ACCESSORI K8
                                </div>
                                <hr>
                            </div>
                        </div>
                    </section>
                </div>




<!-- SMARTPHONE 2-->
                <div class="col-md-4 animated fadeInDown animation-delay-4">
                    <section>
                        <!-- NAV -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home_k5octa" data-toggle="tab">K5 OCTA</a></li>
                            <li><a href="#specifiche_k5octa" data-toggle="tab">Specifiche</a></li>
                            <li><a href="#accessori_k5octa" data-toggle="tab">Accessori</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- HOME-->
                            <div class="tab-pane active" id="home_k5octa">
                                <h3 class="section-title">Komu K8<small class="pull-right">the next experience</small><div class="clearfix"></div></h3>
                                <div class="clearfix"></div>
                                <div class="main-box-smartphone">
                                    <img src="img/komu_k8/home_k8.png" alt="" class="img-responsive">
                                    <div class="clearfix"><br></div>
                                    <a href="#" class="btn btn-danger pull-right" target="_blank" data-toggle="tooltip" title="KomuStore">Prezzo consigliato: 329.90</a>
                                </div>
                                <hr>
                                <label class="checkbox-inline pull-left checkbox-confronta">
                                    <input type="checkbox" id="inlineCheckbox1" value="k5octa"> Confronta
                                </label>
                                <a href="" class="social-icon soc animated fadeInDown animation-delay-1 pull-right" data-toggle="modal" data-target="#smartphone-social">
                                    <i class="fa fa-globe" data-toggle="tooltip" title="Condividi"></i>
                                </a>
                                <a href="#" class="btn btn-default pull-right" target="_blank">Dettagli</a>

                            </div>

                            <!-- SPECIFICHE-->
                            <div class="tab-pane" id="specifiche_k5octa">
                                <h3 class="section-title">Specifiche<small class="pull-right">K8</small><div class="clearfix"></div></h3>
                                <div class="clearfix"></div>
                                <div class="main-box-smartphone">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr></tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>Display</td><td>5"</td></tr>
                                        <tr><td>Display</td><td>5"</td></tr>
                                        <tr><td>Display</td><td>5"</td></tr>
                                        <tr><td>Display</td><td>5"</td></tr>
                                        <tr><td>Display</td><td>5"</td></tr>
                                        <tr><td>Display</td><td>5"</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <label class="checkbox-inline pull-left checkbox-confronta">
                                    <input type="checkbox" id="inlineCheckbox1" value="k5octa"> Confronta
                                </label>
                                <a href="" class="social-icon soc animated fadeInDown animation-delay-1 pull-right" data-toggle="modal" data-target="#smartphone-social">
                                    <i class="fa fa-globe" data-toggle="tooltip" title="Condividi"></i>
                                </a>
                                <a href="#" class="btn btn-default pull-right" target="_blank">Dettagli</a>
                            </div>
                            <!-- ACCESSORI-->
                            <div class="tab-pane" id="accessori_k5octa">
                                <h3 class="section-title">Accessori<small class="pull-right">K8</small><div class="clearfix"></div></h3>
                                <div class="clearfix"></div>
                                <div class="main-box-smartphone">
                                    ACCESSORI K8
                                </div>
                                <hr>
                            </div>
                        </div>
                    </section>
                </div>



            </div>
        </div> <!-- container -->

        <?php include"file-footer.php"; ?>

    </div> <!-- boxed -->


    <div id="back-top">
        <a href="#header"><i class="fa fa-chevron-up"></i></a>
    </div>

<?php include"file-script.php"; ?>
</body>

</html>
