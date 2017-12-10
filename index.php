<!--To align elements horizontally:margin=auto LOL !!-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#002060">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon-ios.png" />
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Curint</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="animate.js"></script>
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/js/mdb.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet'>
<!--    <script src="./parallax.js-1.5.0/parallax.min.js"></script>-->
    <script src="./js/carousel.js"></script>
    <script src="./js/fetchnews.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
                <a class="navbar-brand" href="./index.php">
                    <img src="header.png" class="curint-logo" alt="Curint">
                </a>
            </div>
            <div class="collapse navbar-collapse nav-collapse" id="myNavbar" data-toggle="collapse" data-target=".nav-collapse.in">
                <ul class="nav navbar-nav">
                    <li><a href="#top">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right social-network-icons">
                    <li><a href="https://github.com/DeeplyDiligent"><i class="fa fa-github-square fa-lg"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <a class="anchor" id="top"></a>
        <div class="jumbotron quote textaligncenter vscrollingcontainer animated fadeIn" id="quote">
            <script>fitimage();</script>
            <div class="w3-container animated fadeInLeft valignsignin">
                <div class="w3-card-4 w3-white" style="max-width:500px;margin-left:auto;margin-right:auto">
                    <header class="w3-container w3-light-grey">
                        <h3 class="card-title fadeInLeft">Sign In to Curint</h3>
                    </header>
                    <div class="w3-container">
                        <div class="summary container-fluid">
                            <form action="./verify.php" method="post">
                                <div class="md-form">
                                    <input name="email" type="text" id="defaultForm-email" class="form-control" autocorrect="off" autocapitalize="off">
                                    <label for="defaultForm-email">Email</label>
                                </div>  

                                <div class="md-form">
                                    <input name="password" type="password" id="defaultForm-pass" class="form-control">
                                    <label style="display:block" for="defaultForm-pass">Password</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-default" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="./create-account.php">
                        <button class="w3-button w3-block w3-dark-grey">Create an Account&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </a>
                </div>
            </div>
        </div>
        <div class="jumbotron about-us">
            <div class="about-us-showcase">
                <h1 class="wow fadeInDown" data-wow-delay="0.6s" style="display:inline-block">About Curint</h1><br>
                <a class="anchor" id="top"></a>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="card">
                                <div class="view overlay hm-white-slight">
                                    <img src="./images/victor-oladipo-africa.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask"></div>
                                    </a>
                                </div>

                            </div>  
                        </div>
                        <div class="col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
                            <div class="card text-center z-depth-2">
                                <div class="card-body">
                                    <p class="black-text mb-0">Curint allows you to watch all your favourite sporting events online, live! Stream or replay AFL, World Cup or Wimbeldon matches straight to your laptop or smartphone.</p>
                                </div>
                                <a href="./create-account.php">
                                    <div class="card-footer text-muted success-color white-text">
                                        <p class="mb-0">Sign up now &nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p>
                                    </div>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron about-us-2">
            <div class="about-us-showcase">
                <h1 class="wow fadeInDown" >All Your Favourites, In One Place.</h1><br>
                <a class="anchor" id="top"></a>
                <div class="container carousel wow zoomIn">
                    <div class="view overlay hm-white-slight carousel">
                        <img src="./images/victor-oladipo-africa.jpg" class="img-fluid carousel" alt="">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div><div class="view overlay hm-white-slight carousel">
                        <img src="./images/victor-oladipo-africa.jpg" class="img-fluid carousel" alt="">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div><div class="view overlay hm-white-slight carousel" id="carousel1">
                        <img src="./images/victor-oladipo-africa.jpg" class="img-fluid carousel" alt="">
                        <a >
                            <div class="mask"></div>
                        </a>
                    </div><div class="view overlay hm-white-slight carousel">
                        <img src="./images/victor-oladipo-africa.jpg" class="img-fluid carousel" alt="">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div><div class="view overlay hm-white-slight carousel">
                        <img src="./images/victor-oladipo-africa.jpg" class="img-fluid carousel" alt="">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>`
                <br><br>
            </div>
        </div>
        <div class="jumbotron about-us-3" id="about-us-3">
            <h1 class="wow fadeInDown">Whats Current?</h1><br>
            <div class="container newscards" id="newscards"><img style="display:block;margin:auto;" class="" src="images/loading.gif"/> </div>
        </div>
    </div>
    <a class="anchor" id="contact"></a>
    <div class="jumbotron contact">
        <div class="contact-showcase">
            <h1 style="display:inline-block">Made with&nbsp;<i class="fa fa-heart animated bounce infinite" style="color:red" aria-hidden="true"></i></h1>
            <br><br>
            <p class="text-center">Meet some of those who poured their heart and souls into this project!</p>
            <div class="people">
                <div class="media mb-1">
                    <div class="media-left waves-light people-pics-pos">
                        <img class="work-exp-img-crop align-self-center" src="./images/default-person.jpg">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Xavier Morgan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat ornare odio ut varius. Etiam at arcu maximus, sodales tortor bibendum, lobortis nulla. Mauris molestie sem vel nibh interdum auctor. Vestibulum eu lectus non est mattis tincidunt vitae quis libero. Integer ultrices euismod ligula eu hendrerit. Cras sodales euismod augue sed viverra. Sed maximus nunc est, sed consequat nunc vestibulum et. Praesent id porta velit, ut molestie odio. Duis rutrum odio eu justo facilisis molestie.</p>
                    </div>
                </div>
                <hr>
                <div class="media mb-1">
                    <div class="media-left waves-light people-pics-pos">
                        <img class="work-exp-img-crop align-self-center" src="./images/default-person.jpg">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Deep Bhattacharyya</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat ornare odio ut varius. Etiam at arcu maximus, sodales tortor bibendum, lobortis nulla. Mauris molestie sem vel nibh interdum auctor. Vestibulum eu lectus non est mattis tincidunt vitae quis libero. Integer ultrices euismod ligula eu hendrerit. Cras sodales euismod augue sed viverra. Sed maximus nunc est, sed consequat nunc vestibulum et. Praesent id porta velit, ut molestie odio. Duis rutrum odio eu justo facilisis molestie.</p>
                    </div>
                </div>
                <hr>
                <div class="media mb-1">
                    <div class="media-left waves-light people-pics-pos">
                        <img class="work-exp-img-crop align-self-center" src="./images/default-person.jpg">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Alex Mioni</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat ornare odio ut varius. Etiam at arcu maximus, sodales tortor bibendum, lobortis nulla. Mauris molestie sem vel nibh interdum auctor. Vestibulum eu lectus non est mattis tincidunt vitae quis libero. Integer ultrices euismod ligula eu hendrerit. Cras sodales euismod augue sed viverra. Sed maximus nunc est, sed consequat nunc vestibulum et. Praesent id porta velit, ut molestie odio. Duis rutrum odio eu justo facilisis molestie.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <footer>
        <p class="text-center" style="font-family: 'Flamenco'; font-size:20px"> &copy;  2017</p>
    </footer>
    <script>new WOW().init();</script>
</body>

</html>

