@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 card" >
                            <div class="card-header justify-content-center" style="direction: rtl;text-align: right">
                            <h5>إضافة صنف جديد</h5>
                            </div>

                            <!-- Horizontal Stepper with Completed State -->
                            <div class="card-body">
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>مرحلة انشاء منتج</strong></li>
                                    <li id="personal"><strong>وصف العرض</strong></li>
                                    <li id="payment"><strong>ارفاق الصور</strong></li>
                                    <li id="confirm"><strong>النهاية</strong></li>
                                </ul>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="card-body " style="text-align: right">
                    <h3>الخطوه الاولى</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('products.post.step.1') }}" method="POST">
                        @csrf
                        <div class="form-group" style="direction: rtl;text-align: right">
                            <label for="name" style="direction: rtl; ">الاسم : </label>
                            <input type="text" name="name" class="form-control mb-2" placeholder="ادخل الاسم" value="{{ session()->get('products.name') }}">
                            <input type="hidden" name="category_id" value="{{$category}}" class="form-control mb-2"  value="{{ session()->get('products.category_id') }}">
                            <label for="name" style="direction: rtl">السعر : </label>
                            <input type="text" name="price" class="form-control mb-2" placeholder="ادخل السعر" value="{{ session()->get('products.price') }}">
                            <label for="name" style="direction: rtl">العائلة : </label>
                            <input type="text" name="category" class="form-control mb-2" placeholder="ادخل  اسم العائلة" value="{{ session()->get('products.price') }}">
                            <label for="name" style="direction: rtl">الوصف التفصلي للمنتج : </label>
                            <textarea class="form-control mb-2" name="description">

                            </textarea>
                            <button type="submit" class="btn btn-primary" style="direction: rtl;text-align: right">Continue</button>
                            <a style="direction: rtl;text-align: right" href="{{ route('index',$category) }}" class="btn btn-md btn-success float-left">back <i class="fas fa-arrow-right p-1"> </i></a>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
