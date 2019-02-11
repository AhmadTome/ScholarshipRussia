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


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
       .error{
           color: red;
       }
    </style>
</head>
<body ng-app="myApp4">
<script src="{{ asset('js/myscript_Angularjs.js') }}"></script>

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

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-speed="0.8"></div>

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
                                                    <li><a id="ourinformation" href="#extibalish">من نحن</a></li>
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

    </div>

    <form ng-model="myform" name="myform" method="post" action="applyscholarship/{{$id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row justify-content-center" style="margin-top: -200px">

            <div class="col-md-6">

                <div class="card">

                    <!-- Personal Information -->
                    <header class="card-header">
                        <h4 class="float-right card-title mt-2">  المعلومات الشخصية</h4>
                    </header>

                    <article class="card-body text-right" dir="rtl">
                        <div class="form-row" >

                            @if(session()->has('notif'))
                                <div class="row">
                                    <div class="alert alert-success" dir="rtl">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>{{ session('notif') }}</strong>
                                    </div>
                                </div>
                            @endif


                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <label>الاسم الاول : </label>
                                <input type="text" class="form-control" ng-model="fname" name="fname" placeholder="ادخل الاسم الاول " required/>
                                <span class="error" ng-show="myform.fname.$error.required">الاسم الاول مطلوب *</span>

                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>الاسم الأخير :</label>
                                <input type="text" class="form-control" placeholder=" ادخل الاسم الاخير" ng-model="lname" name="lname" required>
                                <span class="error" ng-show="myform.lname.$error.required">الاسم الأخير مطلوب *</span>

                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->


                        <div class="form-row">
                            <div class="col form-group">
                                <label>رقم الهوية : </label>
                                <input type="number" class="form-control" placeholder="ادخل رقم الهوية" ng-model="IDnumber" name="IDnumber" required>
                                <span class="error" ng-show="myform.IDnumber.$error.required">رقم الهوية مطلوب *</span>

                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>صورة الهوية :</label>
                                <input type="file" class="form-control" ng-model="IDimage" name="IDimage" required>
                                <span class="error" ng-show="myform.IDimage.$error.required">صورة الهوية مطلوبة *</span>

                            </div> <!-- form-group end.// -->
                        </div>


                        <!-- form-group end.// -->
                        <div class="form-group">
                            <div class="col form-group">
                                <label>الجنس :</label>
                            </div>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="male">
                                <span class="form-check-label"> ذكر </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <span class="form-check-label"> انثى</span>
                            </label>
                        </div> <!-- form-group end.// -->


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>العمر :</label>
                                <input type="text" class="form-control" name="age">
                            </div> <!-- form-group end.// -->
                            <div class="form-group col-md-6">
                                <label>الحالة الإجتماعية :</label>
                                <select id="inputState" name="inputState" class="form-control">
                                    <option selected> اختار ...</option>
                                    <option value="married">متزوج</option>
                                    <option value="single">أعزب</option>

                                </select>
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row.// -->

                        <div class="form-row">
                            <div class="col form-group">
                                <label>الجنسية : </label>
                                <input type="text" class="form-control" placeholder="" name="nationlaity">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>الديانة :</label>
                                <input type="text" class="form-control" placeholder=" " name="religion">
                            </div> <!-- form-group end.// -->
                        </div>

                        <div class="form-group">
                            <label>صورة شخصية :</label>
                            <input class="form-control" type="file" name="Personalimage">
                        </div> <!-- form-group end.// -->


                    </article> <!-- card-body end .// -->


                    <!-- Family Information -->
                    <header class="card-header">
                        <h4 class="float-right card-title mt-2">معلومات العائلة</h4>
                    </header>
                    <article class="card-body text-right" dir="rtl">

                        <div class="form-row">
                            <div class="col form-group">
                                <label>اسم الأب : </label>
                                <input type="text" class="form-control" placeholder="" name="fathername">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>اسم الأم :</label>
                                <input type="text" class="form-control" placeholder=" " name="mothername">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->

                        <div class="form-row">
                            <div class="col form-group">
                                <label>مجموع الدخل الشهري : </label>
                                <input type="text" class="form-control" placeholder="" name="incom_monthly">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>عدد أفراد العائلة :</label>
                                <input type="text" class="form-control" placeholder=" " name="family_members">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->


                    </article> <!-- card-body end .// -->


                    <!-- Contact Information -->
                    <header class="card-header">
                        <h4 class="float-right card-title mt-2">معلومات الاتصال</h4>
                    </header>
                    <article class="card-body text-right" dir="rtl">

                        <div class="form-row">
                            <div class="col form-group">
                                <label>الرقم الرئيسي : </label>
                                <input type="text" class="form-control" placeholder="ادخل رقم الهاتف" ng-model="pphone" name="pphone" required>
                                <span class="error" ng-show="myform.pphone.$error.required">رقم الهاتف مطلوب *</span>

                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>الرقم الثانوي :</label>
                                <input type="text" class="form-control" placeholder=" " name="sphone">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->

                        <div class="form-row">
                            <div class="col form-group">
                                <label>العنوان الكامل : </label>
                                <input type="text" class="form-control" placeholder="" name="full_address">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>الايميل :</label>
                                <input type="email" class="form-control" placeholder="example@company.com" name="email" ng-model="email" required>
                                <span class="error" ng-show="myform.email.$error.required">الايميل مطلوب *</span>
                                <span class="error" ng-show="myform.email.$error.email">الايميل غير صحيح *</span>

                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->


                    </article> <!-- card-body end .// -->


                    <!-- Education Information -->
                    <header class="card-header">
                        <h4 class="float-right card-title mt-2">معلومات التعليم</h4>
                    </header>
                    <article class="card-body text-right" dir="rtl">

                        <div class="form-row">
                            <div class="col form-group">
                                <label>اسم المدرسة : </label>
                                <input type="text" class="form-control" placeholder="" name="school_name">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>عنوان المدرسة :</label>
                                <input type="text" class="form-control" placeholder=" " name="school_address">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->

                        <div class="form-row">
                            <div class="col form-group">
                                <label>علامة التوجيهي النهائية : </label>
                                <input type="text" class="form-control" placeholder="" name="school_final_grade">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>كشف علامات التوجيهي :</label>
                                <input type="file" class="form-control" name="certificate">
                                <span class="error" ng-hide="myform.certificate.$error.required">كشف العلامات مطلوب *</span>
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->
                        <div class="form-row">
                            <div class="col form-group">
                                <label>سنة التخرج : </label>
                                <input type="text" class="form-control" placeholder="ادخل سنة التخرج" required ng-model="graduationyear" name="graduationyear">
                                <span class="error" ng-show="myform.graduationyear.$error.required">سنة التخرج مطلوبة *</span>

                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>التخصص ( علمي / ادبي / تجاري ) :</label>
                                <input type="text" class="form-control" placeholder="ادخل تخصصك" name="major" ng-model="major" required>
                                <span class="error" ng-show="myform.major.$error.required">التخصص مطلوب *</span>

                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->

                    </article> <!-- card-body end .// -->


                    <!-- Language Information -->
                    <header class="card-header">
                        <h4 class="float-right card-title mt-2">تفاصيل اللغة</h4>
                    </header>
                    <article class="card-body text-right" dir="rtl">

                        <div class="form-row">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td><input type="text" name="lang_name[]" placeholder="اسم اللغة"
                                                   class="form-control name_list"/></td>
                                        <td><input type="text" name="lang_level[]" placeholder="المستوى"
                                                   class="form-control name_list"/></td>
                                        <td>
                                            <button type="button" name="add" id="add" class="btn btn-success">اضافة
                                                المزيد
                                            </button>
                                        </td>

                                    </tr>
                                </table>

                            </div>
                        </div> <!-- form-row end.// -->


                    </article> <!-- card-body end .// -->


                    <!-- Motivation Letter -->
                    <header class="card-header">
                        <h4 class="float-right card-title mt-2">الرسالة التحفيزية</h4>
                    </header>
                    <article class="card-body text-right" dir="rtl">

                        <div class="form-row">
                            <label for="comment">الرسالة التحفيزية :</label>
                            <textarea class="form-control" rows="15" id="comment" ng-minlength="100" ng-maxlength="500" required name="motivationletter" ng-model="motivationletter"></textarea>
                            <span class="error" ng-show="myform.motivationletter.$error.required">الرسالة التحفيزية مطلوبة *</span>
                            <span class="error" ng-show="myform.motivationletter.$error.minlength ">عدد الأحرف أقل من 100 *</span>
                            <span class="error" ng-show="myform.motivationletter.$error.maxlength ">عدد الأحرف أكثر من 500 *</span>

                        </div> <!-- form-row end.// -->
                        <span>يجب أن لا تقل عن 100 حرف ولا تزيد عن 500 حرف</span>

                    </article> <!-- card-body end .// -->

                    <header class="card-header">
                        <button ng-disabled="myform.motivationletter.$invalid || myform.graduationyear.$invalid || myform.email.$invalid||
                         myform.major.$invalid||  myform.pphone.$invalid ||
                         myform.IDnumber.$invalid|| myform.lname.$invalid|| myform.fname.$invalid "

                                type="submit" class="btn btn-primary">تقديم الطلب</button>

                    </header>

                </div>
            </div>
        </div>

    </form>
    <!-- Call to action -->

    <div class="cta" id="contactus" style="margin-top: 35px;">
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
                                <div id="logo_text" class="logo_text " style="margin: 15px;">Establishing
                                </div>
                                The university was founded in 1998 on Palestinian land under the name “The
                                Palestinian Academy for Security Sciences”. His Excellency, President
                                Mahmoud Abbas,
                                opened it in 2007. It was turned into a university in 2011. It is the first
                                and
                                unique governmental Palestinian university that deals with security,
                                military and
                                police education serving as a vital branch for providing the Palestinian
                                security
                                institutions with qualified officers through seven bachelor programs, the
                                number of
                                majors is increasing. The university aims to qualify young people joining
                                the
                                university (male and female) through eight specialized vocational diplomas
                                in
                                military, security and police sciences. All majors are distributed on the
                                four
                                colleges
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="footer_extra">
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

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                                <div class="footer_social">
                                    <div class="footer_social_title">Palestinian Universities</div>
                                    <ul class="footer_social_list">
                                        <li><a target="_blank" href="https://www.najah.edu/ar/"><i
                                                        class=""></i><img src="../images/najah.png" width="100" height="100"></a></li>
                                        <li><a target="_blank" href="https://www.aaup.edu/ar"><i
                                                        class=""></i><img src="../images/arab.GIF" width="100" height="100"></a></li>

                                    </ul>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="footer_social">
                                    <div class="footer_social_title">Russian Universities</div>
                                    <ul class="footer_social_list">
                                        <li><a target="_blank" href="https://eduinrus.ru/en/"><i
                                                        class=""></i><img src="../images/russia1.png" width="100" height="100"></a></li>
                                        <li><a target="_blank" href="https://recas.ru/en/universities-of-russia/medical-universities/6-kuban-state-medical-university"><i
                                                        class=""></i><img src="../images/russia2.png" width="100" height="100"></a></li>

                                    </ul>
                                </div>

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
        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text"  name="lang_name[]" placeholder="اسم اللغة" class="form-control name_list"/></td><td><input type="text"  name="lang_level[]" placeholder="المستوى" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });


        $("#contactusbtn").click(function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 2000);
        });
    });
</script>

