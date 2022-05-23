@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Product Detail</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('index',$category) }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Step 1</h3>
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
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input type="text" name="name" class="form-control mb-2" placeholder="Enter name" value="{{ session()->get('products.name') }}">
                            <button type="submit" class="btn btn-primary">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
