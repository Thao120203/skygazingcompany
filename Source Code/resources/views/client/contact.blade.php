@extends('client.infomation.master_info')
@section('layoutcontent')
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('assets/css/style-about.css')}}" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/mobile.css')}}" />
        <script src="{{asset('assets/js/mobile.js')}}" type="text/javascript"></script>
    </head>
            <div id="body">
                <div class="header-ct">
                    <div class="contact">
                        <h1>Contact</h1>
                        <h2>DO NOT HESITATE TO CONTACT US</h2>
                        <form action="{{Route('storecontact')}}" method="post">
                            @csrf
                            <input type="text" name="name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';" />
                            <input type="text" name="email" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';" />
                            <input type="text" name="subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';" />
                            <textarea name="message" cols="50" rows="7"></textarea>
                            <input type="submit" value="Send" id="submit" />
                        </form>
                    </div>
                </div>
            </div>
@endsection
