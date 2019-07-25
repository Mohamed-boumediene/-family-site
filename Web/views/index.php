

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
        <!-- Header Carousel -->
        <header id="myCarousel" style="    margin-top: 53px;" class=" carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../images/01.jpg"  style="    width: 1400px;  height: 398px" alt="..." class="grayscale">
                    <div class="carousel-caption">
                        <div class="cover-carisol">

                            <h4  style="color: #FFFFFF"> Our solutions will fit all IT &amp; Telecom your business may need</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/02.jpg"   style="    width: 1400px; height: 398px" alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4 >
                                <span class="text-center"> Need training?</span><br>
                                We offer professional training and talent solutions that meet the digital age requirements.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/03.jpg"    style="     width: 1400px;height: 398px " alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                Have you a personal business idea or country scale business idea?<br>
                                We can assist to evaluate and partner with you to make it reality.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/04.jpg"    style="      width: 1400px;height: 398px ;"  alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                Be and stay aware of what are the major ICT and Telecom ongoing projects in the country.
                                Sector/Development/major actors/Jobs opportunity etc.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/05.jpg"    style="        width: 1400px;height: 398px"  alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                Get access to the first ICT &amp; Telecom recruiting Platform in Mauritania.
                                Apply to job or find an internship opportunity

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/06.jpg"    style="        width: 1400px;height: 398px;"alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h5>
                                Need a strong and trustful ICT &amp; Telecom market analysis? Or planning to invest in the ICT
                                &amp; Telecom sector? Need a survey regarding the major players’ performance? Or need to evaluate
                                the performance of your business? Or majors market offer &amp; demand analysis?<br>
                                Access to our technical papers and surveys or request a customised one.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/07.jpg"    style="    width: 1400px;height:398px;"alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                First technical support network in Mauritania that gathers Professors, Engineers and
                                Technicians with one goal: helping each other with the daily technical challenge.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>

        <div class="gtco-section border-bottom">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>مدحه العلماء و الشعراء و المغنين</h2>
                        <p>.و كان يلقب بفتى الخمس حيث كان رئيسا لقبائل تشمشه الخمسة</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="box-part text-center">




                            <div class="title">

                                <span> ال العلامة محمدعالي بن عدود المباركي رحمه الله تعلى يمدح آل الشيخ احمدو بن اسليمان:</span>
                            </div>

                            <div class="text">
                                <span>أهلا بوفد كريم طيب سام:::ينمى لكل صبيح الوجه بسام
أقدام اسلافهم قدما ومن ولدوا:::على رقاب البرايا بل على الهام
لايبرم الناس أمرا بعدما نقضوا:::ولاهم،ناقضوه،بعد إبرام
قوم يدبر في آن صغيرهم،:::مالا يدبره الحكام في عام
والناس مارأسوها اهل عافية:::والدار ماسكنوهادار إسلام
ونلتم،من أبيكم كل مكرمة:::من كل سر وتفريج وإنعام
لو عد قبر وقبر كان أكرمهم:::ميتا وابعدهم عن منزل الذام
</span>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="box-part text-center">




                            <div class="title">

                                <span> قال جيرنو حامد بن عثمان بن عبد القادر الفوتي التلري آن يمدح السيد الفاضل الشيخ سيد محمد بن الشيخ أحمدُّ بن سليمان الديماني:</span>
                            </div>

                            <div class="text">
                                <span>
إني رأيتُ الشيخَ سيدِ محمدٍ@حاز المكارمَ طارِفا وتَليدا
شيخٌ ترَى شأوَ المشايخِ قاصِرًا @عَن شأَوِه وترَى العُفاةَ وُفودا
تبًّا لعِيسٍ كالهلالِ سوَى التي@تَفرِي السباسِبَ نحوَه والبِيدا
ورِثَ السيادةَ سيِّدا عن سيِّدٍ@وحوَى المكارمَ يافعا ووَليدا
وترَى لديه ذوي العِناد خواضعًا @وترَى الجبابرَ رُكَّعًا وسُجُودا
وترَى لديه ذوي السماحةِ بُخَّلاً @وترَى المشائخَ والملوكَ عَبيدا
وتخالُه يومَ العطايا زاخرًا @وتخالُهمْ يومَ النَّدَى جُلمُودا
وترى طوالعَ غيرِه نَحْسًا كما@كانت طوالعُه هناك سُعودا
وترَى البليغَ لديه أخرسَ باقلاً@وتخالُ ضِ</span>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="box-part text-center">




                            <div class="title">

                                <span> : على احد ابناء هاجر مادحة الشيخ محمد بن الشيخ أحمدو بن اسليمان رحمه الله تعلى</span>
                            </div>

                            <div class="text">
                                <span>
