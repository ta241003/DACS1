<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>About us</title>
</head>
<body>
    <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="index.php" class="navigation__link"><span>01</span>About Natours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Your benefits</a></li>
                    <li class="navigation__item"><a href="discover_all_tour.php" class="navigation__link"><span>03</span>Popular tours</a></li>
                    <li class="navigation__item"><a href="story.php" class="navigation__link"><span>04</span>Stories</a></li>
                    <li class="navigation__item"><a href="discover_all_tour.php" class="navigation__link"><span>05</span>Book now</a></li>
                    </ul>
            </nav>
        </div>
        

        <header class="header">
            <div class="header__logo-box">
                <a href="index.php"><img src="img/logo-white.png" alt="Logo" class="header__logo"></a>
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Natours</span>
                    <span class="heading-primary--sub">by 21GIT</span>
                </h1>   

                <!-- <a href="discover_all_tour.php" class="btn btn--white btn--animated">Our tours</a> -->
            </div>
        </header>


        <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">This website is built with the help of excellent people</h3>
                        <p class="paragraph">
                        </p>
                        <h3 class="heading-tertiary u-margin-bottom-small">And we're going to make this better!</h3>
                        <p class="paragraph">
                        </p>

                        <a href="http://vku.udn.vn/" class="btn-text">Learn more &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img srcset="img/nat-1.png 300w, img/nat-1-large.png 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 1"
                                 class="composition__photo composition__photo--p1"
                                 src="img/nat-1-large.png">

                            <img srcset="img/nat-2.png 300w, img/nat-2-large.png 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 2"
                                 class="composition__photo composition__photo--p2"
                                 src="img/nat-2-large.png">

                            <img srcset="img/nat-3.png 300w, img/nat-3-large.png 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 3"
                                 class="composition__photo composition__photo--p3"
                                 src="img/nat-3-large.png">
                        </div>
                    </div>
                </div>  

         <footer class="footer">
            <div class="footer__logo-box">

                <picture class="footer__logo">
                    <source srcset="img/logo-green-small-1x.png 1x, img/logo-green-small-2x.png 2x"
                            media="(max-width: 37.5em)">
                    <img srcset="img/logo-green-1x.png 1x, img/logo-green-2x.png 2x" alt="Full logo" src="img/logo-green-2x.png" style="max-width:100px; height: 100    px;">
                </picture>


                
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Careers</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer_right">
                        Built by <a href="https://www.facebook.com/cuong.levant/" class="footer__link">Le Nguyen Van Cuong</a> and <a href="https://www.facebook.com/hnb.berniecane" class="footer__link">Ho Nguyen Bang</a>
                         to use as base project 1. Many images and logos are collected from the internet. So please be generous about the copyright issue.
                    </p>
                </div>
            </div>
        </footer>
</body>
</html>