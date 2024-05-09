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
    <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form action="{{route('fillNewPassword',['id' => $id ])}}" method="post" name="form1" class="box" onsubmit="return checkStuff()">
            @csrf
            <h4>APTECH</h4>
            <h5>CREATE A NEW PASSWORD</h5>
            @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
            </div>
            @endif
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="newpassword" placeholder="New passsword" id="pwd" autocomplete="off">
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="confirmnewpassword" placeholder="Confirm new password" id="pwd" autocomplete="off">
            <input type="submit" value="Change Password" class="btn1">
        </form>
    </div> 
    </div>
    <script src="{{asset('assets/login.js')}}"></script>
</body>
</html>
