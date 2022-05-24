<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">
    <title>Agricultural crops</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('home/assets/images/logos/crops1.png')}}" >
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('home/assets/images/logos/crops1.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('home/assets/images/logos/crops1.png')}}">
    <!-- jQuery -->
    <!-- Bootstrap4 files-->
    <link href="{{asset('home/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('home/assets/css/ui.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('home/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
    {{--<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>--}}
    <link href="{{asset('home/assets/css/OverlayScrollbars.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('css/steppercss.css')}}" type="text/css" rel="stylesheet"/>
    <!-- Font awesome 5 -->
    <style>
        .avatar {
            vertical-align: middle;
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }
        .bg-default, .btn-default{
            background-color: #f2f3f8;
        }
        .btn-error{
            color: #ef5f5f;
        }
    </style>
    <!-- custom style -->
</head>
<body>
<section class="header-main">
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('home/assets/images/avatars/user.png')}}" class="avatar" alt="">

                </a>

                <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
                    <a id="navbarDropdown" class="nav-link " >
                        @if(Auth::user())
                        {{ Auth::user()->email }}
                        @endif
                    </a>
                    <a class="dropdown-item" href="#"> بياتي الشخصيه<i class="fa fa-fw fa-user p-3" aria-hidden="true"></i> </a>
                    <a class="dropdown-item" href="#"> الاعدادات <i class="fa fa-tasks p-4" aria-hidden="true"> </i> </a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    > خروج<i class="fa fa-fw fa-sign-out p-5" aria-hidden="true"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @yield('navbar-nav')
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        عروضي

                        <i class="fa fa-cubes">
                            <span class="badge badge-danger">11</span>
                        </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">

                        الطلبات الواردة
                        <i class="fa fa-truck">
                            {{--<span class="badge badge-warning">11</span>--}}
                        </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        المشتروات
                        <i class="fas fa-shopping-cart">
                            {{--<span class="badge badge-warning">11</span>--}}
                        </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        إضافة صنف جديد
                        <i class="fa fa-plus">
                            {{--<span class="badge badge-warning">11</span>--}}
                        </i>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">
                        {{--<i class="fa fa-home"></i>--}}
                        الرئيسية
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell ">
                            <span class="badge badge-info">11</span>
                        </i>
                        الإشعارات
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-envelope">
                            <span class="badge badge-success">11</span>
                        </i>
                        الرسائل
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

</section>
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y-sm bg-default ">
    <div class="container-fluid">
        @yield('content')

    </div>
    </div><!-- container //  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<script src="{{asset('home/assets/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/js/OverlayScrollbars.js')}}" type="text/javascript"></script>
<script href="{{asset('js/stepper.js')}}" type="text/javascript" ></script>
<script>
	$(function() {
	//The passed argument has to be at least a empty object or a object with your desired options
	//$("body").overlayScrollbars({ });
	$("#items").height(552);
	$("#items").overlayScrollbars({overflowBehavior : {
		x : "hidden",
		y : "scroll"
	} });
	$("#cart").height(445);
	$("#cart").overlayScrollbars({ });
});
</script>
</body>
</html>
