<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APTECH</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/demo/logo.png')}}"/>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/style.css')}}" type="text/css">
    @if (Session::has('error'))
        <script async>
            alert('{{ Session::get('error') }}');
        </script>
    @endif
</head>

<body>
    
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Welcome to Palomar Observatory</h1>
                        <p> What will it be like to conquer the sky? Come to us you will have the best experience ever. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        <h3>Booking Your Observatory</h3>
                        <form action="{{ route('admin.cart.store') }}" method="post" >
                            @csrf
                            <div class="check-date">
                                <label for="client_name">Name:</label>
                                <input name="client_name" type="text" >
                            </div>
                            <div class="check-date">
                                <label for="email">Email:</label>
                                <input name="email" type="email" value="{{Auth::user()->email}}" >
                            </div>
                            <div class="check-date">
                                <label for="phone">Phone:</label>
                                <input name="phone" type="text" >
                            </div>
                            <div class="check-date">
                                <label for="">Check In:</label>
                                <input name="date" type="text" class="date-input" id="date-in">
                            </div>
                            <tr>
                            <div class="check-date">
                                <label for="">Unit Price:</label>
                                <p class="price">80 USD</p>
                            </div>
                            <div class="check-date ticket_number">
                                <span href="/" class="decrement ticket_count" onClick="ticketCount(this)">-</span>
                                <input type="number" class="quantity" name="ticket_number" id="ticket_value" value=1>
                                <span href="/" class="increment ticket_count" onClick="ticketCount(this)">+</span>
                            </div>
                            <div class="check-date">
                                <label for="">Total Price:</label>
                                <span class="total-price">80 USD</span>
                            </div>
                            </tr>
                            {{-- <div class="select-option">
                                <label for="guest">Ticket:</label>
                                <select id="guest">
                                    <option value="0">children</option>
                                    <option value="1">Adults</option>
                                </select>
                            </div> --}}
                            <button  type="submit">Buy Tiket</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{asset('assets/images/demo/anh1.jpg')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('assets/images/demo/anh2.jpg')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('assets/images/demo/anh3.jpg')}}"></div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Js Plugins -->
    <script src="{{asset('assets/layout_event/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/main.js')}}"></script>

    <script type="text/javascript">
        inputValue = $('#ticket_value').val() * 1;
        count = $('.ticket_count');
        defaultTicketPrice = 80;
        console.log(inputValue)

        function totalTicketPrice (numberOfTickets) {
            $(".total-price").html(numberOfTickets*defaultTicketPrice +  " USD");
        }

        function checkInputValue () {
            input = $('input[type=number]')
            input.change((e) => { 
                (e.target.value <= 1 ) ? e.target.value = 1 : e.target.value;
                (e.target.value >= 100) ? e.target.value = 100 : e.target.value;

                

                inputValue = e.target.value * 1
                totalTicketPrice(inputValue * 1)
            });

            $('#ticket_count').val(inputValue);
        }
        checkInputValue()

        function ticketCount(btn) {
        // console.log(inputValue);
            
            // decrement or increment 
            type = btn.getAttribute("class").split(' ')[0];

            (type == 'increment') ? inputValue +=1 : inputValue -=1;

            inputValue = (inputValue <= 1 ) ? inputValue = 1 : inputValue;
            inputValue = (inputValue >=100 ) ? inputValue = 100 : inputValue;


            // console.log(inputValue)
            checkInputValue(inputValue);
            $("#ticket_value").val(inputValue)
            totalTicketPrice(inputValue);

         }

         
    </script>



</body>

</html>

