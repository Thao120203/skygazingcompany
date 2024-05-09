<!DOCTYPE html>

<html lang="">
    <head>
        <title>APTECH</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="img/favicon.ico" rel="icon">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/demo/logo.png')}}"/>
    </head>
    <body id="top" >
        <!-- Top Background Image Wrapper -->
        <div class="bgded overlay light" style="background-image: url({{asset('assets/images/bg-home.jpg')}});">
            <div class="wrapper row0">
                <div id="topbar" class="hoc clear">

                    <ul class="nospace"> 
                        <li>
                            <a href="{{Route('home')}}" title="Home"><i class="fa fa-lg fa-home"></i></a>
                        </li>
                        
                        <li>
                            <a href="{{Route('contact')}}" title="Contact"><i class="fa fa-envelope-o"></i></a>
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
                        <h1><a href=""><b class="fa fa-graduation-cap">APTECH</b></a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear" >
                            <li class=""><a href="{{Route('home')}}">Home</a></li>
                            
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
          
            <div id="pageintro" class="clear">
                <article>
                    <img class="imgl inspace-5" src="{{asset('assets/images/demo/satellite.png')}}" alt="">

                    <p>WELCOME TO F0'S PROJECT</p>
                    <h3 class="heading">SKY GAZING COMPANY</h3>
                    
                    <footer>
                        <ul class="nospace inline pushright">
                            <li><a class="btn inverse" href="{{Route('contact')}}">Contact</a></li>
                            <li><a class="btn inverse" href="{{Route('about')}}">About</a></li>
                        </ul>
                        <h5 class="h5-font">Why explore the universe?</h5>
                        <h6 class="p-font">Space exploration allows us to prove or disprove scientific theories developed on Earth. Studying the solar system, for example, has brought us insights into such phenomena as gravity, the magnetosphere, the atmosphere, fluid dynamics and the geological evolution of other planets.</h6>
                    </footer>
                </article>
            </div>
        </div>
        <!-- End Top Background Image Wrapper -->
        <div class="wrapper row3">
            <main >
                <div class="sectiontitle2">
                    <h6 class="heading">Solar System</h6>
                    <iframe allow='' class='mb_iframe' frameborder='0' src='https://eyes.jpl.nasa.gov/apps/orrery/#/home?close=false' style='height: 400px; width:100%'  ></iframe>

                </div>
            </main>
        </div>
      
      
      
        <div class="wrapper row3">
            <main >
                <div class="sectiontitle2">
                    <h6 class="heading">Planet of Solar System</h6>
                    <p>Click Here To Know More</p>
                </div>
                <img class="hoc container clear image" src="{{ asset('assets/images/demo/map.png') }}" usemap="#solarsystem" alt="" />

                <map name="solarsystem">
                    <area shape="circle" coords="85px,170px,70px" alt="Sun" href="{{Route('ss',1)}}">
                    <area shape="circle" coords="185px,170px,17px" alt="Mercury" href="{{Route('ss',2)}}">
                    <area shape="circle" coords="250px,170px,38px" alt="Venus" href="{{Route('ss',3)}}">
                    <area shape="circle" coords="330px,170px,32px" alt="Earth" href="{{Route('ss',4)}}">
                    <area shape="circle" coords="425px,170px,25px" alt="Mars" href="{{Route('ss',5)}}">
                    <area shape="circle" coords="515px,170px,45px" alt="Jupiter" href="{{Route('ss',6)}}">
                    <area shape="circle" coords="605px,170px,30px" alt="Saturn" href="{{Route('ss',7)}}">
                    <area shape="circle" coords="680px,170px,30px" alt="Uranus" href="{{Route('ss',8)}}">
                    <area shape="circle" coords="755px,170px,30px" alt="Neptune" href="{{Route('ss',9)}}">
                    <area shape="circle" coords="805px,170px,8px" alt="Pluto" href="{{Route('ss',10)}}">
                    <area shape="circle" coords="380px,170px,8px" alt="Moon" href="{{Route('ss',15)}}">
                </map>
                <!-- / main body -->
            </main>
        </div>

        <div class="wrapper">
            <section class="hoc container clear">
                 <div class="sectiontitle">
                    <h5 class="heading">Planets in Our Solar System</h5>
                    <p>Quis mollis sit amet semper eget nulla cras tellus purus tincidunt</p>
                </div>
                 <div class="">
                    <h5 class="heading">Primary</h5>
                    <div class="container py-5">
                        <div class="row">
                            <div class="wrapper">
                                <div class="group latest">
                                    <div class="col-lg-9 pt-5 pt-lg-0">
                                        <div class="bg-primary rounded" style="height: 200px;"></div>
                                        <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',2)}}"><img src="{{asset('assets/images/demo/Mercury.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Mercury</h5>
                                                <p>Mercury—the smallest planet in our solar system and closest to the Sun—is only slightly larger than Earth's Moon. Mercury is the fastest planet, zipping around the Sun every 88 Earth days.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',3)}}"><img src="{{asset('assets/images/demo/Venus.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Venus</h5>
                                                <p>Venus spins slowly in the opposite direction from most planets. A thick atmosphere traps heat in a runaway greenhouse effect, making it the hottest planet in our solar system.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',4)}}"><img src="{{asset('assets/images/demo/Earth.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Earth</h5>
                                                <p>Earth—our home planet—is the only place we know of so far that’s inhabited by living things. It's also the only planet in our solar system with liquid water on the surface.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',5)}}"><img src="{{asset('assets/images/demo/Mars.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Mars</h5>
                                                <p>Mars is a dusty, cold, desert world with a very thin atmosphere. There is strong evidence Mars was – billions of years ago – wetter and warmer, with a thicker atmosphere.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',6)}}"><img src="{{asset('assets/images/demo/Jupiter.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Jupiter</h5>
                                                <p>Jupiter is more than twice as massive than the other planets of our solar system combined. The giant planet's Great Red spot is a centuries-old storm bigger than Earth.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',7)}}"><img src="{{asset('assets/images/demo/Saturn.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Saturn</h5>
                                                <p>Adorned with a dazzling, complex system of icy rings, Saturn is unique in our solar system. The other giant planets have rings, but none are as spectacular as Saturn's.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',8)}}"><img src="{{asset('assets/images/demo/Uranus.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Uranus</h5>
                                                <p>Uranus—seventh planet from the Sun—rotates at a nearly 90-degree angle from the plane of its orbit. This unique tilt makes Uranus appear to spin on its side.&hellip;</p>
                                            </div>
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('ss',9)}}"><img src="{{asset('assets/images/demo/Neptune.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Neptune</h5>
                                                <p>Neptune—the eighth and most distant major planet orbiting our Sun—is dark, cold and whipped by supersonic winds. It was the first planet located through mathematical calculations.&hellip;</p>
                                            </div>
                                            {{-- <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="#"><img src="{{asset('assets/images/demo/Pluto.png')}}" alt="" /></a>
                                                <h5 class="mb-4 px-4">Pluto</h5>
                                                <p>Pluto is a complex world of ice mountains and frozen plains. Once considered the ninth planet, Pluto is the best known of a new class of worlds called dwarf planets.&hellip;</p>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="wrapper">
            <section class="hoc container clear">
                 <div class="sectiontitle">
                    <h5 class="heading">Constellations</h5>
                    <p>Quis mollis sit amet semper eget nulla cras tellus purus tincidunt</p>
                </div>
                <div class="">
                    <div class="container py-5">
                        <div class="row">
                            <div class="wrapper">
                                <div class="group latest">
                                    <div class="col-lg-9 pt-5 pt-lg-0">
                                        <div class="bg-primary rounded" style="height: 200px;"></div>
                                        <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',9)}}"><img src="{{asset('assets/images/demo/Vigro.jpg')}}" alt="" /></a>
                                                <p>Virgo is one of the constellations of the zodiac. Its name is Latin for maiden, and its old astronomical symbol is ♍︎. Lying between Leo to the west and Libra to the east, it is the second-largest constellation in the sky (after Hydra) and the largest constellation in the zodiac&hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',5)}}"><img src="{{asset('assets/images/demo/taurus.jpg')}}" alt="" /></a>
                                                <p>Taurus (Latin for "the Bull") is one of the constellations of the zodiac and is located in the northern celestial hemisphere. Taurus is a large and prominent constellation in the Northern Hemisphere's winter sky. &hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',11)}}"><img src="{{asset('assets/images/demo/scorpius.jpg')}}" alt="" /></a>
                                                <p>Scorpius is one of the constellations of the zodiac and is located in the Southern celestial hemisphere. Scorpius is one of the 48 constellations identified by the Greek astronomer Ptolemy in the second century ♏︎. &hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',3)}}"><img src="{{asset('assets/images/demo/Pisces.jpg')}}" alt="" /></a>
                                                <p>Pisces is a constellation of the zodiac. Its vast bulk – and main asterism viewed in most European cultures per Greco-Roman antiquity as a distant pair of fishes connected by one cord each that join at an apex – are in the Northern celestial hemisphere. Its old astronomical symbol is ♓︎. &hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',8)}}"><img src="{{asset('assets/images/demo/Leo.jpg')}}" alt="" /></a>
                                                <p>Leo is one of the constellations of the zodiac, between Cancer the crab to the west and Virgo the maiden to the east. It is located in the Northern celestial hemisphere.. Its old astronomical symbol is ♌︎. &hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',2)}}"><img src="{{asset('assets/images/demo/Aquarius.jpg')}}" alt="" /></a>
                                                <p>Aquarius is a constellation of the zodiac, between Capricornus and Pisces. Its name is Latin for "water-carrier" or "cup-carrier", and its old astronomical symbol is ♒︎, a representation of water. Aquarius is one of the oldest of the recognized constellations along the zodiac.&hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',10)}}"><img src="{{asset('assets/images/demo/Libra.jpg')}}" alt="" /></a>
                                                <p>Libra is a constellation of the zodiac and is located in the Southern celestial hemisphere. Its name is Latin for weighing scales. Its old astronomical symbol is ♎︎. &hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',1)}}"><img src="{{asset('assets/images/demo/Capricornus.jpg')}}" alt="" /></a>
                                                <p>Capricornus is one of the constellations of the zodiac. Its name is Latin for "horned goat" or "goat horn" or "having horns like a goat's", and it is commonly represented in the form of a sea goat: a mythical creature that is half goat, half fish.&hellip;</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',7)}}"><img src="{{asset('assets/images/demo/Cancer.jpg')}}" alt="" /></a>
                                                <p>Cancer is one of the twelve constellations of the zodiac and is located in the Northern celestial hemisphere. Its old astronomical symbol is ♋︎. Its name is Latin for crab and it is commonly represented as one. &hellip;</p>
                                            </div>
                                            
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',13)}}"><img src="{{asset('assets/images/demo/Sagittarius.jpg')}}" alt="" /></a>
                                                <p>Sagittarius is one of the constellations of the zodiac and is located in the Southern celestial hemisphere. It is one of the 48 constellations listed by the 2nd-century astronomer Ptolemy and remains one of the 88 modern constellations ♐︎. </p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',6)}}"><img src="{{asset('assets/images/demo/gemini.jpg')}}" alt="" /></a>
                                                <p>Gemini is one of the constellations of the zodiac and is located in the northern celestial hemisphere. It was one of the 48 constellations described by the 2nd century AD astronomer Ptolemy, and it remains one of the 88 modern constellations today.</p>
                                            </div>

                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',4)}}"><img src="{{asset('assets/images/demo/Aries.jpg')}}" alt="" /></a>
                                                <p>Aries is one of the constellations of the zodiac. It is located in the Northern celestial hemisphere between Pisces to the west and Taurus to the east. The name Aries is Latin for ram. Its old astronomical symbol is ♈︎. </p>
                                            </div>
                                            
                                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                                                <a class="black-image-project-hover" href="{{Route('constellation',12)}}"><img src="{{asset('assets/images/demo/Ophiuchus.jpg')}}" alt="" /></a>
                                                <p>Ophiuchus  is a large constellation straddling the celestial equator. Its name comes from the Ancient Greek, meaning "serpent-bearer", and it is commonly represented as a man grasping a snake. </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="wrapper row6">
            <footer id="footer" class="hoc clear">
               
                <article class="one_quarter first">
                    <h5 class="heading">About Us</h5>
                    <p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free!&hellip;</p>
                    <p class="nospace"><a href="{{route('about')}}">Read More</a></p>
                </article>
                <div class="one_quarter">
                    <h5 class="heading">Contact</h5>
                    <ul class="nospace btmspace-30 linklist contact">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <address>
                                35/6 D5,Q.Binh Thanh,Ho Chi Minh
                            </address>
                        </li>
                        <li><i class="fa fa-phone"></i>0397768799</li>
                        <li><i class="fa fa-envelope-o"></i> skygazing@gmail.com</li>
                    </ul>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.061112681851!2d106.71007185014963!3d10.806631461553222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a330e608a5%3A0x4cc00c5927dcb361!2zMzUsIDYgxJDGsOG7nW5nIEQ1LCBQaMaw4budbmcgMjUsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MjMwOCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1658908831159!5m2!1svi!2s" width="50%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </footer>
        </div>

        <div class="sdb_holder them">
            <address>
                <ul class="faico clear">
                    <li>
                        <a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    </li><br/>
                    <li>
                        <a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    </li><br/>
                    <li>
                        <a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a>
                    </li><br/>
                    <li>
                        <a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </address>
        </div>

        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
    
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    
        <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    
        <!-- Contact Javascript File -->
        <script src="{{asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
        {{-- <script src="{{asset('assets/mail/contact.js')}}"></script> --}}
    
        <!-- Template Javascript -->
        <script src="{{asset('assets/js/mainclient.js')}}"></script>
        <script src="{{asset('assets/layout/scripts/jquery.min.js')}}"></script>
        <script src="{{asset('assets/layout/scripts/jquery.backtotop.js')}}"></script>
        <script src="{{asset('assetslayout/scripts/jquery.mobilemenu.js/')}}"></script>
        <script type="text/javascript" src="{{asset('assets/main.70a66962.js')}}"></script>
        
    </body>
</html>


