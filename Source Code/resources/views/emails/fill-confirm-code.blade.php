<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/demo/logo.png')}}"/>
    <title>APTECH</title>
        <link href="{{asset('assets/login.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/core.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/theme-df.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/login.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<body id="particles-js"></body>
    @php
    $id=5;
    @endphp
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

    <div class="animated bounceInDown">
    <div class="container1">
        <span class="error animated tada" id="msg"></span>
        <form action="{{ route('fillConfirmCode') }}" method="post" name="form1" class="box" onsubmit="return checkStuff()">
            @csrf
            <h4>APTECH</h4>
            <h5>Confirm Email.</h5>
            @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                
            </div>
            @endif

            @if (Session::has('confirm_code_error'))
            <div class="alert alert-danger">
                {{ Session::get('confirm_code_error') }}
            </div>
            @endif
            <p style="color:#a1a4ad"> Please check your email to get the confirmation code.</p>
            <input type="text" name="confirm_code" placeholder="Enter your confirmation code" autocomplete="off">
            <input type="submit" value="Forgot" class="btn1">
        </form>
    </div> 
    </div>
    <script src="{{asset('assets/login.js')}}"></script>
</body>
</html>
