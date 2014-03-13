<!DOCTYPE html>
<html lang="en">

<head>
    <title>Compare</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <?php include"file-head.php"; ?>
    <script>
        $(document).ready(function(){
            $("[data-toggle=tooltip]").tooltip({ placement: 'left'});
        });
    </script>
</head>


<body class="page-smartphone">

    <div class="boxed animated fadeIn animation-delay-5">


    <?php include"file-header.php"; ?>

    <?php include"file-nav.php"; ?>

        <header class="wrap-title">
            <div class="container">
                <h1 class="page-title">Confronto smartphone</h1>

                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Team</li>
                </ol>
            </div>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title text-center">Titolo</h2>
                </div>

                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Sistema operativo</th><th>K8</th><th>K5 turbo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr><td>CPU</td><td>Octa Core</td><td>Quad Core</td></tr>
                        <tr><td>GPU</td><td>MALI</td><td>VG</td></tr>
                        </tbody>

                        <thead>
                        <tr><th>Connea</th><th></th><th></th></tr>
                        </thead>
                        <tbody>
                        <tr><td>3G</td><td>850/900</td><td>950/1000</td></tr>
                        <tr><td>4G</td><td>950/1000</td><td>1000/1500</td></tr>
                        <tr><td>WifI</td><td>802.11a/b/g/n/ac</td><td>802.11a/b/g/n/ac</td></tr>
                        </tbody>
                    </table>
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
