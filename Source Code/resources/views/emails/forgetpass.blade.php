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

    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <div class="animated bounceInDown">
    <div class="container1">
        <span class="error animated tada" id="msg"></span>
        <form action="{{route('recoverPass')}}" method="post" name="form1" class="box" onsubmit="return checkStuff()">
            @csrf
            <h4>APTECH</h4>
            <h5>Forget Password</h5>

            @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <strong >{{ $error }}</strong>
                    @endforeach
            </div>
            @endif

            @if (Session::has('mail_error'))
            <div class="alert alert-danger">
                {{ Session::get('mail_error') }}
            </div>
            @endif
			<input type="text" name="confirm_email" placeholder="Your Email" autocomplete="off">
            <input type="submit" value="Get the confirmation code" class="btn1">
        </form>
    </div> 
    </div>
    <script src="{{asset('assets/login.js')}}"></script>
</body>
</html>
