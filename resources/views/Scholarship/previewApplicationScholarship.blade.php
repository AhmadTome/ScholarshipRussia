@extends('layouts.app')

@section('content')

    <div  ng-controller="previewScholarship" class="container" >
        <!--
        <div class="pull-right" style="margin-right: -50px;margin-top: -22px">
            @include('layouts.sidebar')
        </div>
        -->

        <div class="row" dir="rtl">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px;">
                        <span class="fa fa-plus-square" style="font-size:36px;">&nbsp;&nbsp;<span style="font-size: 22px;"> الطلبات المقدمة للمنح الدراسية</span></span>
                    </div>
                    <div class="panel-body fixed-panel"  style="opacity: 0.95;" >


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

                       <table class="table-responsive">

                           <tr ng-repeat="x in scholarship">
                               <td width="79%"><%x.student_name%> | <%x.advertisement_title%></td>
                               <td width="12%"><button class="btn btn-success" data-advertismentid="<%x.advertisement_id%>" data-scholarshipid="<%x.sholarship_id%>" ng-click='PreviewApplication($event)'>preview</button></td>
                              <!--  <td width="9%" style="margin-right: 5px;"><button class="btn btn-primary" data-advertismentid="<%x.advertisement_id%>" data-scholarshipid="<%x.sholarship_id%>" >print</button></td> -->
                           </tr>

                       </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        table{
            width:100%;
            padding:0;
            border-collapse:collapse;
            text-align:right;
        }
        table table{width:100%}
        td{    padding:5px 0;}
        td td{padding:0;border:1px solid #000}
        .fixed-panel {
            min-height: 10px;
            max-height: 400px;
            overflow-y: scroll;
        }


    </style>
@endsection
