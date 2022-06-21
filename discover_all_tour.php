

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>Discover all tours</title>
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
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Popular tours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
                    <li class="navigation__item"><a href="booking.php" class="navigation__link"><span>05</span>Book now</a></li>
                    </ul>
            </nav>
        </div>

        <header class="header">
            <div class="header__logo-box">
                <a href="index.php"><img src="img/logo-white.png" alt="Logo" class="header__logo"></a>
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Discover</span>
                    <span class="heading-primary--sub">the world outside</span>
                </h1>
            </div>
        </header>

        <main>
            

            <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        ALL TOURS
                    </h2>
                </div>
            </section>
            <div class="row">
                <?php 
                                        
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "dacs1";
                                        // cont dât
                                        $conn = new mysqli($servername, $username, $password, $database);
                                        // query
                                        $sql = "SELECT * FROM discover_tour";
                                        $result = $conn->query($sql);

                                        //ktra co data ko
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                // ktra diff thuoc loai nao de chinh mau back 
                                                    if ($row["difficulty"] == "easy") 
                                                        $color = 'background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(255, 185, 0, 0.85)), to(rgba(255, 119, 48, 0.85)));
                                                        /* background-image: linear-gradient(to right bottom, rgba(255, 185, 0, 0.85), rgba(255, 119, 48, 0.85));';
                                                    if ($row["difficulty"] == "medium")
                                                        $color = 'background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(126, 213, 111, 0.85)), to(rgba(40, 180, 133, 0.85)));
                                                        /* background-image: linear-gradient(to right bottom, rgba(126, 213, 111, 0.85), rgba(40, 180, 133, 0.85));';
                                                    if ($row["difficulty"] == "hard") 
                                                        $color = 'background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(41, 152, 255, 0.85)), to(rgba(86, 67, 250, 0.85)));
                                                        /* background-image: linear-gradient(to right bottom, rgba(41, 152, 255, 0.85), rgba(86, 67, 250, 0.85));';
                                                    // print data
                                                        echo '
                                                        <div class="col-1-of-3" style="margin: 15px; " >
                                                            <div class="card">
                                                                <div class="card__side card__side--front">
                                                                    <div class="card__picture " 
                                                                        style="
                                                                        background-image: -webkit-gradient(linear, left top, right bottom), url('.$row["img"].');
                                                                        background-image: linear-gradient(to right bottom), url('.$row["img"].');">
                                                                        &nbsp;
                                                                    </div>
                                                                    <h4 class="card__heading">
                                                                        <span class="card__heading-span"; style= "'.$color.'"> 
                                                                            '.$row["name"].'
                                                                        </span>
                                                                    </h4>
                                                                    <div class="card__details">
                                                                        <ul>
                                                                            <li>'.$row["time"].' day tours</li>
                                                                            <li>Up to '.$row["peonum"].' people</li>
                                                                            <li>'.$row["tournum"].' tour guides</li>
                                                                            <li>'.$row["sleep"].'</li>
                                                                            <li>Difficulty: '.$row["difficulty"].'</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="card__side card__side--back"; style="'.$color.'">
                                                                    <div class="card__cta">
                                                                        <div class="card__price-box">
                                                                            <p class="card__price-only">Only</p>
                                                                            <p class="card__price-value">$'.$row["price"].'</p>
                                                                        </div>
                                                                        <a href="#popup" class="btn btn--white">Book now!</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    ';                        
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        // dong con
                                    $conn->close();
                ?>    
            </div>

            <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="#" class="form">
                                <div class="u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                        Start booking now
                                    </h2>
                                </div>

                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Full name" id="name" required>
                                    <label for="name" class="form__label">Full name</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email address" id="email" required>
                                    <label for="email" class="form__label">Email address</label>
                                </div>

                                <div class="form__group u-margin-bottom-medium">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="size">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Small tour group
                                        </label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="large" name="size">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Large tour group
                                        </label>
                                    </div>
                                </div>

                                <div class="form__group">
                                    <button class="btn btn--green">Next step &rarr;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

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

        <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/check.png" alt="Tour photo" class="popup__img">

                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
                    <p class="popup__text">
                        Your are going to our tour. Then there will be a staff member to call and discuss with you more about the necessary things to be prepared for the tour. 
                    </p>
                    <a href="booking.php" class="btn btn--green">Book now</a>
                </div>
            </div>
        </div>
    </body>
</html>