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
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="brand-wrap">
                    <img class="logo" src="{{asset('home/assets/images/logos/crops1.png')}}">
                    <h2 class="logo-text">Agricultural crops</h2>
                </div> <!-- brand-wrap.// -->
            </div>
            <div class="col-lg-6 col-sm-6">
                <form action="#" class="search-wrap">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> <!-- search-wrap .end// -->
            </div> <!-- col.// -->
            <div class="col-lg-3 col-sm-6">
                <div class="widgets-wrap d-flex justify-content-end">
                    <div class="widget-header">
                        <a href="#" class="icontext">
                            <a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
                                <i class="fa fa-home"></i>
                            </a>
                        </a>
                    </div> <!-- widget .// -->
                    <div class="widget-header dropdown">
                        <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                            <img src="{{asset('home/assets/images/avatars/user.png')}}" class="avatar" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out-alt"></i> Logout</a>
                        </div> <!--  dropdown-menu .// -->
                    </div> <!-- widget  dropdown.// -->
                </div>	<!-- widgets-wrap.// -->
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- container.// -->
</section>
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y-sm bg-default ">
<div class="container-fluid">
    <div class="row">



                @foreach ($category as  $cate)

                   <div class="col-lg-3 col-md-3">
                    <figure class="card card-product">
                        {{--<span class="badge-new"> NEW </span>--}}
                        <div class="img-wrap">
                            <img src="{{asset($cate->slug )}}">
                            <a class="btn-overlay" href="{{'/'.$cate->id.'/products'}}"><i class="fa fa-search-plus"></i> Quick view</a>
                        </div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">{{$cate->name}}</a>
                            <div class="action-wrap">
                                <a href="{{'/'.$cate->id.'/products/add'}}" class="btn btn-primary btn-sm float-right">  Add new </a>
                                <div class="price-wrap h5">
                                    {{--<span class="price-new">$1280</span>--}}
                                </div> <!-- price-wrap.// -->
                            </div> <!-- action-wrap -->
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->

               @endforeach

   </div>
    </div>
    </div>
    </div><!-- container //  -->
</section>
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
