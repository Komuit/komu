<?php
/**
 * Created by Aleandro Coppola
 * User: N5
 * Date: 04/02/14
 * Time: 11.36
 */ ?>
<nav class="navbar navbar-static-top navbar-mind" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand visible-xs" href="./"><img src="img/logo-nav.png" class="img-responsive" width="152"></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-inverse"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mind-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown <?php if(basename($_SERVER["PHP_SELF"])=="smartphone.php")echo"active";?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smartphone <b class="caret"></b></a>
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li><a href="smartphone.php">Pagina smartphone</a></li>
                        <li class="dropdown-header">I nostri prodotti</li>
                        <li><a href="css.html">K8</a></li>
                        <li><a href="components.html">K5</a></li>
                    </ul>
                </li> <!-- dropdown -->
                <li class="<?php if(basename($_SERVER["PHP_SELF"])=="about-komu.php")echo"active";?>">
                    <a href="about-komu.php">Chi siamo</a>
                </li>
                <li class="<?php if(basename($_SERVER["PHP_SELF"])=="contact.php")echo"active";?>">
                    <a href="contact.php">Contatti</a>
                </li>
                <li class="<?php if(basename($_SERVER["PHP_SELF"])=="support.php")echo"active";?>">
                    <a href="support.php">Assistenza</a>
                </li>
                <li class="<?php if(basename($_SERVER["PHP_SELF"])=="timeline.php")echo"active";?>">
                    <a href="timeline.php">Comunicati</a>
                </li>
                <li class="<?php if(basename($_SERVER["PHP_SELF"])=="store.php")echo"active";?>" style="background: rgb(255,67,76);">
                    <a href="store.php" target="_blank"><img src="img/icone/cart2-nav.png" width="20"> Store</a>
                </li>

            </ul> <!-- nav nabvar-nav -->

            <ul class="nav navbar-nav navbar-right">
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
                    <div class="dropdown-menu dropdown-login animated fadeInUp">
                        <form role="form">
                            <h4 class="section-title">Login Form</h4>

                            <div class="form-group">
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Login</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </li>--> <!-- dropdown -->

                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">User name</a>
                    <div class="dropdown-menu dropdown-profile animated fadeInUp">
                        <img src="img/avatar.jpg" class="imageborder alignleft" alt="image">
                        <h4>Administrator</h4>
                        admin@openmind.com<br>
                        <a href="profile.html">Profile</a> | <a href="#">Logout</a>

                    </div>
                </li>--> <!-- dropdown -->
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/flag/italy_round_icon_64.png" class="fa img-responsive"> IT <b class="caret"></b></a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li><a href="blog.php">Italiano</a></li>
                        <li><a href="blog_right.php">Inglese</a></li>
                    </ul>
                </li>


            </ul> <!-- nav nabvar-nav -->
        </div><!-- navbar-collapse -->
    </div> <!-- container -->
</nav> <!-- navbar navbar-default -->