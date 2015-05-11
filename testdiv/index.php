<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Disfucionario</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="script/script.js"></script>
    <script src="script/jquery-tmpl.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

    <style>

        /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            padding-bottom: 40px;
            color: #5a5a5a;
        }



        /* CUSTOMIZE THE NAVBAR
        -------------------------------------------------- */

        /* Special class on .container surrounding .navbar, used for positioning it into place. */
        .navbar-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10;
            margin-top: 20px;
            margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
        }
        .navbar-wrapper .navbar {

        }

        /* Remove border and change up box shadow for more contrast */
        .navbar .navbar-inner {
            border: 0;
            -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
            -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
            box-shadow: 0 2px 10px rgba(0,0,0,.25);
        }

        /* Downsize the brand/project name a bit */
        .navbar .brand {
            padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
            font-size: 16px;
            font-weight: bold;
            text-shadow: 0 -1px 0 rgba(0,0,0,.5);
        }

        /* Navbar links: increase padding for taller navbar */
        .navbar .nav > li > a {
            padding: 15px 20px;
        }

        /* Offset the responsive button for proper vertical alignment */
        .navbar .btn-navbar {
            margin-top: 10px;
        }



        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 60px;
        }

        .carousel .container {
            position: relative;
            z-index: 9;
        }

        .carousel-control {
            height: 80px;
            margin-top: 0;
            font-size: 120px;
            text-shadow: 0 1px 1px rgba(0,0,0,.4);
            background-color: transparent;
            border: 0;
            z-index: 10;
        }

        .carousel .item {
            height: 500px;
        }
        .carousel img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 500px;
        }

        .carousel-caption {
            background-color: transparent;
            position: static;
            max-width: 550px;
            padding: 0 20px;
            margin-top: 200px;
        }
        .carousel-caption h1,
        .carousel-caption .lead {
            margin: 0;
            line-height: 1.25;
            color: #fff;
            text-shadow: 0 1px 1px rgba(0,0,0,.4);
        }
        .carousel-caption .btn {
            margin-top: 10px;
        }



        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .span4 {
            text-align: center;
        }
        .marketing h2 {
            font-weight: normal;
        }
        .marketing .span4 p {
            margin-left: 10px;
            margin-right: 10px;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
            margin: 80px 0; /* Space out the Bootstrap <hr> more */
        }
        .featurette {
            padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
            overflow: hidden; /* Vertically center images part 2: clear their floats. */
        }
        .featurette-image {
            margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
        }

        /* Give some space on the sides of the floated elements so text doesn't run right into it. */
        .featurette-image.pull-left {
            margin-right: 40px;
        }
        .featurette-image.pull-right {
            margin-left: 40px;
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-size: 50px;
            font-weight: 300;
            line-height: 1;
            letter-spacing: -1px;
        }



        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (max-width: 979px) {

            .container.navbar-wrapper {
                margin-bottom: 0;
                width: auto;
            }
            .navbar-inner {
                border-radius: 0;
                margin: -20px 0;
            }

            .carousel .item {
                height: 500px;
            }
            .carousel img {
                width: auto;
                height: 500px;
            }

            .featurette {
                height: auto;
                padding: 0;
            }
            .featurette-image.pull-left,
            .featurette-image.pull-right {
                display: block;
                float: none;
                max-width: 40%;
                margin: 0 auto 20px;
            }
        }


        @media (max-width: 767px) {

            .navbar-inner {
                margin: -20px;
            }

            .carousel {
                margin-left: -20px;
                margin-right: -20px;
            }
            .carousel .container {

            }
            .carousel .item {
                height: 300px;
            }
            .carousel img {
                height: 300px;
            }
            .carousel-caption {
                width: 65%;
                padding: 0 70px;
                margin-top: 100px;
            }
            .carousel-caption h1 {
                font-size: 30px;
            }
            .carousel-caption .lead,
            .carousel-caption .btn {
                font-size: 18px;
            }

            .marketing .span4 + .span4 {
                margin-top: 40px;
            }

            .featurette-heading {
                font-size: 30px;
            }
            .featurette .lead {
                font-size: 18px;
                line-height: 1.5;
            }

        }

        body { background: #262626; }
        .breadcrumb {background: #262626; border: 0px solid rgba(56, 56, 56, 1); border-radius: 5px; display: block;}
        .breadcrumb li {font-size: 14px;}
        .breadcrumb a {color: rgba(79, 79, 79, 1);}
        .breadcrumb a:hover {color: rgba(61, 61, 61, 1);}
        .breadcrumb>.active {color: rgba(255, 255, 255, 1);}
        .breadcrumb>li+li:before {color: rgba(204, 204, 204, 1); content: "\002F\002F\00a0";}
    </style>



</head>

<body>

<!-- Navigation -->

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <a class="navbar-brand" href="#">Disfuncionarios</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">






            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul  class="dropdown-menu" role="menu" >
                        <li>uno</li>
                        <li>dos</li>
                        <li><div id="contenido"></div>
                            <div id="municipios"></div></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>




<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contenido
                <small>Subtexto</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">Raiz</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->






    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
    <div id="municipios">fff</div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="..." alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; México 2015</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
