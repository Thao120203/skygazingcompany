<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logo.png')}}"/> --}}
    <title>APTECH</title>
    <link href="{{asset('assets/login.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/core.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/theme-df.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/demo/logo.png')}}"/>
</head>

<body id="particles-js"></body>
    
    
    <div class="animated bounceInDown">
    <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form action="{{ route('postUserLogin') }}" method="post" name="" class="box" onsubmit="return checkStuff()">
            @csrf
            <h4>APTECH</h4>
            <h5>Sign in to your account.</h5>
            @if (Session::has('error'))
            <div class="alert alert-danger">
                <strong>{{ Session::get('error') }}</strong>
            </div>
            @endif  

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
            </div>
            @endif
            
            <input type="text" name="email" placeholder="Email" autocomplete="off" value= "{{ old('email') }}">
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
            <a href="{{route('forget_pass')}}" class="forgetpass">Forgot Password?</a>
            <input type="submit" value="Sign in" class="btn1">
        </form>
            <a href="{{ route('getRegister') }}" class="dnthave">Don’t have an account? Sign up</a>
    </div> 
    </div>
    <script src="{{asset('assets/login.js')}}"></script>
</body>
</html>