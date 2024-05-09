<!DOCTYPE html>
<html lang="">
    <!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
    <head>
        <title>APTECH</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="{{asset('assets/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/demo/logo.png')}}"/>
    </head>
    <body id="top">
        <!-- Top Background Image Wrapper -->
        <div class="bgded overlay light" style="background-image: url({{asset('assets/images/bg-home.jpg')}});">

          
            <div class="wrapper row0">
                <div id="topbar" class="hoc clear">
                  
                    <ul class="nospace">
                    <li>
                        <a href="{{Route('home')}}"><i class="fa fa-lg fa-home"></i></a>
                    </li>
                    
                    <li>
                        <a href="{{Route('contact')}}" title="Send a Mail"><i class="fa fa-envelope-o"></i></a>
                    </li>
                    @if (Auth::check())
                            <li>
                                <a href="{{ route('buyticket')}}" title="Buy Ticket"><i class="fa fa-ticket" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('history',Auth::user()->id)}}" title="List My Ticket"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </li>
                            @if(Auth::user()->id==1 || Auth::user()->level==1)
                                <li>
                                    <a href="{{route('admin.getLogin')}}" title="Go to Admin"><i class="fa fa-forward" aria-hidden="true"></i></a>
                                </li>
                            @endif
                        <li>
                            <a href="{{ route('Userlogout')}}" title="Logout"><i class="fa fa-lg fa-sign-out"></i></a>
                        </li> 
                    @else
                    <li>
                        <a href="{{ route('getUserLogin') }}" title="Login"><i class="fa fa-lg fa-sign-in"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('getRegister')}}" title="Register"><i class="fa fa-lg fa-edit"></i></a>
                    </li>
                    @endif

                    @if (Auth::check())
                    <li>
                        <div class="borderedbox flex-grow-1">
                            <p style="color:#CF9C67">{{Auth::user()->email}} </p>
                        </div>
                    </li>
                    @endif

                    </ul>
                </div>
            </div>
            
            <div class="wrapper row1" >
                <header id="header" class="hoc clear">
                  
                    <div id="logo" class="fl_left">
                        <h1><a href="{{Route('home')}}"><b class="fa fa-graduation-cap">APTECH</b></a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear" >
                            <li class="active"><a href="{{Route('home')}}">Home</a></li>
                                @foreach ($AEs as $AE)
                                <li>
                                    <a class="drop" href="{{Route($AE->name)}}">{{$AE->name}}</a>
                                    <ul>
                                        @foreach ($planets as $planet)
                                        @if ($planet->id_ae == $AE->id)
                                            <li><a href="{{Route('ss',$planet->id)}}">{{$planet->solar_system_name}}</a></li>
                                        @endif
                                @endforeach

                                @foreach ($cts as $ct)
                                    @if ($ct->id_ae == $AE->id)
                                        <li><a href="{{Route('constellation',$ct->id)}}">{{$ct->name}}</a></li>
                                    @endif
                                @endforeach

                                @foreach ($obs as $ob)
                                    @if ($ob->id_ae == $AE->id)
                                        <li><a href="{{Route('observatory',$ob->id)}}">{{$ob->observatory_name}}</a></li>
                                    @endif
                                @endforeach

                                @foreach ($baos as $bao)
                                    @if ($bao->id_ae == $AE->id)
                                        <li><a href="{{Route('news',$bao->id)}}">{{$bao->title}}</a></li>
                                    @endif
                                @endforeach
                                    </ul>
                                    
                                </li>
                                @endforeach
                            
                            <li class=""><a href="{{Route('Comet')}}">Comet</a></li>
                        </ul>
                    </nav>
                  
                </header>
            </div>
        </div>
        <div class="wrapper row3">
            <main class="container clear"> 
               
                @yield('layoutcontent')
            </main>
        </div>

        
        <!-- JAVASCRIPTS -->
        <script src="{{asset('assets/layout/scripts/jquery.min.js')}}"></script>
        <script src="{{asset('assets/layout/scripts/jquery.backtotop.js')}}"></script>
        <script src="{{asset('assetslayout/scripts/jquery.mobilemenu.js/')}}"></script>
    </body>
</html>

