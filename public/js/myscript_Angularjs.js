


var app = angular.module("myApp", [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

var app2 = angular.module("myApp2", [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

var app3 = angular.module("myApp3", [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


var app4 = angular.module("myApp4", [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

var app5 = angular.module("myApp5", [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});



app.controller("editAdvert",function ($scope, $http) {
    $scope.successMessagebool=false;
    $scope.adv_title="";
    $scope.adv_text="";
    $scope.advimg="";
    $scope.isScholarship=true;
    $scope.adv_id=0;



// get adverts from database and put it in select item
    var url = "/getAdverts";
    $http({
        method:'get',
        url:'/getAdverts'
    }).then(function (response) {
        //console.log(response)
        $scope.adverts = response.data;
    });


// on change select value we want to change data in text field to be related on selected item
    $scope.valuechanged = function (item) {
        $scope.adv_title=item.advertisement_title;
        $scope.adv_text = item.advertisement_Text;
        $scope.advimg = item.advertisement_imagePath;
        $scope.adv_id = item.advertisement_id;
        if(item.isScholarship == "on"){
            $scope.isScholarship = true;
        }else{
            $scope.isScholarship = false;
        }
    };


    // delete advert
    $scope.delete = function(item){
        var url = "/deleteAdvert";
        $http.get(url,{
            params:{advertid:item.advertisement_id}
        }).then(function (response) {
            $scope.successMessage = "تم حذف الإعلان بنجاح";
            $scope.successMessagebool = true;
            reFilldata();
            });
    }


    var reFilldata= function(){
        var url = "/getAdverts";
        $scope.adverts="";
        $scope.adv_title="";
        $scope.adv_text="";
        $scope.advimg="";
        $scope.isScholarship=true;
        $scope.adv_id=0;
        $http({
            method:'get',
            url:'/getAdverts'
        }).then(function (response) {
            //console.log(response)
            $scope.adverts = response.data;
        });
    }
    /*
    // Edit advert
    $scope.edit = function(item){
       // console.log($scope.advimg)
        var url = "/editAdvert";
        var img ;
        if($scope.imageChanged==""){
            img =  $scope.advimg ;
        }else{
            img = $scope.imageChanged;
        }
        $http.post(url,{
            params:{advertid:item.advertisement_id,advertTitle:$scope.adv_title,advertText:$scope.adv_text,advertimage:img,scholarship: $scope.isScholarship}
        }).then(function (response) {
            console.log(response)
            $scope.successMessage = "تم تعديل الإعلان بنجاح";
            $scope.successMessagebool = true;
            });
    }

*/



 // preview image after selected using file input
    $scope.imageUpload = function (event) {
        var files = event.target.files;

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();
            reader.onload = $scope.imageIsLoaded;
            reader.readAsDataURL(file);
        }
    }
    $scope.imageIsLoaded = function (e) {
        $scope.$apply(function () {
            $scope.advimg = e.target.result;
        });
    }

    $scope.imageChanged="";

    $(document).ready(function () {
        $('input[type=file]').change(function () {
            console.dir(this.files[0].name)
            $scope.imageChanged = this.files[0].name;
            $scope.$digest();
        })
    })
});


app2.controller("HomeController" , function ($scope , $http) {
    var url = "/getAdverts";
    $scope.readmoreID=-1;
    $http({
        method:'get',
        url:'/getAdverts'
    }).then(function (response) {
        //console.log(response)
        $scope.adverts = response.data;
    });

    $scope.Readmore = function (e) {
        var id = $(e.target).data('id');
        $scope.readmoreID=id;
        window.location="/advert?id="+id ;
    };

});

app2.filter('cut', function () {
    return function (value, wordwise, max, tail) {
        var word_count = 10;
        var cutterString="";

        var splittedString = value.split(' ');
        if(splittedString.length<word_count)
            return value;
        for(var i=0 ; i < word_count ; i++){
            cutterString+=splittedString[i]+" ";
        }
        cutterString+=" ................... قراءة المزيد ";
        return cutterString ;
    };
});


app3.controller('scholarshipController',function ($scope, $http) {
    $scope.openApplication = function (e) {
        var id = $(e.target).data('id');
        $scope.readmoreID=id;
        window.location="/Scholarship?id="+id ;
    };
});

app.controller('previewScholarship',function ($scope, $http) {

    var url = "/getScholarships";

    $http({
        method:'get',
        url: url
    }).then(function (response) {
        console.log("response",response)
        $scope.scholarship = response.data;
    });

    $scope.PreviewApplication = function (e) {
        var advertismentid = $(e.target).data('advertismentid');
        var scholarshipid = $(e.target).data('scholarshipid');
        window.location="/getApplierInformation?id="+scholarshipid ;
    };

    $scope.printDiv = function(divName) {
        var printContents = document.getElementById('scholarshipcontent').innerHTML;
        var popupWin = window.open('', '_blank', 'width=1000,height=800');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="css/app.css" rel="stylesheet">' +
            '    <link href="css/adverts.css" rel="stylesheet">' +
            '    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">' +
            '    <!-- Scripts -->' +
            '    <script src="js/angular.min.js"></script>' +
            '    <script src="js/app.js"></script></head><body onload="window.print()">' +
            ' <div class="logo_image pull-left"><div><img src="images/logo.jpg" width="50px" height="50px" alt="" style="margin-left: 50px;"></div></div>' +
            '<h1 style="text-align: center">طلب التقديم للمنح</h1>' +
            '' + '<div style="margin-top: 30px;">'+ printContents +'</div>' +
            '<h3 style="text-align: center"> انتهاء الطلب</h3>' +
            ''+ '</body></html>');
        popupWin.document.close();
    }


});



