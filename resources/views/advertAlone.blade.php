<!DOCTYPE html>
<html lang="en">
<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conference project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/news.css">
    <link rel="stylesheet" type="text/css" href="styles/news_responsive.css">


    <!-- Scripts -->
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/myscript_Angularjs.js') }}"></script>

</head>

<body ng-app="myApp3" ng-controller="scholarshipController">

<div class="super_container">
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll"
             style="background-image: url('images/news.jpg')" data-speed="0.8"></div>

        <!-- Header -->

        <header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <a href="#">
                                            <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                                <div class="logo_image">
                                                    <div><img src="images/logo.jpg" alt=""></div>
                                                </div>
                                                <div class="logo_content">
                                                    <div id="logo_text" class="logo_text logo_text_not_ie">Al-Istiqlal
                                                        University
                                                    </div>
                                                    <div class="logo_sub">Hisham's Palace Str Jericho</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="header_social ml-auto">
                                        <div id="logo_text" class="logo_text logo_text_not_ie">جامعة الاستقلال</div>
                                        <div class="logo_sub text-right">قصر هشام شارع أريحا</div>
                                    </div>
                                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header_nav" id="header_nav_pin" dir="rtl">
                    <div class="header_nav_inner">
                        <div class="header_nav_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                            <nav class="main_nav">
                                                <ul>
                                                    <li class="active"><a href="/">الصفحة الرئيسية</a></li>
                                                    <li><a href="PreviewScholarship">المنح الدراسية</a></li>
                                                    <li><a id="ourinformation" href="#extibalish">معلومات عنا</a></li>
                                                    <li><a id="contactusbtn" href="#contactus">تواصل معنا</a></li>

                                                    <li><a href="/login">تسجيل الدخول</a></li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="current_page">News</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>News</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news centered" dir="rtl">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center">

                    <div class="news_items">


                        <!-- News Item -->
                        <div class="news_item">
                            <div class="date_container" dir="ltr">
                                <a href="#">
										<span class="date_content d-flex flex-column align-items-center justify-content-center">
											<div class="date_day">{{$advertInfo[0]->created_at}}</div>
										</span>
                                </a>
                            </div>


                            <div class="news_image_container">
                                <div class="news_image"><img width="100%" height="400px"
                                                             src="{{$advertInfo[0]->advertisement_imagePath}} " alt="">
                                </div>
                            </div>


                            <div ng-if="x.advertisement_imagePath != '/images/Noimage.png' "
                                 class="news_body text-right">
                                <div class="news_title"><a href="#">{{$advertInfo[0]->advertisement_title}}</a></div>
                                <div class="news_info text-left">
                                    <ul>
                                        <!-- News Author -->
                                        <li>
                                            <div class="news_author_image"><img src="images/news_author_1.jpg" alt="">
                                            </div>
                                            <span class="author">by <a href="/home">Admin</a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news_text">
                                    <p style="margin-top: 60px">{{$advertInfo[0]->advertisement_Text}}</p>
                                </div>
                            </div>

                            @if($advertInfo[0]->isScholarship == "on")
                                <div class="pull-left" style="margin-left: 15px;">
                                    <button class="btn btn-success" data-id="{{$advertInfo[0]->advertisement_id}}" ng-click='openApplication($event)'>Apply for the scholarship</button>
                                </div>
                            @endif
                        </div>


                    </div>

                </div>


            </div>
        </div>
    </div>


    <div class="cta" id="contactus">
        <div class="parallax_background parallax-window" data-parallax="scroll"
             style="background-image: url('images/cta_1.jpg')" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content text-center">
                        <div class="cta_title">Al-Istiqlal University</div>
                        <div class="button cta_button"><a href="/">Contact us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_content">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-12 footer_col">
                        <div class="footer_about">
                            <div>

                            </div>
                            <div class="footer_about_text">
                                <p>
                                <div id="logo_text" class="logo_text " style="margin: 15px;">Establishing</div>
                                The university was founded in 1998 on Palestinian land under the name “The
                                Palestinian Academy for Security Sciences”. His Excellency, President Mahmoud Abbas,
                                opened it in 2007. It was turned into a university in 2011. It is the first and
                                unique governmental Palestinian university that deals with security, military and
                                police education serving as a vital branch for providing the Palestinian security
                                institutions with qualified officers through seven bachelor programs, the number of
                                majors is increasing. The university aims to qualify young people joining the
                                university (male and female) through eight specialized vocational diplomas in
                                military, security and police sciences. All majors are distributed on the four
                                colleges
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="footer_extra">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                            <div class="footer_social">
                                <div class="footer_social_title">Follow us on Social Media</div>
                                <ul class="footer_social_list">
                                    <li><a target="_blank" href="https://www.facebook.com/AlistiqlalUniversity/"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/alistiqlaluniversity/about/"><i
                                                    class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news.js"></script>
</body>
</html>
<script>
    $(document).ready(function () {

        $("#contactusbtn").click(function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 2000);
        });
    });
</script>
