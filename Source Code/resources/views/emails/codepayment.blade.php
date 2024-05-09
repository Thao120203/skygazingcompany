<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logo.png')}}"/> --}}
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/demo/logo.png')}}"/>
    <title>APTECH</title>
    <link href="{{asset('assets/login.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<body id="particles-js"></body>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <div class="animated bounceInDown">
    <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form method="post" name="form1" class="box" onsubmit="return checkStuff()">
            @csrf
            <h3>Paid successfully</h3>
            <h4>APTECH</h4>
            <h5>Sky Gazing Company</h5>
            <h2>Hi {{$name}}</h2>
            <p>Your code to visit Paloma Observatory: {{$code}}</p> 
            <p>Check in date: {{$date}}</p>
            <p>Quantity: {{$quantity}}</p>
            <p>Thank you!</p>
        </form>
    </div> 
    </div>
    <script src="{{asset('assets/login.js')}}"></script>
</body>
</html>
