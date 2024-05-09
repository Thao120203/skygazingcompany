@extends('client.infomation.master_info')
@section('layoutcontent')
<div class="sidebar one_quarter first fixed">         
  <h6>Infomation {{$infoconstellation->name}}</h6>
  <nav class="sdb_holder">
  <ul>
      <li><a href="#overview">Overview {{$infoconstellation->name}}</a></li>
      <li><a href="#definition">Definition {{$infoconstellation->name}}</a></li>
      <li><a href="#origin">Origin {{$infoconstellation->name}}</a></li>
      <li><a href="#meaning">Meaning {{$infoconstellation->name}}</a></li>
      <li><a href="#symbolism">Symbolism {{$infoconstellation->name}}</a></li>
      <li><a href="#right_ascension">Right ascention {{$infoconstellation->name}}</a></li>
      <li><a href="#declination">Declination {{$infoconstellation->name}}</a></li>
      <li><a href="#area">Area {{$infoconstellation->name}}</a></li>
      <li><a href="#main_stars">Main Stars {{$infoconstellation->name}}</a></li>
      <li><a href="#bordering_constellations">Bordering constellations {{$infoconstellation->name}}</a></li>
      <li><a href="#meteor_showers">Meteor showers {{$infoconstellation->name}}</a></li>
  </ul>
  </nav>
</div>  
      <div class="content three_quarter"> 

        <h2 class="title_center">{{$infoconstellation->name}}</h2>
    
        @php
        $img= $infoconstellation->image == (NULL) ? 'no_avatar.png' : ($infoconstellation->image);          
        $image_url= asset('images/'.$img) 
        @endphp
        <img id="image_data" class="imgl inspace-5" src="{{$image_url}}" alt="" width="50px" height="50px">
    
        <p><u id="overview">Overview:</u> {!!$infoconstellation->overview!!}</p>
        
        <p><u id="definition">Definition:</u> {!!$infoconstellation->definition!!}</p>
       
        <p><u id="origin">Origin:</u>{!!$infoconstellation->origin!!}</p>
     
        <p><u id="meaning">Meaning:</u> {!!$infoconstellation->meaning!!}</p>

        <p><u id="symbolism">Symbolism:</u> {!!$infoconstellation->symbolism!!}</p>

        <p><u id="right_ascension">Right ascention:</u> {!!$infoconstellation->right_ascension!!}</p>

        <p><u id="declination">Declination:</u> {!!$infoconstellation->declination!!}</p>

        <p><u id="area">Area:</u> {!!$infoconstellation->area!!}</p>

        <p><u id="main_stars">Main Stars:</u> {!!$infoconstellation->main_stars!!}</p>
        
        <p><u id="bordering_constellations">Bordering constellations:</u> {!!$infoconstellation->bordering_constellations!!}</p>

        <p><u id="visible_at_latitudes">Visible at latitudes:</u> {!!$infoconstellation->visible_at_latitudes!!}</p>

        <p><u id="meteor_showers">Meteor showers:</u> {!!$infoconstellation->meteor_showers!!}</p>

      </div>

@endsection
