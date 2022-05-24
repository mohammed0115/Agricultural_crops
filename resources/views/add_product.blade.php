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
    <link href="{{asset('home/assets/css/OverlayScrollbars.css')}}" type="text/css" rel="stylesheet"/>

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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('home/assets/images/avatars/user.png')}}" class="avatar" alt="">

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">بياتي الشخصيه</a>
                    <a class="dropdown-item" href="#">الضبط</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">تسجيل الخروج</a>
                </div>
            </li>
        </ul>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home"></i>
                        الرئيسية
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-danger">11</span>
                        </i>
                        عروضي
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        <i class="fa fa-envelope-o">
                            {{--<span class="badge badge-warning">11</span>--}}
                        </i>
                        تصفح علي العروض الاخرى
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-primary">11</span>
                        </i>
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
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
<div class="container">

<div class="row d-flex justify-content-center ">
    <div class="col-12">ADD NEW PRODUCT</div>
    <div class="col-12 ">
    <form>
        <!-- Text input-->
        <div class="row col-12">
        <div class="form-group col-6">
            <label  for="product_name">PRODUCT NAME</label>
            <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control" required="" type="text">
        </div>
        <!-- Text input-->
        <div class="form-group col-6">
            <label class=" control-label" for="product_name_fr">PRODUCT DESCRIPTION </label>
            <input id="product_name_fr" name="description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" required="" type="text">
        </div>
        </div>

        <!-- Select Basic -->
        <div class="row col-12">
        <div class="form-group col-6">
            <label class=" control-label" for="product_categorie">PRODUCT CATEGORY</label>
                <select id="product_categorie" name="category_id" class="form-control">
                    @foreach ($categories as  $cate)
                        <option value="{{$cate->id}}" @if($cate->id ==$category) selected @endif>{{$cate->name}}</option>
                    @endforeach
                </select>
        </div>

        <!-- Text input-->
        <div class="form-group col-6">
            <label class=" control-label" for="available_quantity">AVAILABLE QUANTITY</label>
            <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
        </div>
        </div>
        <div class="row col-12">
        <!-- Text input-->
        <div class="form-group col-6">
            <label class=" control-label" for="product_weight">PRODUCT WEIGHT</label>
            <input id="product_weight" name="product_weight" placeholder="PRODUCT WEIGHT" class="form-control input-md" required="" type="text">
        </div>

        <!-- Text input-->
        <div class="form-group col-6">
            <label class=" control-label" for="percentage_discount">PERCENTAGE DISCOUNT</label>
            <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">

        </div>
        </div>
        <div class="row col-12">
        <!-- Text input-->
        <div class="form-group col-6">
            <label class=" control-label" for="stock_alert">STOCK ALERT</label>
            <input id="stock_alert" name="stock_alert" placeholder="STOCK ALERT" class="form-control input-md" required="" type="text">
        </div>

        <!-- Search input-->
        <div class="form-group col-6">
            <label class=" control-label" for="stock_critical">STOCK CRITICAL</label>
            <input id="stock_critical" name="stock_critical" placeholder="STOCK CRITICAL" class="form-control input-md" required="" type="search">

        </div>
        </div>
        <div class="row col-12">
        <!-- Search input-->
        <div class="form-group col-6">
            <label class=" control-label" for="tutorial">TUTORIAL</label>
            <input id="tutorial" name="tutorial" placeholder="TUTORIAL" class="form-control input-md" required="" type="search">
        </div>



        <!-- Text input-->
        <div class="form-group col-6">
            <label class=" control-label" for="online_date">ONLINE DATE</label>
            <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" required="" type="text">
        </div>
        </div>

        <!-- Text input-->
        {{--<div class="form-group">--}}
            {{--<label class="control-label" for="author">AUTHOR</label>--}}
            {{--<input id="author" name="author" placeholder="AUTHOR" class="form-control input-md" required="" type="hidden">--}}
        {{--</div>--}}

        {{--<!-- Text input-->--}}
        {{--<div class="form-group">--}}
            {{--<label class=" control-label" for="approuved_by">APPROUVED BY</label>--}}
            {{--<input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="hidden">--}}
        {{--</div>--}}

        <!-- Text input-->
        <div class="form-group">
            <label class="control-label" for="enable_display">IMAGE</label>
            <input id="filebutton" name="filebutton" class="input-file" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
</div>

<!-- ========================= SECTION CONTENT END// ========================= -->
<script src="{{asset('home/assets/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('home/assets/js/OverlayScrollbars.js')}}" type="text/javascript"></script>
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
