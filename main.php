<!--To align elements horizontally:margin=auto LOL !!-->
<!--DONT FORGET TO REDIRECT BACK TO HOMEPAGE IF NO PASSWORD FOUND !!-->
<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ./index.php');
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#002060">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon-ios.png" />
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SportStream</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/js/mdb.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="stylesmain.css">
    <script src="./js/main.js"></script>
    <script src="./js/search.js"></script>
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
                    <img src="header.png" class="sportstream-logo" alt="SportStream">
                </a>
            </div>
            <div class="collapse navbar-collapse nav-collapse" id="myNavbar" data-toggle="collapse" data-target=".nav-collapse.in">
                <ul class="nav navbar-nav">
                    <li><a href="#top">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right social-network-icons">
                    <li><a href="https://github.com/DeeplyDiligent/sportstream"><i class="fa fa-github-square fa-lg"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="search-box">
            
            <div class="desktop-search md-form">
                <i class="fa fa-search prefix"></i>
                <input type="text" id="form2" class="form-control mr-sm-2">
                <label for="form2">Search</label>
            </div>
            <div class="search-button">
                <a href="#" class="btn btn-outline-success waves-effect">Search&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>   
        </div>
    </nav>
    <div class="main">
        <a class="anchor" id="top"></a>
        <div class="container search-results">
            <h1 style="display:inline-block; padding-left:15px" id="search-result-heading">Search Results</h1><br><br>
            <div id="search-results-cards">
            </div>
        </div>
        <div class="container">
            <h1 style="display:inline-block">Recommended For You</h1><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>new WOW().init();</script>
</body>

</html>