أيدك ياال حد الى جاك @ يعلبك ويتمونك ملكاك
والاهتمام وجهك واكفاك @ حقو فيك الكفايه
يستهد من كيفن جاك @ واستلا في الهدايه
ايدك ياال حد امعاديه @ تخزيه ومعف اتواسيه
والوقت ال همك ش فيه @ تمحيه اتواسيه اعمايه
والخلق ابعربيه وزاويه @ كامل وسيتو كندايه
ايدك ياال حد الى جاك
يقول فيه ول ابن ول احميده:
أغليظ ولاتحتاج الفيظ @ ياالشيخ ال عنا لازال
كنت أغليظ ومزلت أغليظ @ الشيخ ال كان الا مزال
أنت بعد أخيار ال يسيد @ الاماره منك ماه ابعيد
فيها لاظروك امحاسيد @ يعمل عمرك فيه يطوال
الين اعل الأعمار اتزيد @ ياال بل التكياع اكبال
ماتوده كون افش مفيد @ والشكايه منك محال
اغليظ ولا تحتاج الفيظ
مالاه منك يشاك @ شكايه تكدر تحاك
كون بغلظ امك واباك @ ذيك اخبرها فات ثقال
مامن ظنيت اسلاكه @ وأمير وساك الجلال
كايم بيهامن لحناكه @ وكايم بالبركه والجمال
مجروكين امعاك اجراكه @ وامعاهم مجروك ازكال
اغليظ ولاتحتاج الفيظ
عندك بصرات الامور @ بيهم تبصر من مش دهور
تبارك الله ومنصور @ ياالشيخ ابلا فالنصر امثال
ماش في الشور اعل بشور @ ماتكرد ماه رجل احلال
واثرك مايخط معمور @ بيك ال بخلاكك كتال
امنين ال تلفظ الامور @ للرجاله كامل تذبال
اغليظ ولا تحتاج الفيظ
عندك خيمه مامبنيه @ خيمه تكرم ماهي هي
وبلا في الخطار احمي @ والخطار اتجيها بكمال
اتجي في تعكب في @ واتعش في الليل انوال
في انهار اتغدي رجلي @ واتشتت ياسر من لحمال
في النفقه ماهي رجعي @ وابلا طمعه فيها العيال
رفيعه ماهي دنيه @ الى وكفت كد اكبر لجبال
وافساعه عادت مطويه @ مايرفدها كون ازوزال
اغليظ ولاتحتاح الفيظ
اعنادك مامنو مفاد @ واهجارك مسترخ حظو
واكظو عينين اهلو زاد @ فيه اكبل عينيك يكظو
شفت اعدوك امنين يعادوك @ افمعاداتك ينعظو
واطلعت من ابلد مطلع بوك @ والا كظيت امن امكظو
واصل كالحمد ال ماغلبوك @ القضاة امنين انفظو</span>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="box-part text-center">




                            <div class="title">

                                <span>   قال العلامة محمدفال ول زياد رحمه الله تعلى يمدح جدنا الشيخ سيدي محمد (اباه ديدي)بن الشيخ احمدو بن اسليمان رحمه الله تعلى  :</span>
                            </div>

                            <div class="text">
                               <span class="text-center"> بحر الكامل.</span><br> <span>
