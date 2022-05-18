<!DOCTYPE html>
<html>
<head>
    <title>RP Bloggers - Free Login Page Template With HTML and CSS</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

</head>
<body>
<div class="container">
    <div class="form sign-in-container">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="https://rpbloggers.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://rpbloggers.com/"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://rpbloggers.com/"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <input type="email" name="email" placeholder="User Email">
            <input type="password" name="password" placeholder="Password">
            {{--<a href="https://rpbloggers.com/">Forgot your password?</a>--}}
            {{--<button>Sign In</button>--}}
            <input type="submit" name="submit" value="Sign In" class="btn">
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Sign UP</h1>
                <p>Sign up here if you don't have account.</p>
                <a class="btn signup_btn" href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
