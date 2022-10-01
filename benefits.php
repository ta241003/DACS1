<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style-sub.css">
    <link rel="stylesheet" href="css/benefits.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Frammework boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- FONT -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Icon Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Owl carousel theme -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">

  <!-- Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <title>Benefits</title>
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
                <li class="navigation__item"><a href="contact.php" class="navigation__link"><span>01</span>About Natours</a></li>
                <li class="navigation__item"><a href="benefits.php" class="navigation__link"><span>02</span>Your benefits</a></li>
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
                <span class="heading-primary--main">Discover</span>
                <span class="heading-primary--sub">the world outside</span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">Our tours</a>
        </div>
    </header>

    <div class="heading u-center-text u-margin-bottom-big">
      <span>Don't Worry!</span>
      <h1>We Are Here For You</h1>
    </div>

    <!-- Services section -->
<section id="services" class="services_wrapper">
    <div class="container">
      <div class="row align-items-center service-item-wrap">
        <div class="col-lg-7 p-lg-0">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="spa" role="tabpanel">
              <img src="img/service-1.jpg">
            </div>
            <div class="tab-pane fade img-service" id="restaurent" role="tabpanel">
              <img class="img-fluid" src="img/service-2.jpg">
            </div>
            <div class="tab-pane fade img-service" id="swimming" role="tabpanel">
              <img class="img-fluid" src="img/service-3.jpg">
            </div>
            <div class="tab-pane fade img-service" id="conference" role="tabpanel">
              <img class="img-fluid" src="img/service-4.jpg">
            </div>
          </div>
        </div>
        <div class="col-lg-5 position-relative">
          <div class="service-menu-area">
            <ul class="nav">
              <li>
                <a data-bs-toggle="tab" style="text-decoration: none" href="#spa" class="active">
                  <span class="service-icon">
                    <img src="img/service-icon1.jpg" alt="">
                  </span>
                  <h5>Explore The World</h5>
                  <p><span>Spa and beauty </span>Relax your muscles and enjoy a
                    one-of-a-kind massage from the DDD.</p>
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" style="text-decoration: none" href="#restaurent">
                  <span class="service-icon">
                    <img src="img/service-icon2.jpg" alt="">
                  </span>
                  <h5>Find Unique Way</h5>
                  <p><span>Spa and beauty </span>Relax your muscles and enjoy a
                    one-of-a-kind massage from the DDD.</p>
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" style="text-decoration: none" href="#swimming">
                  <span class="service-icon">
                    <img src="img/service-icon3.jpg" alt="">
                  </span>
                  <h5>Working In Group</h5>
                  <p><span>Spa and beauty </span>Relax your muscles and enjoy a
                    one-of-a-kind massage from the DDD.</p>
                </a>
              </li>
              <li>
                <a data-bs-toggle="tab" style="text-decoration: none" href="#conference">
                  <span class="service-icon">
                    <img src="img/service-icon4.jpg" alt="">
                  </span>
                  <h5>Be Healthier</h5>
                  <p><span>Spa and beauty </span>Relax your
                    muscles and enjoy a one-of-a-kind massage from the DDD.</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="services-catalog" id="services-catalog">

  <div class="heading">
      <span>Our Services</span>
      <h1>Countless Expericences</h1>
  </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-globe"></i>
            <h3>Worldwide</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fas fa-hiking"></i>
            <h3>Adventures</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-utensils"></i>
            <h3>Food & Drinks</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fas fa-hotel"></i>
            <h3>Affordable Hotels</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fas fa-wallet"></i>
            <h3>Affordable Price</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fas fa-headset"></i>
            <h3>24/7 Support</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

    </div>
</section>


<!-- banner section starts  -->

<section class="container-banner banner">
    <div class="content">
        <span>start your adventures</span>
        <h3>Let's Explore This World</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam officia suscipit odio.</p>
        <div class="u-center-text">
                    <a href="discover_all_tour.php" class="btn btn--green">Discover all tours</a>
        </div>
    </div>
</section>


  <footer class="footer">
      <div class="footer__logo-box">

          <picture class="footer__logo">
              <source srcset="img/logo-green-small-1x.png 1x, img/logo-green-small-2x.png 2x"
                      media="(max-width: 37.5em)">
              <img srcset="img/logo-green-1x.png 1x, img/logo-green-2x.png 2x" alt="Full logo" src="img/logo-green-2x.png" style="max-width:100px; height: 100    px;">
          </picture>


          
      </div>
      <div class="row-footer">
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>