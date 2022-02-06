<?php

/* @var $this \yii\web\View */

/* @var $content string */
/* @var $contacts SiteContacts */

use common\helpers\LanguageHelper;
use frontend\assets\AppAsset;
use common\helpers\LangHelper;
use common\models\SiteContacts;
use common\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;

//\yii\helpers\VarDumper::dump($documents);
//die();
$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'ru';

$link = 'link_' . $lang;
$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Hepta - Multipurpose Business HTML Template</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="fonts/linea-fonts.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="inc/custom-slider/css/preview.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="css/rsmenu-main.css">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody()
?>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
<header id="rs-header" class="rs-header">
    <!-- Toolbar Start -->
    <div class="toolbar-area hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="toolbar-contact">
                        <ul>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>

                            <li><i class="fa fa-phone"></i><a href="tel:+123456789">(+123) 456789</a></li>

                            <li><i class="fa fa-location-arrow"></i><p>Location H-11,R-20/2,USA</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!-- Header Menu Start -->
    <div class="menu-area rs-defult-header menu-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-area">
                        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class="active" href="#">Home<i class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu home-megamenu">
                                        <li class="mega-menu-innner">
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li class="active"><a href="index.html">Home Business</a></li>
                                                    <li><a href="index2.html">Home Business 2</a></li>
                                                    <li><a href="index3.html">Creative Agency</a></li>
                                                    <li><a href="index4.html">Home Corporate</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li><a href="index6.html">Home Medical</a></li>
                                                    <li><a href="index7.html">Home Construction</a></li>
                                                    <li><a href="index8.html">Home Personal</a></li>
                                                    <li><a href="index9.html">Mobile Apps</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li><a href="index10.html">Home SEO</a></li>
                                                    <li><a href="index13.html">Home Minimal</a></li>
                                                    <li><a href="index14.html">Minimal Alt</a></li>
                                                    <li><a href="index15.html">Home Lawyer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul> <!-- //.mega-menu -->
                                </li>
                                <!-- End Home -->
                                <li class="menu-item-has-children"><a href="#">About<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About 1</a></li>
                                        <li><a href="about2.html">About 2</a></li>
                                        <li><a href="about3.html">About 3</a></li>
                                        <li><a href="about-me.html">About Me</a></li>
                                        <li><a href="about-faqs.html">Faqs</a></li>
                                    </ul>
                                </li>
                                <li class="rs-mega-menu menu-item-has-children"><a href="#">Pages<i class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="mega-menu-innner">
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li class="megamenu-title">Projects</li>
                                                    <li><a href="project.html">Project 2 Column</a></li>
                                                    <li><a href="project-2.html">Project 3 Column</a></li>
                                                    <li><a href="project-3.html">Project 4 Column</a></li>
                                                    <li><a href="project-4.html">Project Full Width</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li class="megamenu-title">Team</li>
                                                    <li><a href="team.html">Team One</a></li>
                                                    <li><a href="team-2.html">Team Two</a></li>
                                                    <li><a href="team-3.html">Team Three</a></li>
                                                    <li><a href="team-4.html">Team Four</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li class="megamenu-title">Others</li>
                                                    <li><a href="project-gallery.html">Project Gallery</a></li>
                                                    <li><a href="project-slider.html">Project Slider</a></li>
                                                    <li><a href="project-standard.html">Project Standard</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul> <!-- //.mega-menu -->
                                </li>
                                <li class="menu-item-has-children"><a href="#">Services<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Servics 1</a></li>
                                        <li><a href="services2.html">Servics 2</a></li>
                                        <li><a href="services3.html">Servics 3</a></li>
                                        <li><a href="services-single.html">Servics Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Projects<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="project.html">Project 2 Column</a></li>
                                        <li><a href="project-2.html">Project 3 Column</a></li>
                                        <li><a href="project-3.html">Project 4 Column</a></li>
                                        <li><a href="project-4.html">Project Full Width</a></li>
                                        <li class="menu-item-has-children"><a href="#">Project Single Style<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="project-gallery.html">Project Gallery</a></li>
                                                <li><a href="project-slider.html">Project Slider</a></li>
                                                <li><a href="project-standard.html">Project Standard</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="shop.html">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-single.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog.html">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#">Blog Grid<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-2.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3.html">Blog 3 Column</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Blog Sidebar<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Single Post<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-post-right.html">Post With Right Sidebar</a></li>
                                                <li><a href="blog-post-left.html">Post With Left Sidebar</a></li>
                                                <li><a href="blog-post-full.html">Full Width Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">Contact One</a></li>
                                        <li><a href="contact2.html">Contact Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="appointment-cart hidden-md">
                        <ul class="cart">
                            <li class="search"><i class="fa fa-search"></i></li>
                            <li><a id="nav-expander" class="nav-expander"><i class="fa fa-bars fa-lg white"></i></a></li>
                        </ul>
                        <div class="search-bar">
                            <input type="search" placeholder="Search...">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Menu End -->

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle">
        <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
        <div class="canvas-logo">
            <a href="index.html"><img src="images/white-logo.png" alt="logo"></a>
        </div>
        <ul class="sidebarnav_menu list-unstyled main-menu">
            <!--Home Menu Start-->
            <li><a href="index.html">Home</a></li>
            <!--Home Menu End-->

            <!--About Menu Start-->
            <li><a href="about.html">About</a></li>
            <!--About Menu End-->

            <!--Services Menu Start-->
            <li><a href="services.html">Services</a></li>
            <!--Services Menu End-->

            <!--Blog Menu Star-->
            <li><a href="blog.html">Blog</a></li>
            <!--Blog Menu End-->

            <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="canvas-contact">
            <h5 class="canvas-contact-title">Contact Info</h5>
            <ul class="contact">
                <li><i class="fa fa-globe"></i>Tikkatuli Road, New York, USA</li>
                <li><i class="fa fa-phone"></i>+123445789</li>
                <li><i class="fa fa-envelope"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
                <li><i class="fa fa-clock-o"></i>10:00 AM - 11:30 PM</li>
            </ul>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</header>

