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
</head>

<body>
  <?php $total = 80* $data->ticket_number ?>
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
                        <h3>Payment Ticket</h3>
                        <form action="#" >
                          <div>Total: <?=$total?> USD </div>
                          <div id="paypal-button"></div>
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
</body>

</html>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AQRwbVDmNaO_4YKoF0oMLBPgpGa86c9b0huZDF9gDBE9x405UjZJd8qSU0wB4Xz2XF9vORid5F-sOdVi',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'medium',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            
            	total: '<?= $total ?>',
              currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Pay successfully');
        window.location.href = "{{Route('complete',$data->code)}}";
      });
    }
  }, '#paypal-button');

</script>
