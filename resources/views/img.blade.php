@extends('layouts.app')

@section('content')

    <div class="container">

    <!--
        <div class="pull-right" style="margin-right: -50px;margin-top: -22px">
            @include('layouts.sidebar')
            </div>
-->
        <div class="row" dir="rtl">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px;">
                        <span class="fa fa-plus-square" style="font-size:36px;">&nbsp;&nbsp;<span style="font-size: 22px;"> اضافة صور</span></span>
                    </div>
                    <div class="panel-body" style="opacity: 0.95;">
                        <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12 " >

                            @if(session()->has('notif'))
                                <div class="row">
                                    <div class="alert alert-success" dir="rtl">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>{{ session('notif') }}</strong>
                                    </div>
                                </div>
                            @endif


                        </div>

                        <form action="addimg" method="post" name="myform" ng-model="myform" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="adv_title">العنوان :</label>
                                <input class="form-control" type="text" placeholder="ادخل عنوان الاعلان" ng-model="adv_title" name="adv_title"
                                       id="adv_title" required/>
                                <span class="error" ng-show="myform.adv_title.$error.required">العنوان مطلوب *</span>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="adv_image">ارفاق صورة :</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="adv_image" name="images[]" multiple>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group pull-left col-sm-offset-1">
                                <button type="submit" ng-disabled="myform.adv_title.$invalid" type="button" class="btn btn-primary">اضافة الاعلان</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
