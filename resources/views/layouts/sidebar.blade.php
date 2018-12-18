<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="w3-sidebar w3-bar-block w3-card" style="width:340px; text-align: right;opacity: 0.9" dir="rtl">

    <div class="text-center" style="margin-top: 15px;">
        <img src="../../images/default.jpg" class="img-circle" alt="Cinque Terre" width="200" height="180">
    </div>


    <button class="w3-button w3-block w3-right-align" id="advertisment" style="font-size: 22px;font-family:'Yakout Linotype Light';margin-top: 40px;">
        قسم الاعلانات <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoAcc" class="w3-hide w3-white w3-card w3-right-align " style="font-size: 22px;font-family:'Yakout Linotype Light'">
        <a href="/addAdverts" class="w3-bar-item w3-button w3-right-align" >إضافة </a>
        <a href="/EditAdverts" class="w3-bar-item w3-button w3-right-align">تعديل </a>
    </div>


    <button class="w3-button w3-block w3-right-align" id="ScholarshipApplication" style="font-size: 22px;font-family:'Yakout Linotype Light'" onclick="scholarshipApplication()">
        قسم طلبات التقديم للمنح الدراسية <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoScholarApplication" class="w3-hide w3-white w3-card w3-right-align " style="font-size: 22px;font-family:'Yakout Linotype Light'">
        <a href="/previewApplicationScholarship" class="w3-bar-item w3-button w3-right-align" >عرض الطلبات</a>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

        $("#advertisment").on("click",function () {
            openlist('demoAcc')
        });

        $("#ScholarshipApplication").on("click",function () {
            openlist('demoScholarApplication')
        });




        function openlist(classname) {
            var x = document.getElementById(classname+"");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-green";
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-green", "");
            }
        }
    })






</script>
