<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.6.0.js"></script>

    <meta charset="UTF-8">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Lato:400,500,600,700&display=swap');

        .borderless td, .borderless th {
            border: none;
        }

        .wrapper {
            display: inline-flex;
            background: #fff;
            height: 100px;

            align-items: center;
            justify-content: space-evenly;
            border-radius: 5px;
            padding: 20px 15px;
            box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
        }

        .wrapper .option {
            background: #fff;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin: 0 10px;
            border-radius: 5px;
            cursor: pointer;
            padding: 0 10px;
            border: 2px solid lightgrey;
            transition: all 0.3s ease;
        }

        .wrapper .option .dot {
            height: 20px;
            width: 20px;
            background: #d9d9d9;
            border-radius: 50%;
            position: relative;
        }

        .wrapper .option .dot::before {
            position: absolute;
            content: "";
            top: 4px;
            left: 4px;
            width: 12px;
            height: 12px;
            background: #0069d9;
            border-radius: 50%;
            opacity: 0;
            transform: scale(1.5);
            transition: all 0.3s ease;
        }

        input[type="radio"] {
            display: none;
        }

        #option-1:checked:checked ~ .option-1,
        #option-2:checked:checked ~ .option-2,
        #option-3:checked:checked ~ .option-3,
        #option-4:checked:checked ~ .option-4,
        #option-5:checked:checked ~ .option-5,
        #option-6:checked:checked ~ .option-6,
        #option-7:checked:checked ~ .option-7,
        #option-8:checked:checked ~ .option-8 {
            border-color: #0069d9;
            background: #0069d9;
        }

        #option-1:checked:checked ~ .option-1 .dot,
        #option-2:checked:checked ~ .option-2 .dot,
        #option-3:checked:checked ~ .option-3 .dot,
        #option-4:checked:checked ~ .option-4 .dot,
        #option-5:checked:checked ~ .option-5 .dot,
        #option-6:checked:checked ~ .option-6 .dot,
        #option-7:checked:checked ~ .option-7 .dot,
        #option-8:checked:checked ~ .option-8 .dot {
            background: #fff;
        }

        #option-1:checked:checked ~ .option-1 .dot::before,
        #option-2:checked:checked ~ .option-2 .dot::before,
        #option-3:checked:checked ~ .option-3 .dot::before,
        #option-4:checked:checked ~ .option-4 .dot::before,
        #option-5:checked:checked ~ .option-5 .dot::before,
        #option-6:checked:checked ~ .option-6 .dot::before,
        #option-7:checked:checked ~ .option-7 .dot::before,
        #option-8:checked:checked ~ .option-8 .dot::before {
            opacity: 1;
            transform: scale(1);
        }

        .wrapper .option span {
            font-size: 20px;
            color: #808080;
        }

        #option-1:checked:checked ~ .option-1 span,
        #option-2:checked:checked ~ .option-2 span,
        #option-3:checked:checked ~ .option-3 span,
        #option-4:checked:checked ~ .option-4 span,
        #option-5:checked:checked ~ .option-5 span,
        #option-6:checked:checked ~ .option-6 span,
        #option-7:checked:checked ~ .option-7 span,
        #option-8:checked:checked ~ .option-8 span {
            color: #fff;
        }


        .maktabat .point .overlay {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: 0;
        }

        .maktabat .point .point-content h3, .maktabat .point .point-content p {
            margin: 0;
            color: #fff;
            text-shadow: 2px 2px #000;
        }

        .maktabat .point .point-content {
            position: relative;
            z-index: 3;
        }

        .maktabat .point {
            width: 100%;
            padding: 40px 10px;
            min-height: 200px;
            max-height: 200px;
            background-color: #000;
            border-radius: 5px;
            background-size: cover;
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
        }

        .select-css {
            display: block;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 700;
            color: #444;
            line-height: 1.3;
            padding: .6em 1.4em .5em .8em;
            width: 100%;
            max-width: 100%; /* useful when width is set to anything other than 100% */
            box-sizing: border-box;
            margin: 0;
            border: 1px solid #aaa;
            box-shadow: 0 1px 0 1px rgba(0, 0, 0, .04);
            border-radius: .5em;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: #fff;
            /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient.
              for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference

            */
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
            linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
            background-repeat: no-repeat, repeat;
            /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
            background-position: right .7em top 50%, 0 0;
            /* icon size, then gradient */
            background-size: .65em auto, 100%;
        }

        /* Hide arrow icon in IE browsers */
        .select-css::-ms-expand {
            display: none;
        }

        /* Hover style */
        .select-css:hover {
            border-color: #888;
        }

        /* Focus style */
        .select-css:focus {
            border-color: #aaa;
            /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
            box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
            box-shadow: 0 0 0 3px -moz-mac-focusring;
            color: #222;
            outline: none;
        }

        /* Set options to normal weight */
        .select-css option {
            font-weight: normal;
        }

        /* Support for rtl text, explicit support for Arabic and Hebrew */
        *[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
            background-position: left .7em top 50%, 0 0;
            padding: .6em .8em .5em 1.4em;
        }

        /* Disabled styles */
        .select-css:disabled, .select-css[aria-disabled=true] {
            color: graytext;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22graytext%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
            linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
        }

        .select-css:disabled:hover, .select-css[aria-disabled=true] {
            border-color: #aaa;
        }


        body {
            margin: 2rem;
        }

        .navtext {
            color: white !important;
            font-weight: bold;
        }

        .nav2 {
            padding-left: 20px;
            padding-right: 20px;
        }


        .my-anchor:hover,
        .my-anchor.active {
            background-color: black !important;
        }

        @media only screen and (max-width: 769px) {
            #joac {
                display: none
            }

            #zain {
                position: relative;
                bottom: 40px;
                margin: auto;
            }
        }

        @media only screen and (max-width: 769px) {
            .hidem {
                display: none;
            }
        }

        @media only screen and (max-width: 996px) {
            .menutoggle {
                display: inline !important;


            }

        }

        .navbar-toggler {
            position: absolute;
            left: 0px;
            top: 5px;

        }

        .navbarr {
            height: 20%;
            min-height: 50px;
        }

        body {
            margin: 0;
        }

        .icon-bar {
            position: fixed;
            z-index: 3;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
            border-bottom-right-radius: 10px !important;
            border-top-right-radius: 10px !important;
            width: 60px !important;

        }

        .twitter {
            background: #55ACEE;
            color: white;
            border-bottom-right-radius: 10px !important;
            border-top-right-radius: 10px !important;
            width: 60px !important;
        }

        .google {
            background: #dd4b39;
            color: white;
            border-bottom-right-radius: 10px !important;
            border-top-right-radius: 10px !important;
            width: 60px !important;
        }

        .linkedin {
            background: #007bb5;
            color: white;
            border-bottom-right-radius: 10px !important;
            border-top-right-radius: 10px !important;
            width: 60px !important;
        }

        .youtube {
            background: #bb0000;
            color: white;
            border-bottom-right-radius: 10px !important;
            border-top-right-radius: 10px !important;
            width: 60px !important;
        }

        .content {
            margin-left: 75px;
            font-size: 30px;
        }

        @media (max-width: 768px) {
            .cm {
                width: 100% !important;
            }
        }

        @media (min-width: 1000px) {
            .cmm {
                padding: 5px !important;
            }
        }

        .cmm {

        }

        .footer {
            width: 100%;
            height: 12%;
            padding: 35px;
            margin: 0 20px;

            align-items: center;
            background-size: 100% 100%;
            justify-content: center;
        }

        h3 {
            color: blue;
            font-family: verdana;
            font-size: 300%;

        }

        .marks {

        }
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgb(0 0 0 );
            transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        }
        .form-check-input {
            float: right !important;
        }
        .form-check-label {
            margin-right: 20px;
        }




    </style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />


