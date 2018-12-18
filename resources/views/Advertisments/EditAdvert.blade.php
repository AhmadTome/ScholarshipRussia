@extends('layouts.app')

@section('content')

    <div class="container" ng-controller="editAdvert">
        <div class="pull-right" style="margin-right: -50px;margin-top: -22px">
            @include('layouts.sidebar')
        </div>
        <div class="row" dir="rtl">
            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px;">
                        <span class="material-icons">تعديل اعلان&nbsp;&nbsp;&#xe254;</span>
                    </div>
                    <div class="panel-body" style="opacity: 0.95;">
                        <div class="BodyDiv col-lg-12 col-md-12 col-xs-12 col-sm-12" ng-show="successMessagebool">
                                <div class="row">
                                    <div class="alert alert-success" dir="rtl">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong><%successMessage%></strong>
                                    </div>
                                </div>
                        </div>

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

                        <form action="<% 'editAdvert/' + adv_id %>" method="post" name="myform" ng-model="myform" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group" dir="rtl">
                                <label for="adv_select">اختار الاعلان :</label>
                                <div id="adv_select">
                                    <select class="form-control " id="advert_select" name="advert_select" ng-model="selectedAdverts" ng-options="y.advertisement_title for (x,y) in adverts"
                                    ng-change="valuechanged(selectedAdverts)">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="adv_title">عنوان الاعلان :</label>
                                <input class="form-control" type="text" placeholder="ادخل عنوان الاعلان"
                                       ng-model="adv_title" name="adv_title"
                                       id="adv_title"  ng-value='<%adv_title%>' required/>
                                <span class="error"
                                      ng-show="myform.adv_title.$error.required">عنوان الاعلان مطلوب *</span>
                            </div>

                            <div class="form-group">
                                <label for="adv_text">نص الاعلان :</label>
                                <textarea class="form-control" rows="5" placeholder="ادخل نص الاعلان" id="adv_text"
                                          ng-model="adv_text"
                                          name="adv_text" ng-value="<%adv_text%>" required>
                            </textarea>
                                <span class="error" ng-show="myform.adv_text.$error.required">نص الاعلان مطلوب *</span>

                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="adv_image">ارفاق صورة :</label>
                                    </div>

                                    <div class=" text-center">
                                        <img name="advimg" ng-model="advimg" ng-src="<%advimg%>" id="advimg" width="400px" height="200px">
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="adv_image" name="adv_image"  ng-model-instant onchange="angular.element(this).scope().imageUpload(event)">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="adv_scholarship">هل الاعلان يعبر عن منحة دراسية :</label>
                                <label id="adv_scholarship" class="switch">
                                    <input type="checkbox" name="isScholarship" ng-model="isScholarship" ng-checked="<%isScholarship%>">
                                    <span class="slider round"></span>
                                </label>
                            </div>

                            <div class="form-group pull-left col-sm-offset-1">
                                <button ng-click="delete(selectedAdverts)" type="button" class="btn btn-danger">حذف الاعلان
                                </button>
                            </div>

                            <div class="form-group pull-left col-sm-offset-1">
                                <button
                                        ng-disabled="myform.adv_title.$invalid || myform.adv_text.$invalid"
                                        type="submit" class="btn btn-primary">تعديل الاعلان
                                </button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

