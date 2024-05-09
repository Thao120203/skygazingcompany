@extends('client.infomation.master_info')
@section('layoutcontent')
<div class="sidebar one_quarter first fixed"> 
  <h6>Infomation {{$infoSS->solar_system_name}}</h6>
  <nav class="sdb_holder">
  <ul>
      <li><a href="#overview">Overview {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#when_discovered">When discovered {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#atmosphere">Atmosphere {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#potential_for_life">Potential for life {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#size_and_distance">Size and distance {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#orbit_and_rotation">Orbit and rotation {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#moons">Moons {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#rings">Rings {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#formation">Formation {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#structure">Structure {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#surface">Surface {{$infoSS->solar_system_name}}</a></li>
      <li><a href="#magnetosphere">Magnetosphere {{$infoSS->solar_system_name}}</a></li>
  </ul>
  </nav>
  </div>      
      <div class="content three_quarter"> 
        @if ($infoSS->id <= 9)
        <iframe id="frame" allowfullscreen='true' width=100% height='400px' frameborder='0' src='https://eyes.nasa.gov/apps/orrery/#/{{strtolower($infoSS->solar_system_name)}}'></iframe>
        @endif
        <h2 class="title_center">{{($infoSS->solar_system_name)}}</h2>
    
        @php
        $img= $infoSS->image == (NULL) ? 'no_avatar.png' : ($infoSS->image);          
        $image_url= asset('images/'.$img) 
        @endphp
        <img id="title_center" class="imgl inspace-5" src="{{$image_url}}" alt="" width="50px" height="50px">
       
    
        <p><u id="overview">Overview:</u> {!!$infoSS->overview!!} </p>        

        <p><u id="when_discovered">When discovered:</u> {!!$infoSS->when_discovered!!}</p>
        
        <p><u id="atmosphere">Atmosphere:</u>{!!$infoSS->atmosphere!!}</p>
      
        <p><u id="potential_for_life">Potential for life:</u> {!!$infoSS->potential_for_life!!}</p>
       
        <p><u id="size_and_distance">Size and distance:</u> {!!$infoSS->size_and_distance!!}</p>
        

        <p><u id="orbit_and_rotation">Orbit and rotation:</u> {!!$infoSS->orbit_and_rotation!!}</p>
        <p><u id="moons">Moons:</u> {!!$infoSS->moons!!}</p>

        <p><u id="rings">Rings:</u> {!!$infoSS->rings!!}</p>

        <p><u id="formation">Formation:</u> {!!$infoSS->formation!!}</p>

        <p><u id="structure">Structure:</u> {!!$infoSS->structure!!}</p>
        
        <p><u id="surface">Surface:</u> {!!$infoSS->surface!!}</p>

        <p><u id="magnetosphere">Magnetosphere:</u> {!!$infoSS->magnetosphere!!}</p>

      </div>

@endsection