</head>

<body>

<nav class=" navbar navbar-expand-lg navbar-light bg-light" style="direction:rtl;background-color: #3875a2 !important">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <ul class="joac">
                <li class="lii">
                    <img id="joac" class="oba hide" src={{asset('Images/joac.PNG')}} alt=""/><img
                        class="oba"
                        src={{asset('Images/8oba.PNG')}}
                            alt=""
                    />
                </li>
            </ul>
        </a>
        <button

            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon" style="float: left"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="top: 30px; position: absolute">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menutoggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-expanded="true" style="display: none;color: white !important;">القائمة</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a class="nav-link navtext" href="#">تسجيل الدخول</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navtext" href="#">مستخدم جديد</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navtext" href="#">المساعدة</a>
                </li>
            </ul>
        </div>
        <div id="zain">
            <img src={{asset('Images/zain.png')}}


            />
        </div>
    </div>
</nav>
<!-- The second Navigation bar-->
<nav class=" hidem navbar navbar-expand-lg navbar-light bg-light" style="background-color: #003255 !important">
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#menu"
        aria-controls="navbarNav1"
        aria-expanded="true"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div
        class="collapse navbar-collapse"
        style="justify-content: center"
        id="navbarNav1"
    >
        <ul class="navbar-nav">
            <li class="nav-item active nav2">
                <a class="nav-link navtext" href="#">دوسيات وأسئلة</a>
            </li>
            <li class="nav-item nav2">
                <a class="nav-link navtext" href="#">الدورات</a>
            </li>
            <li class="nav-item nav2">
                <a class="nav-link navtext" href="#">مدونة</a>
            </li>
            <li class="nav-item nav2">
                <a class="nav-link navtext" href="#">نقاط البيع</a>
            </li>
            <li class="nav-item nav2">
                <a class="nav-link navtext" href="#">شبابيك</a>
            </li>
        </ul>
    </div>
