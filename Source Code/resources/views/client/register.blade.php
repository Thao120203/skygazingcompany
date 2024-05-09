
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
    <div class="containers">
        <span class="error animated tada" id="msg"></span>
        <form action="{{ route('postRegister') }}" method="post" name="" class="box" onsubmit="return checkStuff()">
            @csrf
            <h4>APTECH</h4>
            <h5>Sign up to your account.</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br>   
                        @endforeach
                    
                </div>
            @endif
            <input type="text" name="email" placeholder="Email"  autocomplete="off" value="{{ old('email') }}">
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
            <input type="password" name="password_confirm" placeholder="Re-enter your Password"  autocomplete="off" >
            <input type="submit" value="Register" class="btn1">
        </form>
        <a href="{{ route('getUserLogin') }}" class="dnthave">Do you want go back to Login?</a>
    </div> 
    </div>
    <script src="{{asset('assets/login.js')}}"></script>
</body>
</html>