<div class="wrap">

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>

</div>

<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-md-30">
                    <div class="about-widget">
                        <a href="index.html">
                            <img src="images/logo-2.png" alt="Footer Logo">
                        </a>
                        <ul class="footer-address">
                            <li><i class="fa fa-map-marker"></i><a href="#">Hepta pro, New Yourk, NY 254</a></li>
                            <li><i class="fa fa-phone"></i><a href="#">123-456-789</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">info@yourdmain.com </a></li>
                            <li><i class="fa fa-clock-o"></i><p class="mb-0">Opening Hours: 8.30 AM – 7.00 PM</p></li>
                        </ul>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-md-30">
                    <h5 class="footer-title">RECENT POSTS</h5>
                    <div class="recent-post-widget">
                        <div class="post-item mb-30">
                            <div class="post-image">
                                <img src="images/blog/1.jpg" alt="post image">
                            </div>
                            <div class="post-desc">
                                <a href="#">Business Needs Customers</a>
                                <span><i class="fa fa-calendar"></i> August 7, 2018 </span>
                            </div>
                        </div>

                        <div class="post-item mb-30">
                            <div class="post-image">
                                <img src="images/blog/2.jpg" alt="post image">
                            </div>
                            <div class="post-desc">
                                <a href="#"> Business Structured </a>
                                <span><i class="fa fa-calendar"></i> August 7, 2018 </span>
                            </div>
                        </div>

                        <div class="post-item">
                            <div class="post-image">
                                <img src="images/blog/3.jpg" alt="post image">
                            </div>
                            <div class="post-desc">
                                <a href="#"> Small Business Trends </a>
                                <span><i class="fa fa-calendar"></i> August 7, 2018 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h5 class="footer-title">Newsletter</h5>
                    <!-- Newsletter Start -->
                    <div class="news-info">
                        <p class="news-note white-color">We create WordPress Theme for more than three years. Our team goal to make beautiful theme without bug and optimize.</p>
                    </div>
                    <form class="news-form footer-form">
                        <input type="text" class="form-input" placeholder="Enter Your Email">
                        <button type="submit" class="form-button">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="ft-bottom-right">
                <div class="footer-bottom-share">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2018 All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
