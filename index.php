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
    <title>SportStream</title>
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
                    <img src="header.png" class="sportstream-logo" alt="SportStream">
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
                        <h3 class="card-title fadeInLeft">Sign In to SportStream</h3>
                    </header>
                    <div class="w3-container">
                        <div class="summary container-fluid">
                            <form action="./verify.php" method="post">
                                <div class="md-form">
                                    <input name="email" type="text" id="defaultForm-email" class="form-control">
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
                    <a href="https://www.linkedin.com/in/deep-bhattacharyya-56494bb5/">
                        <button class="w3-button w3-block w3-dark-grey" href="">Create an Account&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </a>
                </div>
            </div>
        </div>
        <a class="anchor" id="profile"></a>
        <div class="jumbotron profile">
            <div class="w3-container animated slideInLeft" data-wow-delay="0.3s">
                <div class="w3-card-4" style="margin:auto;max-width:500px">
                    <header class="w3-container w3-light-grey">
                        <h3 class="card-title wow fadeInLeft">Deep Bhattacharyya</h3>
                    </header>
                    <div class="w3-container">
                        <div class="summary container-fluid">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="./images/face.jpg" alt="Deep Bhattacharyya" class="w3-circle face-image w3-left">
                                </div>
                                <div class="col-sm-10">
                                    <p class="profile-text">Student at Monash University.<br><span class="address"><span class="glyphicon glyphicon-map-marker"></span>&nbsp; Clayton, VIC 3800&nbsp;Australia</span>
                                    </p>
                                </div>
                                <p class="profile-text">Currently Studying:<br>Commerce Specialist (Finance) <br>+ IT (Business Information Systems)</p>
                                <p class="profile-text">Working knowledge of:<br>Python, Java, Javascript, HTML, CSS, node.JS, React Native, Bootstrap, PHP and VBA.</p>
                                <p class="profile-text">Year 12 Graduate from John Monash Science School:<br>Atar of 98.3 out of 99.95</p>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.linkedin.com/in/deep-bhattacharyya-56494bb5/">
                        <button class="w3-button w3-block w3-dark-grey" href="https://www.linkedin.com/in/deep-bhattacharyya-56494bb5/">Connect With Me On &nbsp;<i class="fa fa-linkedin-square"></i>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </a>
                </div>
            </div>
        </div>
        <a class="anchor" id="projects"></a>
        <div class="jumbotron projects">
            <div class="projects-showcase wow fadeInLeft">
                <h1 class="recent-headings-title">Recent Projects</h1>
                <br><br>
                <div class="container-fluid" style="padding:0px">
                    <div class="row" style="margin:0px">
                        <div class="col-sm-6" style="padding:0px;">
                            <div class="projects-card w3-container">
                                <div class="w3-card-4" style="width:auto; heigh:auto;">
                                    <header class="w3-container w3-blue">
                                        <h1 style="font-size:30px"><span class="glyphicon glyphicon-globe"></span>&nbsp;DeeplyDiligent Website</h1>
                                    </header>
                                    <div class="projects w3-container">
                                        <p>This website was made as a personal project in an endeavour to grow my reach using Search Engine Optimisation (SEO) techniques and to learn the Material Bootstrap framework for CSS. I was able to grow my expertise in designing elegant websites in addition to developing my online profile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding:0px">
                            <div class="projects-card w3-container">
                                <div class="w3-card-4" style="width:auto;">
                                    <header class="w3-container w3-blue">
                                        <h1 style="font-size:30px">&#x1f916;&nbsp;DeeplyDiligent Bot</h1>
                                    </header>
                                    <div class="projects w3-container">
                                        <p>In the emerging field of Artificial Intelligence, I created a bot to help people remember their daily tasks. In the future, Google Calendar integration will ensure users can be reminded on all devices. This project uses node.JS and mySQL, which were used to communicate with the server and store reminders.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:0px">
                        <div class="col-sm-6" style="padding:0px">
                            <div class="projects-card w3-container">
                                <div class="w3-card-4" style="width:auto;">
                                    <header class="w3-container w3-blue">
                                        <h1 style="font-size:30px"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Employee Tracking App for NBN</h1>
                                    </header>
                                    <div class="projects w3-container">
                                        <p>Designed a PHP based form to be used at my father's workplace for project management. Used my experience in PHP and MySQL to create a robust and adaptable solution, as required by the specification given by the company. Data entry skills such as input validation and mail merge were also important.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding:0px">
                            <div class="projects-card w3-container">
                                <div class="w3-card-4" style="width:auto;">
                                    <header class="w3-container w3-blue">
                                        <h1 style="font-size:30px"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Python GUI Data Validator for ClimateWatch</h1>
                                    </header>
                                    <div class="projects w3-container">
                                        <p>Designed and programmed a Guided User Interface to be used to validate data collected from public by the ClimateWatch organisation. The program integrated with the Google Search By Image API to check if the user submitted an image found elsewhere online. Learnt to work with tkinter, numpy and pillow.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="anchor" id="work-experience"></a>
        <div class="jumbotron work-experience">
            <div class="work-experience-showcase">
                <h1 style="display:inline-block">Work Experience</h1><br><br><br><br>
                <div class="col-xl-12">
                    <div class="media mb-1">
                        <div class="media-left waves-light work-exp-pics-pos">
                            <img class="work-exp-img-crop align-self-center" src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Hungry_Jack%27s.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Hungry Jack's - Team Member (June 2017 to present)</h4>
                            <p>Worked in a fast paced retail environment, sharpening my problem solving and teamwork skills. I was able to pick up new techniques rapidly, allowing me to provide faster service and impressing my managers.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="media mb-1">
                        <div class="media-left waves-light work-exp-pics-pos">
                            <img class="work-exp-img-crop" src="./images/lm.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Learnmate - Tutoring VCE Physics (March 2017 to Present)</h4>
                            <p>I have been delivering VCE Physics tuition lessons since March after receiving a study score of 47/50 for VCE Physics. This experience taught me to simplify concepts so students who didn't have the same background as me could understand. Furthermore, it also built my ability to run my own business as an independent contractor and selling myself to clients.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="media mb-1">
                        <div class="media-left waves-light work-exp-pics-pos">
                            <img class="work-exp-img-crop" src="./images/msa.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">MSA Finance Intern - Accounting (Aug 2017 to Oct 2017)</h4>
                            <p>As an accounting intern, I was responsible for proccessing accounts payable, recievable invoices as well as parts of payroll. I developed sharp data entry and communication skills during this work placement, while also getting to know what it was like working for a non-profit organisation.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="media mb-1">
                        <div class="media-left waves-light work-exp-pics-pos">
                            <img class="work-exp-img-crop" src="./images/jb.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">JB Hi-Fi - Software Advisor (Dec 2016 to Jan 2017)</h4>
                            <p>In this Christmas Casual position at JB Hi-Fi, I served thousands of customers in their busiest time of the year. I was responsible for credit card payments, processing of dockets and upselling popular movies and games.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="media mb-1">
                        <div class="media-left waves-light work-exp-pics-pos">
                            <img class="work-exp-img-crop" src="./images/jmss.png">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">John Monash Science School - Teaching Computer Games Programming (January 2016 to April 2016)</h4>
