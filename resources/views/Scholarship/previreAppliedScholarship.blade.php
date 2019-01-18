@extends('layouts.app')

@section('content')

    <div ng-controller="previewScholarship" class="container">

        <!--
        <div class="pull-right" style="margin-right: -50px;margin-top: -22px">
            @include('layouts.sidebar')
        </div>
        -->
        <div class="row" dir="rtl" id="scholarshipcontent">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px;">
                        <span class="" style="font-size:36px;">&nbsp;&nbsp;<span
                                    style="font-size: 22px;"
                                    class="pull-right"> هذا الطلب مقدم من الطالب {{$inforamation[0]->student_name}}</span></span>
                    </div>
                    <div class="panel-body fixed-panel" style="opacity: 0.95;">


                        <div class="row justify-content-center" style="">

                            <div class="col-md-12">

                                <div class="card">
                                    <!-- Personal Information -->
                                    <header class="card-header">
                                        <h2 class="float-right card-title mt-2" style="text-align: right;"> المعلومات
                                            الشخصية</h2>
                                    </header>

                                    <article class="card-body text-right" dir="rtl">
                                        <div class="form-row">

                                            @if(session()->has('notif'))
                                                <div class="row">
                                                    <div class="alert alert-success" dir="rtl">
                                                        <button type="button" class="close" data-dismiss="alert"
                                                                aria-hidden="true">&times;
                                                        </button>
                                                        <strong>{{ session('notif') }}</strong>
                                                    </div>
                                                </div>
                                            @endif


                                        </div>

                                        <div class="form-row">
                                            <div class="col form-group">
                                                <label>الاسم : </label>
                                                <input type="text" class="form-control" name="fname"
                                                       value="{{$inforamation[0]->student_name}}"/>


                                            </div> <!-- form-group end.// -->

                                        </div> <!-- form-row end.// -->


                                        <div class="form-row">
                                            <div class="col form-group">
                                                <label>رقم الهوية : </label>
                                                <input type="number" class="form-control" placeholder="ادخل رقم الهوية"
                                                       value="{{$inforamation[0]->student_Identication_number}}"
                                                       name="IDnumber" required>

                                            </div> <!-- form-group end.// -->
                                            <div class="col form-group">
                                                <label>صورة الهوية :</label>
                                                <img width="100%" height="400px"
                                                     src="{{$inforamation[0]->student_Identication_inage_path}}">

                                            </div> <!-- form-group end.// -->
                                        </div>


                                    @if($inforamation[0]->gender == "male")
                                        <!-- form-group end.// -->
                                            <div class="form-group">
                                                <div class="col form-group">
                                                    <label>الجنس :</label>
                                                </div>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                           value="male" checked>
                                                    <span class="form-check-label"> ذكر </span>
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                           value="female">
                                                    <span class="form-check-label"> انثى</span>
                                                </label>
                                            </div> <!-- form-group end.// -->
                                        @else

                                            <div class="form-group">
                                                <div class="col form-group">
                                                    <label>الجنس :</label>
                                                </div>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                           value="male">
                                                    <span class="form-check-label"> ذكر </span>
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                           value="female" checked>
                                                    <span class="form-check-label"> انثى</span>
                                                </label>
                                            </div> <!-- form-group end.// -->

                                        @endif



                                        @if($inforamation[0]->student_marital_status == "single")
                                            <div class="form-row" style="display: block; page-break-before: always;">
                                                <div class="form-group col">
                                                    <label>العمر :</label>
                                                    <input type="text" class="form-control" name="age"
                                                           value="{{$inforamation[0]->student_age}}">
                                                </div> <!-- form-group end.// -->
                                                <div class="form-group col">
                                                    <label>الحالة الإجتماعية :</label>
                                                    <select id="inputState" name="inputState" class="form-control">
                                                        <option selected> اختار ...</option>
                                                        <option value="married">متزوج</option>
                                                        <option value="single" selected>أعزب</option>

                                                    </select>
                                                </div> <!-- form-group end.// -->
                                            </div> <!-- form-row.// -->
                                        @else
                                            <div class="form-row">
                                                <div class="form-group col"
                                                     style="display: block; page-break-before: always;">
                                                    <label>العمر :</label>
                                                    <input type="text" class="form-control" name="age"
                                                           value="{{$inforamation[0]->student_age}}">
                                                </div> <!-- form-group end.// -->
                                                <div class="form-group col">
                                                    <label>الحالة الإجتماعية :</label>
                                                    <select id="inputState" name="inputState" class="form-control">
                                                        <option selected> اختار ...</option>
                                                        <option value="married" selected>متزوج</option>
                                                        <option value="single">أعزب</option>

                                                    </select>
                                                </div> <!-- form-group end.// -->
                                            </div> <!-- form-row.// -->
                                        @endif


                                        <div class="form-row">
                                            <div class="col form-group">
                                                <label>الجنسية : </label>
                                                <input type="text" class="form-control" placeholder=""
                                                       name="nationlaity"
                                                       value="{{$inforamation[0]->student_nationality}}">
                                            </div> <!-- form-group end.// -->
                                            <div class="col form-group">
                                                <label>الديانة :</label>
                                                <input type="text" class="form-control" placeholder=" " name="religion"
                                                       value="{{$inforamation[0]->student_religion}}">
                                            </div> <!-- form-group end.// -->
                                        </div>

                                        <div class="form-group">
                                            <label>صورة شخصية :</label>
                                            <img width="100%" height="400px"
                                                 src="{{$inforamation[0]->student_image_path}}">
                                        </div> <!-- form-group end.// -->


                                    </article> <!-- card-body end .// -->


                                    <div id="motivationdiv" style="display: block; page-break-before: always;">
                                        <!-- Family Information -->
                                        <header class="card-header">
                                            <h2 class="float-right card-title mt-2" style="text-align: right;">معلومات
                                                العائلة</h2>
                                        </header>
                                        <article class="card-body text-right" dir="rtl">

                                            <div class="form-row">
                                                <div class="col form-group">
                                                    <label>اسم الأب : </label>
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="fathername"
                                                           value="{{$inforamation[0]->father_name}}">
                                                </div> <!-- form-group end.// -->
                                                <div class="col form-group">
                                                    <label>اسم الأم :</label>
                                                    <input type="text" class="form-control" placeholder=" "
                                                           name="mothername" value="{{$inforamation[0]->mother_name}}">
                                                </div> <!-- form-group end.// -->
                                            </div> <!-- form-row end.// -->

                                            <div class="form-row">
                                                <div class="col form-group">
                                                    <label>مجموع الدخل الشهري : </label>
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="incom_monthly"
                                                           value="{{$inforamation[0]->month_incom}}">
                                                </div> <!-- form-group end.// -->
                                                <div class="col form-group">
                                                    <label>عدد أفراد العائلة :</label>
                                                    <input type="text" class="form-control" placeholder=" "
                                                           name="family_members"
                                                           value="{{$inforamation[0]->family_members}}">
                                                </div> <!-- form-group end.// -->
                                            </div> <!-- form-row end.// -->


                                        </article> <!-- card-body end .// -->
                                    </div>

                                    <!-- Contact Information -->
                                    <header class="card-header">
                                        <h2 class="float-right card-title mt-2" style="text-align: right;">معلومات
                                            الاتصال</h2>
                                    </header>
                                    <article class="card-body text-right" dir="rtl">

                                        <div class="form-row">
                                            <div class="col form-group">
                                                <label>الرقم الرئيسي : </label>
                                                <input type="text" class="form-control"
                                                       placeholder="ادخل رقم الهاتف"
                                                       value="{{$inforamation[0]->phone_number}}" name="pphone"
                                                       required>
                                                <span class="error" ng-show="myform.pphone.$error.required">رقم الهاتف مطلوب *</span>

                                            </div> <!-- form-group end.// -->
                                            <div class="col form-group">
                                                <label>الرقم الثانوي :</label>
                                                <input type="text" class="form-control" placeholder=" "
                                                       name="sphone"
                                                       value="{{$inforamation[0]->second_phone_number}}">
                                            </div> <!-- form-group end.// -->
                                        </div> <!-- form-row end.// -->

                                        <div class="form-row">
                                            <div class="col form-group">
                                                <label>العنوان الكامل : </label>
                                                <input type="text" class="form-control" placeholder=""
                                                       name="full_address" value="{{$inforamation[0]->address}}">
                                            </div> <!-- form-group end.// -->
                                            <div class="col form-group">
                                                <label>الايميل :</label>
                                                <input type="email" class="form-control"
                                                       placeholder="example@company.com" name="email"
                                                       value="{{$inforamation[0]->email_address}}" required>


                                            </div> <!-- form-group end.// -->
                                        </div> <!-- form-row end.// -->


                                    </article> <!-- card-body end .// -->


                                    <div id="motivationdiv" style="display: block; page-break-before: always;">
                                        <!-- Education Information -->
                                        <header class="card-header">
                                            <h2 class="float-right card-title mt-2" style="text-align: right;">معلومات
                                                التعليم</h2>
                                        </header>
                                        <article class="card-body text-right" dir="rtl">

                                            <div class="form-row">
                                                <div class="col form-group">
                                                    <label>اسم المدرسة : </label>
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="school_name" value="{{$inforamation[0]->school_name}}">
                                                </div> <!-- form-group end.// -->
                                                <div class="col form-group">
                                                    <label>عنوان المدرسة :</label>
                                                    <input type="text" class="form-control" placeholder=" "
                                                           name="school_address"
                                                           value="{{$inforamation[0]->school_address}}">
                                                </div> <!-- form-group end.// -->
                                            </div> <!-- form-row end.// -->

                                            <div class="form-row">
                                                <div class="col form-group">
                                                    <label>علامة التوجيهي النهائية : </label>
                                                    <input type="text" class="form-control" placeholder=""
                                                           name="school_final_grade"
                                                           value="{{$inforamation[0]->school_final_grade}}">
                                                </div> <!-- form-group end.// -->
                                                <div class="col form-group">
                                                    <label>كشف علامات التوجيهي :</label>
                                                    <img width="100%" height="400px"
                                                         src="{{$inforamation[0]->High_School_certificate_path}}">
                                                </div> <!-- form-group end.// -->
                                            </div> <!-- form-row end.// -->
                                            <div class="form-row">
                                                <div class="col form-group">
                                                    <label>سنة التخرج : </label>
                                                    <input type="text" class="form-control"
                                                           placeholder="ادخل سنة التخرج"
                                                           required value="{{$inforamation[0]->school_graduated_date}}"
                                                           name="graduationyear">

                                                </div> <!-- form-group end.// -->
                                                <div class="col form-group">
                                                    <label>التخصص ( علمي / ادبي / تجاري ) :</label>
                                                    <input type="text" class="form-control" placeholder="ادخل تخصصك"
                                                           name="major" value="{{$inforamation[0]->school_major}}"
                                                           required>

                                                </div> <!-- form-group end.// -->
                                            </div> <!-- form-row end.// -->

                                        </article> <!-- card-body end .// -->
                                    </div>

                                    <div id="motivationdiv" style="display: block; page-break-before: always;">
                                        <!-- Language Information -->
                                        <header class="card-header">
                                            <h2 class="float-right card-title mt-2" style="text-align: right;">تفاصيل
                                                اللغة</h2>
                                        </header>
                                        <article class="card-body text-right" dir="rtl">

                                            <div class="form-row">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dynamic_field">
                                                        @for($i = 0; $i < count(explode('&',$inforamation[0]->language_name))-1; $i++)
                                                            <tr>
                                                                <td><input type="text" name="lang_name[]"
                                                                           placeholder="اسم اللغة"
                                                                           class="form-control name_list"
                                                                           value="{{explode('-',explode('&',$inforamation[0]->language_name)[$i])[0]}}"/>
                                                                </td>
                                                                <td><input type="text" name="lang_level[]"
                                                                           placeholder="المستوى"
                                                                           class="form-control name_list"
                                                                           value="{{explode('-',explode('&',$inforamation[0]->language_name)[$i])[1]}}"/>
                                                                </td>

                                                            </tr>
                                                        @endfor
                                                    </table>

                                                </div>
                                            </div> <!-- form-row end.// -->


                                        </article> <!-- card-body end .// -->
                                    </div>


                                        <!-- Motivation Letter -->
                                        <header class="card-header">
                                            <h2 class="float-right card-title mt-2" style="text-align: right;">الرسالة
                                                التحفيزية</h2>
                                        </header>
                                        <article class="card-body text-right" dir="rtl">

                                            <div class="form-row">
                                                <label for="comment">الرسالة التحفيزية :</label>
                                                <textarea class="form-control" rows="15" id="comment" ng-minlength="100"
                                                          ng-maxlength="500" required
                                                          name="motivationletter">{{$inforamation[0]->Motivation_Message}}</textarea>


                                            </div> <!-- form-row end.// -->
                                            <span class="hidden-print">يجب أن لا تقل عن 100 حرف ولا تزيد عن 500 حرف</span>

                                        </article> <!-- card-body end .// -->
                                    </div>
                                    <button class="btn btn-primary pull-left hidden-print" ng-click="printDiv()">Print</button>



                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        table {
            width: 100%;
            padding: 0;
            border-collapse: collapse;
            text-align: right;
        }

        table table {
            width: 100%
        }

        td {
            padding: 5px 0;
        }

        td td {
            padding: 0;
            border: 1px solid #000
        }

        .fixed-panel {
            min-height: 10px;
            max-height: 400px;
            overflow-y: scroll;
        }
        @media print {
            .hidden-print {
                display: none !important;
            }
        }

    </style>
    <script>
        $(document).ready(function () {
            $("#print").on("click", function () {
                $("#scholarshipcontent").printElement(
                    {
                        iframeElementOptions:
                            {
                                styleToAdd: 'position:absolute;width:0px;height:0px;bottom:0px;',
                                classNameToAdd: 'thisWillBeTheClassUsedAsWell'
                            }
                    });
            })
        })
    </script>
@endsection
