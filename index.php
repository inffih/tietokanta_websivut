<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Suomen Frisbeegolf-radat</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Header -->
    <a name="header"></a>
    <div class="intro-header">
        <div class="container"
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Suomen Frisbeegolf-radat</h1>

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#info" id="info-osio">Info</a></li>
                            <li><a data-toggle="tab" href="#home" id="hae-radat">Hae radat</a></li>
                            <li><a data-toggle="tab" href="#menu1" id="hae-pelit">Hae pelit</a></li>
                            <li><a data-toggle="tab" href="#menu2" id="lisaa-tulos">Lisää tulos</a></li>
                        </ul>

                        <div class="tab-content">

                          <div id="info" class="tab-pane fade in active">
                            <h2>Info</h2>
                            <h3>Tervetuloa frisbeegolf-pelirekisteriin. Täällä voit lisätä oman pelituloksesi sekä hakea Suomen frisbeegolf-ratoja ja muiden tuloksia.</h3>
                          </div>

                          <div id="home" class="tab-pane fade">
                            <h2>Radat</h2>

                          </div>

                          <div id="menu1" class="tab-pane fade">
                            <h2>Pelit</h2>

                          </div>

                          <div id="menu2" class="tab-pane fade">
                            <h2>Lisää tulos</h2>
                            <form method="post" action="lisaatulos.php">
                              <div class="form-group">
                                <h3>Rata</h3>
                                <input type="text" class="form-control" name="rata_ID">
                                <h3>Tulos</h3>
                                <input type="text" class="form-control" name="ratatulos">
                                <h3>Pelaaja</h3>
                                <input type="text" class="form-control" name="pelaaja_ID">
                              </div>
                              <button type="submit" class="btn btn-success btn-lg">Lisää tulos</button>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/haut.js"></script>

</body>

</html>