</nav>

<div class="icon-bar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
<div class="container" style="margin: 30px; float: right">
<div class="row">
    <div class="col-md-4" style="direction: rtl">
        <h3> اختر الفرع</h3>

    </div>
    <div class="col-md-4" style="direction: rtl">

        <select
            id="select"
            class="form-select"
            aria-label="Default select example"
        >
            <option value="علمي">علمي</option>
            <option value="ادبي">ادبي</option>
            <option value="صناعي" >صناعي</option>
            <option value="زراعي" >زراعي</option>
            <option value="شريعة" >شريعة</option>
        </select>
    </div>
</div>


</div>

<br>
<br>

<div class="container" style="float: right">
    <div class="row">
        <div class="col-md-6" >
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="col-md-5" style="direction: rtl" id="checkboxes">

        </div>
        <div class="col-md-1"> <label> pick one</label></div>
    </div>
</div>




<script>



    $(document).ready(function () {
        $("#select").change( function () {
            section = $("#select").val();
            alert(section);


            switch (section) {
                case 'علمي':
                    var majorCourses = ['رياضيات اول', 'رياضيات ثاني', 'فيزياء', 'كيمياء', ' احياء', 'علوم ارض'];

                    document.getElementById('checkboxes').innerHTML = checkboxes('علمي');
                    $("#calc").click(function () {
                        document.getElementById('grades').innerHTML = records();
                    });
                    $("#cal").click(function () {

                        document.getElementById('grades').innerHTML = calcmark();
                    });
                    break;


                case 'ادبي':
                    var majorCourses = ['رياضيات اول', 'رياضيات ثاني', 'عربي تخصص', 'جغرافيا', ' حاسوب', ' ثقافة مالية', 'علوم اسلامية', 'تاريخ العرب', 'مهارات اتصال'];
                    document.getElementById('checkboxes').innerHTML = checkboxes('ادبي');
                    $("#calc").click(function () {
                        document.getElementById('grades').innerHTML = records();
                    });
                    $("#cal").click(function () {

                        document.getElementById('grades').innerHTML = calcmark();
                    });


                    break;
                case 'زراعي':
                    break;
                case 'صناعي':
                    break;
                case 'فندقي':
                    break;
                case 'شرعي':
                    break;

            }
        })

    });

</script>


<script src="js/calcg.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
