<!DOCTYPE html>
<html lang="en">
<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">

    <!-- Scripts -->
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/myscript_Angularjs.js') }}"></script>

</head>
<body ng-app="myApp2" ng-controller="HomeController">

<div class="super_container">

    <!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>
            <div class="logo menu_logo">
                <a href="/">
                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image">
                            <div><img src="images/logo.png" alt=""></div>
                        </div>
                        <div class="logo_content">
                            <div class="logo_text logo_text_not_ie">The Conference</div>
                            <div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>
                        </div>
                    </div>
                </a>
            </div>
            <ul>
                <li class="menu_item"><a href="index.html">Home</a></li>
                <li class="menu_item"><a href="#">About us</a></li>
                <li class="menu_item"><a href="#">Speakers</a></li>
                <li class="menu_item"><a href="#">Tickets</a></li>
                <li class="menu_item"><a href="news.html">News</a></li>
                <li class="menu_item"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="menu_social">
            <div class="menu_social_title">Follow uf on Social Media</div>
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/scholarships.jpg" data-speed="0.8"></div>

        <!-- Header -->

        <header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                        <a href="/">
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
                                        <div id="logo_text" class="logo_text logo_text_not_ie">المركز الروسي</div>
                                        <div class="logo_sub text-right">مركز الشاعر سيرجيه يسينين</div>
                                        <div class="logo_sub text-right">للغة والثقافة الروسية</div>
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
                                                    <li ><a id="scholarship_link" href="#scholarship_div">الصفحة
                                                            الرئيسية</a></li>
                                                    <li ><a id="scholar" href="PreviewScholarship">المنح الدراسية</a></li>
                                                    <li><a id="ourinformation" href="#extibalish">من نحن</a></li>
                                                    <li><a id="contactusbtn" href="#contactus"> تواصل معنا</a></li>

                                                    <li><a id="login" href="/university">الجامعات</a></li>
                                                    <li><a id="login" href="/previewImg">الصور</a></li>
                                                    <li><a id="login" href="/PreviewActivity">الانشطة والفعاليات</a></li>
                                                    <li><a id="login" href="/login">تسجيل الدخول</a></li>
                                                </ul>

                                            </nav>
                                            <!--
                                                                                        <div class="col-sm-1.5 pull-left">
                                                                                            <select class="form-control" id="activity">
                                                                                                <option selected disabled value="AR">الانشطة</option>
                                                                                                <option value="H">الانشطة لهذا الموقع</option>
                                                                                                <option value="A">الانشطة من الموقع الرسمي</option>
                                                                                            </select>
                                                                                        </div>
                                            -->
                                            <div class="col-sm-1.5 pull-left">
                                                <select class="form-control" id="advert">
                                                    <option selected disabled value="AR">الاخبار</option>
                                                    <option value="H">اخبار الموقع</option>
                                                    <option value="A">اخبار الجامعة</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-1.5 pull-left">
                                                <select class="form-control" id="lang">
                                                    <option selected disabled value="AR">اللغة</option>
                                                    <option value="AR">اللغة العربية</option>
                                                    <option value="HR">اللغة الروسية</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

    </div>





    <div  class="intro" id="scholarship_div">
        <!-- News -->
        <div class="form-group row" dir="rtl" style="margin-top: -50px;">
            <label id="srch" class="control-label col-sm-2 pull-right text-left" style="font-size: 25px;color: black">بحث :</label>
            <div class="col-sm-6 pull-right">
                <input class="form-control" type="text" ng-model="searchText" name="searchText">
            </div>
        </div>
        <div  class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between" dir="rtl">

            <!-- Intro Item -->
            <div  ng-repeat="x in adverts | filter:searchText" class="intro_item pull-right" ng-if="x.isScholarship == 'on'">
                <div class="intro_image"><img  data-id="<%x.advertisement_id%>" ng-click='Readmore($event)' width="100%" height="247"  src="<% x.advertisement_imagePath%>" alt=""></div>
                <div data-id="<%x.advertisement_id%>" ng-click='Readmore($event)' class="intro_body">
                    <div ng-if="x.isScholarship == 'on'" class="pull-left"><img src="images/scholarship.png" width="50px" height="50px"></div>
                    <div class="intro_title text-right" style="margin-right: 15px;"><a data-id="<%x.advertisement_id%>" ng-click='Readmore($event)'><%x.advertisement_title%></a></div>
                    <div  class="intro_subtitle text-right" style="margin-right: 20px;"><%x.advertisement_Text | cut%></div>
                </div>
            </div>


        </div>
    </div>


    <!-- Call to action -->

    <div class="cta" id="contactus">
        <div class="parallax_background parallax-window" data-parallax="scroll"
             style="background-image: url('images/cta_1.jpg')" data-speed="0.8"></div>
        <div class="container" style="margin-top: 220px;">
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
                                <p id="extibalish">
                                <div id="logo_text" class="logo_text " style="margin: 15px;margin-top: 200px">Establishing</div>
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

        $("#contactusbtn,#ourinformation,#scholarship_link").click(function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 2000);
        });

        $("#lang").on("change",function () {
            var lang = $(this).val();
            _t(lang);
        });
        $("#advert").on("change",function () {
            var lang = $(this).val();
            if(lang == "A"){
                window.location='https://alistiqlal.edu.ps/search-ar.html';
            }else{
                window.location='/PreviewAdvert';
            }
        })


        function _t(lang) {

            if(lang == 'HR'){
                $('#scholarship_link').text('дома');
                $('#scholar').text('Стипендии');
                $('#ourinformation').text('Кто мы');
                $('#contactusbtn').text('Свяжитесь с нами');
                $('#login').text('Войти в систему');
                $('#srch').text('поиск');
            }else{
                $('#scholarship_link').text('الصفحة الرئيسية');
                $('#scholar').text('المنح الدراسية');
                $('#ourinformation').text('من نحن');
                $('#contactusbtn').text('تواصل معنا');
                $('#login').text('تسجيل الدخول');
                $('#srch').text('بحث');
            }

        }
    });
</script>
