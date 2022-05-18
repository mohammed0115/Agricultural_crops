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
<div class="container">

<div class="row d-flex justify-content-center ">
    <div class="col-12">ADD NEW PRODUCT</div>
    <div class="col-12 ">
    <form>
        <!-- Text input-->
        <div class="form-group">
            <label  for="product_name">PRODUCT NAME</label>
            <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control" required="" type="text">
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="product_name_fr">PRODUCT DESCRIPTION </label>
            <input id="product_name_fr" name="description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" required="" type="text">
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class=" control-label" for="product_categorie">PRODUCT CATEGORY</label>
                <select id="product_categorie" name="category_id" class="form-control">
                    @foreach ($categories as  $cate)
                        <option value="{{$cate->id}}" @if($cate->id ==$category) selected @endif>{{$cate->name}}</option>
                    @endforeach
                </select>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="available_quantity">AVAILABLE QUANTITY</label>
            <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="product_weight">PRODUCT WEIGHT</label>
            <input id="product_weight" name="product_weight" placeholder="PRODUCT WEIGHT" class="form-control input-md" required="" type="text">
        </div>




        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="percentage_discount">PERCENTAGE DISCOUNT</label>
            <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">

        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="stock_alert">STOCK ALERT</label>
            <input id="stock_alert" name="stock_alert" placeholder="STOCK ALERT" class="form-control input-md" required="" type="text">
        </div>

        <!-- Search input-->
        <div class="form-group">
            <label class=" control-label" for="stock_critical">STOCK CRITICAL</label>
            <input id="stock_critical" name="stock_critical" placeholder="STOCK CRITICAL" class="form-control input-md" required="" type="search">

        </div>

        <!-- Search input-->
        <div class="form-group">
            <label class=" control-label" for="tutorial">TUTORIAL</label>
            <input id="tutorial" name="tutorial" placeholder="TUTORIAL" class="form-control input-md" required="" type="search">
        </div>



        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="online_date">ONLINE DATE</label>
            <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" required="" type="text">
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
