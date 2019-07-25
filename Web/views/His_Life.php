

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/home_page_bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/login_style.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/home_page_style.css">


    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->


    <style>

        .carousel-inner > .item > img, .carousel-inner > .item > a > img{
            display: block;
            max-width: 100%;
            height: max-content;
        }

    </style>

    <style>

        .md-checkbox {
            position: relative;
            margin: 16px 0;
            text-align: left;
        }
        .md-checkbox.md-checkbox-inline {
            display: inline-block;
        }
        .md-checkbox label {
            cursor: pointer;
        }
        .md-checkbox label:before, .md-checkbox label:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
        }
        .md-checkbox label:before {
            width: 20px;
            height: 20px;
            background: #fff;
            border: 2px solid rgba(0, 0, 0, 0.54);
            border-radius: 2px;
            cursor: pointer;
            transition: background .3s;
        }
        .md-checkbox input[type="checkbox"] {
            outline: 0;
            margin-right: 10px;
            visibility: hidden;
        }
        .md-checkbox input[type="checkbox"]:checked + label:before {
            background: #337ab7;
            border: none;
        }
        .md-checkbox input[type="checkbox"]:checked + label:after {
            transform: rotate(-45deg);
            top: 5px;
            left: 4px;
            width: 12px;
            height: 6px;
            border: 2px solid #fff;
            border-top-style: none;
            border-right-style: none;
        }
        .md-checkbox input[type="checkbox"]:disabled + label:before {
            border-color: rgba(0, 0, 0, 0.26);
        }
        .md-checkbox input[type="checkbox"]:disabled:checked + label:before {
            background: rgba(0, 0, 0, 0.26);
        }







    </style>

    <style>


        .drop {
            display: block;
            position: absolute;
            background: #CCC;
            border-radius: 100%;
            -webkit-transform: scale(0);
            transform: scale(0);
            pointer-events: none;
            width: 100%;
            height: 100%;
        }
        .drop.animate {
            -webkit-animation: drop 1s ease-out;
            animation: drop 1s ease-out;
        }

        @-webkit-keyframes drop {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                transform: scale(2.5);
            }
        }

        @keyframes drop {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                transform: scale(2.5);
            }
        }
        .materialSelect {
            height: 70px;
            position: relative;
            text-align: center;
            margin-bottom: 10px;
        }
        .materialSelect.error .select:not(.isOpen) {
            border: 1px solid #DD2C00 !important;
        }
        .materialSelect.error .message {
            display: block;
        }
        .materialSelect.inline {
            float: none !important;
            display: inline-block;
            z-index: 0;
            min-width: 100px;
        }
        .materialSelect.inline .select {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
            top: 0;
            left: 0;
            margin: 0;
            transition: all 0.2s !important;
            width: 100%;
        }
        .materialSelect.inline .select.isOpen {
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            top: 50%;
        }
        .materialSelect:not(.inline) {
            width: 100%;
        }
        .materialSelect:not(.inline) .select {
            width: 100%;
            margin-left: 50%;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
        .materialSelect .select {
            position: absolute;
            margin: 0;
            padding: 0;
            top: -1px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 250px;
            text-align: center;
            margin: 0px auto;
            z-index: 9999;
            height: 48px;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            background-color: #fff;
            margin-left: 0;
            -webkit-transform: none;
            transform: none;
        }
        .materialSelect .select:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #bbbbbb;
            content: '';
            display: block;
            height: 0px;
            position: absolute;
            pointer-events: none;
            top: 19px;
            right: 10px;
            width: 0px;
        }
        .materialSelect .select li {
            cursor: pointer;
            font-size: 15px;
            list-style: none;
            line-height: 48px;
            padding: 0 48px 0 24px;
            position: relative;
            overflow: hidden;
        }
        .materialSelect .select li[data-selected] {
            height: 48px;
        }
        .materialSelect .select li:not([data-selected]) {
            height: 0px;
            opacity: 0;
        }
        .materialSelect .select.isOpen {
            background-color: #fafafa;
            border-radius: 2px;
            box-shadow: 1px 2px 3px 1px rgba(0, 0, 0, 0.3);
            padding-bottom: 16px;
            top: -96px;
            height: 250px;
            z-index: 99999;
        }
        .materialSelect .select.isOpen:after {
            display: none;
        }
        .materialSelect .select.isOpen:before {
            border-color: transparent !important;
        }
        .materialSelect .select.isOpen li {
            height: 48px;
            opacity: 1;
        }
        .materialSelect .select.isOpen li[data-selected] {
            color: #337ab7;
        }
        .materialSelect .select.isOpen li:hover {
            background-color: #eeeeee;
        }
        .materialSelect .select.isOpen li:active {
            background-color: #dbdbdb;
        }
        .materialSelect .select:not(.isOpen):hover {
            background-color: #f7f7f7;
            border-top: 1px solid #CDCDCD;
            border-bottom: 1px solid #CDCDCD;
        }
        .materialSelect .select:not(.isOpen):active {
            box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.3);
        }
        .materialSelect .select + .select:before {
            border-left: thin solid #c8c8c8;
            content: '';
            height: 32px;
            left: 0;
            position: absolute;
            top: 8px;
        }
        .materialSelect .message {
            position: absolute;
            top: 50px;
            width: 100%;
            color: #DD2C00;
            display: none;
        }

        @media only screen and (min-width: 1008px) {
            .materialSelect .select {
                transition: background 0.2s ease, border 0.2s ease, top 0.2s ease, height 0.2s ease, box-shadow 0.2s ease;
            }
            .materialSelect .select li {
                transition: height 0.2s linear, opacity 0.2s ease, margin 0.2s linear;
            }
        }

    </style>

    <style>

        .file {
            position: relative;
        }
        .file label {
            padding: 5px 20px;
            color: gray;
            font-weight: bold;
            font-size: .9em;
            transition: all .4s;
            border: 2px solid rgb(246, 246, 246);
            background-color: rgb(246, 246, 246);
            border-radius: 5px;
        }
        .file input {
            position: absolute;
            display: inline-block;
            left: 0;
            top: 0;
            opacity: 0.01;
            cursor: pointer;
        }
        .file input:hover + label,
        .file input:focus + label {
            background-color: rgb(246, 246, 246);
            color: gray;
        }





    </style>

    <style>
        .modal-header-primary {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #428bca;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .gtco-nav{
            background-color: #428bca;
        }
        .cover-carisol{
            background-color: #428bcaa6;
            padding: 3px;
            margin-bottom: 15px;
            border-radius: 8px;


        }
    </style>


    <style>
        .box{
            padding:60px 0px;
        }

        .box-part{
            background:#FFF;
            border-radius:10px;
            padding:60px 10px;
            margin:30px 0px;
        }

        .box-part:hover{
            background:#4183D7;
        }

        .box-part:hover .fa ,
        .box-part:hover .title ,
        .box-part:hover .text ,
        .box-part:hover a{
            color:#FFF;
            -webkit-transition: all 1s ease-out;
            -moz-transition: all 1s ease-out;
            -o-transition: all 1s ease-out;
            transition: all 1s ease-out;
        }

        .text{
            margin:20px 0px;
        }

        .fa{
            color:#4183D7;
        }

        @media (max-width: 767px) {
            .gtco-nav a {
                padding: 5px 10px;
                color: #fff;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

<div class="gtco-loader"></div>

<div id="page">



    <div class="container-fliud">

        <?php include 'home_page_header.php';?>


        <div class="gtco-section border-bottom">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading" style="margin-top: 2em;">
                        <h2>التعريف به</h2>
                        <p>:حياة الشيخ سيدي محمد بن الشيخ أحمدٌ بن اسليمان رحمه الله تعالى</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="box-part text-center">




                            <div class="title">

                                <span></span>
                            </div>

                            <div class="text">
                                <span> هو الشيخ سيدي محمد الملقب اباه ديدي بن الشيخ أحمدٌ بن اسليمان الديمانى رحمه الله تعالى.
ولد  سنة 1980م فى ضواحى المذرذرة ( بودفيه ) و نشأ فى كنف أبويه الشيخ أحمدٌ الذى كان شيخا عالما له محظرة يأتيها طلاب العلم من كل حدب وصوب, و فى كنف أمه اخديج بنت أحمد ولد  أعمرولد المختار و لد الشرقى ولد أعل شنظوره.
فبيته بيت عز وشرف.
و لقد كان الشيخ سيدي محمد بن الشيخ أحمدٌ هو الولد البكر للشيخ أحمدٌ, فاعتنى به والده عناية فائقة, و حرص على تعليمه مختلف العلوم المحظرية التى كانت تدرس آنذاك.
فنهل الشيخ سيدي محمد من علم والده كما نهل ايضا من علم العلامة محمد ولد الخليل القلاوى الذى كان تلميذا لوالده.
و ما إن بلغ الشيخ سيدي محمد سن البلوغ حتى أجيز فى العلوم المحظرية آنذاك التى كانت تدرس فى محظرة والده, تلك المحظرة التى يصفها لنا الشيخ سيديا بن الشيخ أحمدٌ بن أسليمان فى قوله



                                </span><br><br>
                                <div>
                                    فمن لي بفتيان كرام اعزة                       يكونون اصحابي واصحبهم دهرا
يخوضون في كل العلوم بفهمهم            فهذا بذا ادرى وذاك بذا ادرى
فمن كاتب( قفا طويلا) وكاتب              (علوم اصول الدين) يجعلها ذخرا
ومن كاتب( بانت سعاد) وكاتب           (خليلي مرا)او(قفانبك من ذكرى)
ومن كاتب( قف بالديار)وقارئ              (امن ام اوفى )او (سمالك )اذ يقرا
ومن كاتب( بان الخليط )ومنشد          (دعاباسم ليلى) او(تذكرت والذكرى)
ومن منشد يشد وباحسن صوته           (خليلي غضا)او(اذامضرالحمرا)
ومن معرب يرمى فيعرب كلمة                 من البيت اذ يرمى ويسقط في الاخرى
فمن قائل هي( اسم كان )او(اسم لا)        ومن قائل تلك (اختصاص) وذا(اغرا)
ومن كاتب( علم البيان) وشارح               لكاتبه( الانشاء )و(الحد)(والقصرا)
ومن كاتب( علم البديع )وشارح              لكاتبه (التدبيج) و(اللف) و(النشرا)
ومن كاتب( عكس النقيض) مكرر           (لكيفية الكبرى )و(كمية الصغرى)
ومن كاتب( علم الحساب )بخطه             اذا خطه  قالوا له زد هنا صفرا
ومن حامل (عيشا كثيرا)لاهله                   ومن حامل (لحما)ومن حامل (تمرا
                                </div>
                                <br><br>
                                <div >
                                    و قد درس الشيخ سيديا و أبومدين و هما أخواه عليه بعض العلوم المحظرية.
و لما بلغ الشيخ سيدي محمد سن 23 من عمره توفي والده الشيخ أحمدٌ بن اسليمان رحمه الله سنة 1300ه.
وتركه فى مكانه شيخا مربيا عالما, و كان يلقب بفتى الخمس لأنه كان رئيسا لقبائل تشمشه الخمسة وفي ذالك يقول الددو المباركي
                                  <br>  <div class="col-xs-12 col-md-push-3 col-md-6">
                                        <img  class="img-responsive img-rounded" src="../images/t3riv1.jpg">
                                    </div>
                                    <br>



                                </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                                <span>
                                        ولقد بلغ الشيخ سيدي محمد مبلغا عظيما من المكانة العلمية و الاجتماعية, و قد مدحه الشعراء  العلماء:
يقول فيه العلامة محمدو السالم بن الشين رحمه الله:


                                    </span>
                                <br><br>
                                <div class="row">
                                    <div class="col-xs-12 col-md-push-3 col-md-6">
                                        <img  class="img-responsive img-rounded" src="../images/t3eriv2.jpg">

                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-push-3 col-md-6">
                                        <div class="clearfix"></div> <img  class="img-responsive img-rounded" src="../images/t3rvi3.jpg">

                                    </div>
                                </div>
                                <br>
                                <div class="clearfix"></div>
                                <span>
                                    ولقد كان الشيخ سيدي محمد عونا و ناصرا و سندا للمساكين و الضعاف و المحتاجين, فهو أول من بنى خيمة للضيافة ( خيمة الخطار ) يقول فيها المغنى ولد أبنو ولد أحميده
                                </span>
                                <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-push-3 col-md-6">
                                            <div class="clearfix"></div> <img  class="img-responsive img-rounded" src="../images/t3riv4.jpg">

                                        </div>
                                    </div>
                                <div class="clearfix"></div>

                                <div>
                                    <span>
                                                                            و كانت الزوايا تجله وتقدره و تحترمه لمكانته السامية بينهم, و كان يذب عنهم و ينفق على من احتاج منهم.
                                    يقول المغنى:

                                    </span><br>

                                    <span>يا مولان سلم سيدي             @@      كلاع الفصل من الفصال</span><br>
                                    <span>ذاك ال ياسر في ايكيدي            @@        غير اخلعن ماتنكال</span>

                                </div>
                                <div class="clearfix"></div><br>
                                <span>يقول الشاعر فيه</span>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-push-3 col-md-6">
                                        <div class="clearfix"></div> <img  class="img-responsive img-rounded" src="../images/t3riv5.jpg">

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <span>ولقد قام الشيخ سيدي محمد رحمه الله بمسؤوليته أحسن القيام إلى أن توفي 1922م و دفن في تنخلف 70 كلم شمال غرب المذرذرة.
وكان حليما وقورا مهيبا.
</span>
                            </div><!-- end text -->



                        </div>
                    </div>


                </div>



                <!----------------- m2lvatoh ---------------------------->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading" style="margin-top: 2em;">
                        <h2>:مؤلفاته</h2>
                        <p></p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="box-part text-center">




                            <div class="title">

                                <span></span>
                            </div>
                            <div class="text">
                                 تأليف في كلمات القرءان المفردة و المكررة-<br>
                                 رسالة في الحسبة بين فيها ان المسائل الاجتهادية يعمل فيها المجتهد باجتهاده ولا يحمل  غيره على اجتهاده-<br>
                                 رسالة في الفقه تناولت العلاقة بين الحكام و المحكومين-<br>
                                 رسالة في التاريخ و الانساب حققها الاستاذ  الدكتور  سيدي احمد ولد احمد سالم-<br>
                                 رسالة في حكم الامر بالمعروف و النهي عن المنكر-<br>
                                 شرح لباب الهجاء من احمرار المختار ولد بون الجكنى على الألفية-<br>

                            </div><!-- end text -->



                        </div>
                    </div>


                </div>
            </div>
        </div>




<br>

        <div id="gtco-products">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>:المدائح</h2>
                        <p> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-carousel-carousel">
                        <div class="item">
                            <a href="../images/m1.jpg" class="h5co-project-item image-popup"><img src="../images/m1.jpg" ></a>
                        </div>
                        <div class="item ">
                            <a href="../images/m2.jpg" class="h5co-project-item image-popup"><img src="../images/m2.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m3.jpg" class="h5co-project-item image-popup"><img src="../images/m3.jpg" ></a>
                        </div>
                        <div class="item">
                            <a  href="../images/m4.jpg" class="h5co-project-item image-popup"><img src="../images/m4.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m5.jpg" class="h5co-project-item image-popup"><img src="../images/m5.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m6.jpg" class="h5co-project-item image-popup"><img src="../images/m6.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m7.jpg" class="h5co-project-item image-popup"><img src="../images/m7.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m8.jpg" class="h5co-project-item image-popup"><img src="../images/m8.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m9.jpg" class="h5co-project-item image-popup"><img src="../images/m9.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m10.jpg" class="h5co-project-item image-popup"><img src="../images/m10.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m11.jpg" class="h5co-project-item image-popup"><img src="../images/m11.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m12.jpg" class="h5co-project-item image-popup"><img src="../images/m12.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m13.jpg" class="h5co-project-item image-popup"><img src="../images/m13.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m14.jpg" class="h5co-project-item image-popup"><img src="../images/m14.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="../images/m15.jpg" class="h5co-project-item image-popup"><img src="../images/m15.jpg" ></a>
                        </div>



                    </div>
                </div>
            </div>
        </div>


        <div id="gtco-counter" class="gtco-section">
            <div class="gtco-container">
                <footer id="gtco-footer" role="contentinfo">
                    <div class="gtco-container">


                        <div class="row copyright">
                            <div class="col-md-12">
                                <p class="pull-left">
                                    <small class="block">&copy; 2018. All Rights Reserved.</small>
                                    <small class="block">Designed by <a href="#" target="_blank">MOHAMED ABOU MEDEYNE</a></small>
                                </p>
                                <p class="pull-right">
                                <ul class="gtco-social-icons pull-right">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </footer>

            </div>
        </div>



    </div>

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="../js/home_page_jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>
<!-- Bootstrap -->
<script src="../js/home_page_bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="../js/main.js"></script>

<!-- login -->
<script src="../js/login.js"></script>
<!-- become user -->
<script src="../js/become_user.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
</script>

<?php include 'login_model.php';?>









<script>
    $(function(){
        var closeSelectTimeout;

        function hideMaterialList(parent){
            parent.css({
                'overflow': 'hidden'
            }).removeClass('isOpen');
            clearTimeout(closeSelectTimeout);
            closeSelectTimeout = setTimeout(function(){
                parent.parent().css({
                    'z-index': 0
                });
            }, 200);
        }
        $(document.body).on('mousedown', '.materialBtn, .select li', function(event){
            if(parseFloat($(this).css('opacity')) > 0 && $(document).width() >= 1008){
                var maxWidthHeight = Math.max($(this).width(), $(this).height());
                if($(this).find("b.drop").length == 0 || $(this).find("b.drop").css('opacity') != 1) {
                    // .drop opacity is 1 when it's hidden...css animations
                    drop = $('<b class="drop" style="width:'+ maxWidthHeight +'px;height:'+ maxWidthHeight +'px;"></b>').prependTo(this);
                }
                else{
                    $(this).find("b.drop").each(function(){
                        if($(this).css('opacity') == 1){
                            drop = $(this).removeClass("animate");
                            return;
                        }
                    })
                }
                x = event.pageX - drop.width()/2 - $(this).offset().left;
                y = event.pageY - drop.height()/2 - $(this).offset().top;
                drop.css({
                    top: y,
                    left: x
                }).addClass("animate");
            }
        });
        $(document.body).on('dragstart', '.materialBtn, .select li', function(e){
            e.preventDefault();
        })

        var selectTimeout;
        $(document.body).on('click', '.select li', function() {
            var parent = $(this).parent();
            parent.children('li').removeAttr('data-selected');
            $(this).attr('data-selected', 'true');
            clearTimeout(selectTimeout);
            if(parent.hasClass('isOpen')){
                if(parent.parent().hasClass('required')){
                    if(parent.children('[data-selected]').attr('data-value')){
                        parent.parents('.materialSelect').removeClass('error empty');
                    }
                    else{
                        parent.parents('.materialSelect').addClass('error empty');
                    }
                }
                hideMaterialList($('.select'));
            }
            else{
                var pos = Math.max(($('li[data-selected]', parent).index() - 2) * 48, 0);
                parent.addClass('isOpen');
                parent.parent().css('z-index', '999');
                if($(document).width() >= 1008){
                    var i = 1;
                    selectTimeout = setInterval(function(){
                        i++;
                        parent.scrollTo(pos, 50);
                        if(i == 2){
                            parent.css('overflow', 'auto');
                        }
                        if(i >= 4){
                            clearTimeout(selectTimeout);
                        }
                    }, 100);
                }
                else{
                    parent.css('overflow', 'auto').scrollTo(pos, 0);
                }
            }
        });

        $('.materialInput input').on('change input verify', function(){
            if($(this).attr('required') == 'true'){
                if($(this).val().trim().length){
                    $(this).parent().removeClass('error empty');
                }
                else{
                    $(this).parent().addClass('error empty');
                    $(this).val('');
                }
            }
            else{
                if($(this).val().trim().length){
                    $(this).parent().removeClass('empty');
                }
                else{
                    $(this).parent().addClass('empty');
                }
            }
        });

        $(document.body).on('click', function(e) {
            var clicked;
            if($(e.target).hasClass('materialSelect')){
                clicked = $(e.target).find('.select').first();
            }
            else if($(e.target).hasClass('select')){
                clicked = $(e.target);
            }
            else if($(e.target).parent().hasClass('select')){
                clicked = $(e.target).parent();
            }

            if($(e.target).hasClass('materialSelect') || $(e.target).hasClass('select') || $(e.target).parent().hasClass('select')){
                hideMaterialList($('.select').not(clicked));
            }
            else{
                if($('.select').hasClass('isOpen')){
                    hideMaterialList($('.select'));
                }
            }
        });
        hideMaterialList($('.select'));
    })

    var showPopup2 = false;

    function switch_model(){
        $('#login-Modal').modal('hide');
        showPopup2 = true;
        $("#login-Modal").on("hidden.bs.modal",function(){
            if(showPopup2){
                $('#signup-Modal').modal('show');
                showPopup2 = false;
            }

        });

    }
</script>



</body>
</html>


