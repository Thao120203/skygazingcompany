@extends('client.infomation.master_info')
@section('layoutcontent')
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('assets/css/style-about.css')}}" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/mobile.css')}}" />
        <script src="{{asset('assets/js/mobile.js')}}" type="text/javascript"></script>
    </head>
		<div id="body" class="about">
			<div class="header-ct">
				<div>
					<h1>About Us</h1>
					<h2>WHY DO WE MAKE THIS WEBSITE ?</h2>
					<p>The sky is full of possibilities and experiences, why not chase them all?
						The sun, moon, stars, and planets have been a source of wonder for as long as
						humans have lived on earth.
						We are here looking at a website which will provide brief details about a few facts and
						details about astronomy.</p>
				</div>
			</div>
			<div class="body">
				<div>
					<img src="{{asset('assets/images/earth-satellite.jpg')}}" alt="">
					<h2>WHERE DO WE GET THE INFORMATION FROM ?</h2>
					<p>Because we are newbie, we have no experience in doing space website<br>so all information is taken by us from <a href="https://www.nasa.gov">NASA</a> and <a href="https://en.wikipedia.org/wiki/Main_Page">WIKIPEDIA</a></p>
				</div>
			</div>
			<div class="footer">
				<div>
					<img src="{{asset('assets/images/space-shuttle.png')}}" alt="">
					<h2>Be Part of Our Community</h2>
					<p>If you’re interested about this website, join the discussion <a href="#">on our forum</a> and meet other people in the community who share the same interests with you.</p>
				</div>
			</div>
			{{-- <div class="section">
				<div>
					<h2>Template Details</h2>
					<p>Design Version 1. Code version 3. Website Template details, discussion and updates for this <a href="https://freewebsitetemplates.com/discuss/spacescience/"> Space Science Website Template</a>. Website Template design by <a href="https://freewebsitetemplates.com/">Free Website Templates</a>. Please feel free to remove some or all the text and links of this page and replace it with your own About content.</p>
				</div>
			</div> --}}
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW US ON</h1>
					<div>
						<a href="#" class="facebook">facebook</a>
						<a href="#" class="twitter">twitter</a>
						<a href="#" class="googleplus">googleplus</a>
						<a href="#" class="pinterest">pinterest</a>
					</div>
				</div>
			</div>
		</div>
@endsection
