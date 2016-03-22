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

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Suomen Frisbeegolf-radat</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#header">Hae ratoja</a>
                    </li>
                    <li>
                        <a href="#info">Info</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="header"></a>
    <div class="intro-header">
        <div class="container"
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Suomen Frisbeegolf-radat</h1>
                        <hr class="intro-divider">

                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">Hae rataa</a></li>
                          <li><a data-toggle="tab" href="#menu1">Hae pelaajaa</a></li>
                          <li><a data-toggle="tab" href="#menu2">Lisää tulos</a></li>
                        </ul>

                        <div class="tab-content">
                          <div id="home" class="tab-pane fade in active">
                            <h2>Hae rataa</h2>
                            <form method="post">
                              <div class="form-group">
                                <h3>Rata</h3>
                                <input id="input_rata" type="text" class="form-control" name="pelaaja_ID">
                              </div>
                              <button type="submit" class="btn btn-success btn-lg ratahaku">Hae rataa</button>
                            </form>
                          </div>

                          <div id="menu1" class="tab-pane fade">
                            <h2>Hae pelaajaa</h2>
                            <form method="post" action="lisaatulos.php">
                              <div class="form-group">
                                <h3>Pelaaja</h3>
                                <input type="text" class="form-control" name="pelaaja_ID">
                                <h3>Seura</h3>
                                <input type="text" class="form-control" name="ratatulos">
                              </div>
                              <button type="submit" class="btn btn-success btn-lg">Hae pelaajaa</button>
                            </form>
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

    <!-- Page Content -->

	<a name="results"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Haun tulokset:</h2>
                    <p class="lead">Tähän tulee hakujen tulokset</p>


                </div>
            </div>
        </div>
    </div>
    <a name="info"></a>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Info-osio</h2>
                    <p class="lead">Tähän tulee infoa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#header">Hae ratoja</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#info">Info</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Suomen Frisbeegolf-radat. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/kaupunkihaku.js"></script>

</body>

</html>
