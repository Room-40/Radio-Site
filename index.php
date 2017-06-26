<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Room40 Radio</title>
    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/628913e8a7.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=textarea], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }


    </style>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Room40 Radio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#intro">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#read">Ways to listen</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Get Involved</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="about" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Room40 Radio</h1>
                    <h3>Room40 Radio is Lyneham High's very own radio station!</h3>
                    <img class="img-responsive lhs" src="lyneham.svg">
                    <a class="page-scroll" href="#read"><i class="fa fa-arrow-down fa-2x" aria-hidden="true" style="color:white;"></i></a>
                </div>
            <div class="col-md-6">
                <img class="img-responsive lhs" src="R40Radio_RND_1000.svg">
            </div>
            </div>
        </div>
    </section>
<!-- about section -->
   <div id="read" class="features-section">

    <div class="features-container row">

        <h2 class="features-headline light">Ways to listen</h2>

        <div class="col-sm-4 feature col-sm-offset-2">

            <div class="feature-icon feature-no-display">
                <a href="https://beta.tunein.com/radio/Room-40-Radio-s289661/"><i class="fa fa-mobile fa-3x" aria-hidden="true"></i></a>
            </div>
            <h5 class="feature-head-text feature-no-display"><a https://beta.tunein.com/radio/Room-40-Radio-s289661/>Tune In</a></h5>
            <p class="feature-subtext light feature-no-display"> Download the Tune In app and search for Room40! Tune In is great on phones! Favourite us to save Room40 for eaiser access next time!</p>
        </div>
  
       
       <div class="col-sm-4 feature col-sm-offset-0">

            <div class="feature-icon feature-no-display">
                <i class="fa fa-desktop fa-3x" aria-hidden="true" ></i>
            </div>
            <h5 class="feature-head-text feature-no-display"> Web </h5>
            <p class="feature-subtext light feature-no-display"> On computers you can listen on the web via a URL! Bookmark the page to keep it!</p>
        </div>
        </div>
        </div>
 <!--features-container-->
 <!--features-section-->

    <!-- Services Section -->
    <div id="services" class="services-sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="thick">Get involved!</h1>
                <div class="col-sm-6">
                    <h2>
                    If you want to record a show or put your music on air, contact us! We can get you access to microphones and recording software plus help you edit your audio.
                    </h2>
                    </div> 
                    <div class="col-sm-6">
                    <i class="fa fa-headphones img-responsive big-icon" aria-hidden="true">  
                        <form action="/">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                             <label for="lname">Email</label>
                             <input type="text" id="email" name="email" placeholder="Your email..">
    
                            <label for="country">Request</label>
                            <select id="Request" name="Request">
                                <option value="Request">Song Request</option>
                                <option value="Shows">Show Inquires</option>
                                <option value="Other">Other</option>
                            </select>

                            <label for="country">Message</label>
                             <input type="textarea" id="Message" name="Message">
  
                            <input type="submit" value="Submit">
                         </form></i>
                    </div>
                </div>
            </div>
        </div>
        </div>


    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