<!--                    Reference to teamwork David-->
                            <p>As a co-curricular teacher at John Monash Science School, together with another collegue (<a href="https://www.linkedin.com/in/david-p-2a5762b6/">David Pham</a>), our responsibilities included planning and delivering 12 lessons in an engaging and informative way to allow students to create their own two dimensional game. This objective was then assessed in the form of a presentation where students were asked to make a simple game and then present it in a set amount of time. The progress of each student was tracked in excel and a final participation grade was awarded based on their presentations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="anchor" id="contact"></a>
        <div class="jumbotron contact">
            <div class="contact-showcase">
                <h1 style="display:inline-block">Contact</h1>
                <br><br>
                <p style="font-family: 'Courier New', Courier, monospace; word-wrap: break-word;">if (programmer.cannotBeReachedBy(smokeSignals)){<br>&emsp;pleaseFillForm();<br>}</p><br>
                <p>Thanks for taking the time to visit my website. If you have any questions or comments, feel free to fill out the form below or contact me directly at:</p>
                <p style="word-wrap: break-word; margin-left:20px">
                    Email: &ensp;<a href="mailto:bhattacharyya.deep@gmail.com">bhattacharyya.deep@gmail.com</a><br>Mobile:&ensp;+61&nbsp;0434&nbsp;1000&nbsp;56
                </p>
                <a href="https://goo.gl/forms/h7YuDAgAAJsCkMzR2" class="btn btn-success btn-send" target="_blank" style="margin-bottom:10px;margin-top:10px">Fill form&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <footer>
            <p class="text-center" style="font-family: 'Flamenco'; font-size:20px"> &copy; Deep Bhattacharyya 2017</p>
        </footer>
    </div>
    <script>new WOW().init();</script>
</body>

</html>
