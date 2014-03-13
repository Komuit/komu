<!DOCTYPE html>
<?php include"file-html-language.php"; ?>

<head>
    <title>Assistenza</title>
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
                <h1 class="page-title">Assistenza</h1>

                <?php include("file-breadcrumb.php"); ?>
            </div>
        </header>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <section>
                    <h2 class="section-title">Send Message</h2>

                    <p>Lorem ipsum Ex aliqua tempor nisi laboris dolor id laborum irure minim tempor in sit dolore amet sit esse nostrud tempor nulla consequat aute in nostrud laboris sint ullamco amet nisi pariatur officia nulla pariatur in id et labore dolore ad sit.</p>

                    <form role="form">
                        <div class="form-group">
                            <label for="InputName">Name</label>
                            <input type="nome" class="form-control" id="InputName" >
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Mesagge</label>
                            <textarea class="form-control" id="InputMessage" rows="8"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>

            <div class="col-md-4">
                <?php include("file-boxContact.php"); ?>
            </div>
        </div>
        <section>
            <!--<div class="well well-sm">
                <iframe width="100%" height="350" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=central%2Bpark&amp;ie=UTF8&amp;z=12&amp;t=m&amp;iwloc=near&amp;output=embed"></iframe>
            </div>-->
        </section>
    </div> <!-- container -->

        <?php include"file-footer.php"; ?>

    </div> <!-- boxed -->


    <div id="back-top">
        <a href="#header"><i class="fa fa-chevron-up"></i></a>
    </div>

    <?php include"file-script.php"; ?>
</body>

</html>
