<?php

session_start();
 if (!isset($_SESSION["user_id"])) {
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <!--meta tags-->
    <meta name="http-equiv" content="text/html" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to cinemato. download yor TV shows movied absolutely free and watch offline." />
    <meta name="keywords" content="cinemato cinematofreetvshows cinematofreemovies cinemato free tv shows cinemato free movies" />

    <!--title-->
    <title>HOME</title>

    <!--link-->
    <link rel="stylesheet" href="assete/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assete/css/style.css" />
    <link rel="stylesheet" href="assete/css/fixed.css" />

</head>

<body>
    <!-- navbar -->
    <section>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="assete/img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tvshows.html">TV SHOW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.html">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="latest.html">LATEST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upcoming.html">UPCOMING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">LOG OUT</a>
                    </li>

                </ul>
            </div>

        </nav>
    </section>

    <!-- slider -->
    <section>
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
                <li data-target="#carouselIndicators" data-slide-to="3"></li>
                <li data-target="#carouselIndicators" data-slide-to="4"></li>
                <li data-target="#carouselIndicators" data-slide-to="5"></li>
                <li data-target="#carouselIndicators" data-slide-to="6"></li>
                <li data-target="#carouselIndicators" data-slide-to="7"></li>
                <li data-target="#carouselIndicators" data-slide-to="8"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(assete/slider/s11.jpg);">
                    <div class="carousel-caption text-center">
                        <h1>WELCOME TO CINEMATO</h1>
                        <h3>Download your TV shows/movies <br>absolutely free and watch offline</h3>
                        <a class="btn btn-outline-light btn-lg" href="#tvheading">LET'S GO <i class='fas fa-arrow-right'></i></a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(assete/slider/s2.jpg);"></div>
                <div class="carousel-item" style="background-image: url(assete/slider/s3.jpg);"></div>
                <div class="carousel-item" style="background-image: url(assete/slider/s4.jpg);"></div>
                <div class="carousel-item" style="background-image: url(assete/slider/s5.jpg);"></div>
                <div class="carousel-item" style="background-image: url(assete/slider/s6.jpg);"></div>
                <div class="carousel-item" style="background-image: url(assete/slider/s7.jpg);"></div>
                <div class="carousel-item" style="background-image: url(assete/slider/s8.jpg);"></div>
                <div class="carousel-item" style="background-image: url(assete/slider/s9.jpg);"></div>
            </div>
            <!-- pre & next button -->
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <!-- category tvshow -->
    <section id="tvheading">
        <div class="categary">
            <div class="jumbotron container-fluid">
                <div class="col-12 text-center" >
                    <h3 class="heading">TV SHOW CATEGORIES</h3>
                    <div class="heading-underline"></div>
                </div>

                <div class="row no-padding">

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="tvshows.html#crime" target="_blank">
                                <img src="assete/category/tvshow/crime.jpg">
                            </a>
                            <div class="centered">CRIME</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="tvshows.html#doc" target="_blank">
                                <img src="assete/category/tvshow/documentry.jpg">
                            </a>
                            <div class="centered">DOCUMENTARY</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="tvshows.html#drama" target="_blank">
                                <img src="assete/category/tvshow/drama.jpg">
                            </a>
                            <div class="centered">DRAMA</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="tvshows.html#horror" target="_blank">
                                <img src="assete/category/tvshow/horror.jpg">
                            </a>
                            <div class="centered">HORROR</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="tvshows.html#sci-fi" target="_blank">
                                <img src="assete/category/tvshow/sci-fi.jpg">
                            </a>
                            <div class="centered">SCI-FI</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="tvshows.html" target="_blank">
                                <img src="assete/category/tvshow/more.jpg">
                            </a>
                            <div class="centered">MORE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- movies category -->
    <section>
        <div class="categary">
            <div class="jumbotron container-fluid">
                <div class="col-12 text-center">
                    <h3 class="heading">MOVIE CATEGORIES</h3>
                    <div class="heading-underline"></div>
                </div>

                <div class="row no-padding">

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="movies.html#action" target="_blank">
                                <img src="assete/category/movies/advan.jpg">
                            </a>
                            <div class="centered">ACTION</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="movies.html#bio" target="_blank">
                                <img src="assete/category/movies/bio.jpg">
                            </a>
                            <div class="centered">BIOGRAPHY</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="movies.html#family" target="_blank">
                                <img src="assete/category/movies/drama.jpg">
                            </a>
                            <div class="centered">FAMILY</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="movies.html#kids" target="_blank">
                                <img src="assete/category/movies/kids.jpg">
                            </a>
                            <div class="centered">KIDS</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="movies.html#triller" target="_blank">
                                <img src="assete/category/movies/triler.jpg">
                            </a>
                            <div class="centered">THRILLER</div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="categary">
                            <a href="movies.html" target="_blank">
                                <img src="assete/category/movies/more.jpg">
                            </a>
                            <div class="centered">MORE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest -->
    <section>
        <div class="latest">
            <div class="col-12 text-center">
                <h3 class="heading">LATEST MOVIES AND TV SHOWS</h3>
                <div class="heading-underline"></div>
            </div>


            <div class="row pading">

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/latest/1.jpg">
                        <div class="card-body">
                            <h4>FATHERHOOD</h4>
                            <p>A father brings up his baby girl as a single dad after the unexpected death of his wife who died a day after their daughter's birth</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/latest/2.jpg">
                        <div class="card-body">
                            <h4>THE TOMORROR WAR</h4>
                            <p>A family man is drafted to fight in a future war where the fate of humanity relies on his ability to confront the past</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/latest/3.jpg">
                        <div class="card-body">
                            <h4>LUCIFER:SEASON 5 PART II</h4>
                            <p>Lucifer Morningstar has decided he's had enough of being the dutiful servant in Hell and decides to spend some time on Earth to better understand humanity. He settles in Los Angeles - the City of Angels.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/latest/4.jpg">
                        <div class="card-body">
                            <h4>TRIBES OF EUROPA</h4>
                            <p>2074. In the wake of a mysterious global disaster, war rages between the Tribes that have emerged from the wreckage of Europe. Three siblings from the peaceful Origine tribe are separated and forced to forge their own paths</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a class="btn btn-outline-light card-btn" href="latest.html">MORE</a>
                </div>
            </div>
        </div>

    </section>
    <!-- upcoming -->
    <section>
        <div class="latest">
            <div class="col-12 text-center">
                <h3 class="heading">UPCOMING MOVIES AND TV SHOWS</h3>
                <div class="heading-underline"></div>
            </div>


            <div class="row pading">

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/upcoming/1.jpg">
                        <div class="card-body">
                            <h4>JOHN WICK:CHAPTER IV</h4>
                            <p>John Wick is on the run after killing a member of the international assassins' guild, and with a $14 million price tag on his head, he is the target of hit men and women everywhere.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/upcoming/2.jpg">
                        <div class="card-body">
                            <h4>SWEET GIRL</h4>
                            <p>A devastated husband vows to bring justice to the people responsible for his wife's death while protecting the only family he has left, his daughter</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/upcoming/3.jpg">
                        <div class="card-body">
                            <h4>MONEY HEIST:SEASON 5</h4>
                            <p>An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <img class="card-img-top" src="assete/upcoming/4.jpg">
                        <div class="card-body">
                            <h4>SEE:SEASON 2</h4>
                            <p>Far in a dystopian future, the human race has lost the sense of sight, and society has had to find new ways to interact, build, hunt, and to survive. All of that is challenged when a set of twins is born with sight.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a class="btn btn-outline-light card-btn" href="upcoming.html">MORE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section>
        <footer>
            <div class="row justify-content-center">
                <div class="col-md text-center">
                    <img src="assete/img/logo.png">
                    <p>Cinemato, Free for everyone. Have fun!!!!</p>
                    <strong>FOLLOW US ON</strong><br>
                    <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
                </div>
                <hr class="socket">
                <h5 style="text-align:center; font-size: 15px;">COPYRIGHT &copy;2021 CINEMATO ALL RIGHTS RESERVED<br> DESIGN AND CODE BY TC.</h5>
            </div>
        </footer>

    </section>

    <script src="assete//js/jquery-3.3.1.min.js"></script>
    <script src="assete/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>

</html>