طرقتك ليلى لات ساعة مطرق:::وعشقت ليلى لات ساعة معشق
من طوقت جيدي الغداة سفاهة:::طوق الغرام وكان غير مطوق
من مزقت قلبي أي ممزق:::من بعد ماقد كان غير ممزق
في مهمه قفر النواحي مجهل:::حيث المفاوز بالمفاوز تلتقي
بمضلة مرت قليل إنسها:::إلا خفاد ذخول زعرخرق
رجع الصدى والبوم في حجراتها:::يتجاوبان وكل هيق نقنق
ماإن ينجي من غوائل هوله:::إلا رسيم اليعملات السبق
أزمان لاعشق يليق بمنصبي:::بعد إرعواء واشتعال المفرق
وتبيت تمنحني الوصال بطيفها:::من بعد هجران وطول تفرق
بتودد وتلطف وتعطف:::وتألف وتحبب وتملق
فتريك أشنب كالاقاح مفلجا:::متألقا كالبرق أي تالق
فأرقت مرتقب النجوم ومن غدا:::حلف الصبابة لاابالك يأرق
أبكي بدمع صيب متودق:::متحلب متصبب متدفق
دع عنك ليلى والرباب وفرتنى:::ودع البكا إن البكا بالمنطق
واذكر وحيد الدهر ذاالمجد الاثيل المرتقي ابن المرتقي ابن المرتقي
المرتقي قبل البلوغ مراتبا:::ومآثرا ماإن لها من مرتق
السابق الأقران دون تكلف:::بمآثر جلت بها لم يسبق
المتقي ابن المتقي ابن المتقي ابن المتقي ابن المتقي ابن المتقي
ورث المعارف والمفاخر من أبيه ابي المعارف والفخار المطلق
علم الحقيقة والشريعة منهما:::قد نال ماقد نال كل محقق
ماإن رأيت شبيهه في دهره:::فشبيهه في دهره لم يخلق
فرع تفرع من ذؤابة معشر:::غمر الندى بالفيض دون تخلق
قرم تشامخ من ذؤابة معشر:::لسن جهابذة كرام حذق
من معشرشادوا بواذخ معشر:::إن رامها أحد سواهم يسبق
من رام إلحاقا بجرد فهومهم:::في المشكلات بجردهم لم يلحق
جرد تبارى في العويص إذا دجا:::مهما يسابقها سواهم ينفق
قرم إذا نطق الكرام أزاءه:::نطق القبيح بنطقهم لم ينطق
قرم صدوق قوله صدق وإن :::يهب الصدوق القول صدقا يصدق
قرم على اقرانه ولداته:::احنى من الام الرؤوف المشفق
حل العويص وفتح كل مغلق:::بجنانه الماضي المنير المشرق
فك الاسير وكل عان موثق:::بيمينه المغني الفقير المملق
ماإن سمعت كجاهه ومقامه:::في مغرب كلا ولا في مشرق
جلت مناقبه فلا معشارها:::يحصيه نطق المفلق المتشدق
كثرت مناقبه فلامعشارها:::تحصيه في رق ولا مهرق
عظمت مناقبه فلانكرانها:::يسطيعه إلا الشقي ابن الشقي
إن تخلق الأثواب فوق أديمه :::فثيابه في فضله لم تخلق
فسل الإله لي الشفاء فينثني:::فضلا ويصرف مااخاف وأتقي
ويكمل المطلوب لي ويتمه:::ويجيرني من كل حال ضيق
</span>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>






        <div id="gtco-products">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>More Products</h2>
                        <p> if you are curious about getting more information about our products here they are below just enjoy</p>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-carousel-carousel">
                        <div class="item">
                            <a href="#"><img src="../images/01.png" ></a>
                        </div>
                        <div class="item ">
                            <a href="#"><img src="../images/03.png" ></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="../images/02.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="../images/00.png" ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div id="gtco-counter" class="gtco-section">
            <div class="gtco-container">
                <footer id="gtco-footer" role="contentinfo">
                    <div class="gtco-container">
                        <div class="row row-p	b-md">

                            <div class="col-md-8">
                                <div class="gtco-widget">
                                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="gtco-widget">
                                    <h3 style="color:#337ab7;">Get In Touch</h3>
                                    <ul class="gtco-quick-contact">
                                        <li><a href="#"><i class="icon-phone"></i> +222 00 00 00 00</a></li>
                                        <li><a href="#"><i class="icon-mail2"></i> Admin@SPN</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="row copyright">
                            <div class="col-md-12">
                                <p class="pull-left">
                                    <small class="block">&copy; 2018. All Rights Reserved.</small>
                                    <small class="block">Designed by <a href="#" target="_blank">SmartProNetwork</a></small>
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


