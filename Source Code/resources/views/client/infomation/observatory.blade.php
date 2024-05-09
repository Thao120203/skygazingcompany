@extends('client.infomation.master_info')
@section('layoutcontent')
<div class="sidebar one_quarter first fixed">         
  <h6>Infomation {{$infoobservatory->observatory_name}}</h6>
  <nav class="sdb_holder">
  <ul>
      <li><a href="#overview">Overview {{$infoobservatory->observatory_name}}</a></li>
      <li><a href="#category">Category {{$infoobservatory->observatory_name}}</a></li>
      <li><a href="#establish">Establish {{$infoobservatory->observatory_name}}</a></li>
      <li><a href="#location">Location {{$infoobservatory->observatory_name}}</a></li>
  </ul>
  </nav>
</div>  
      <div class="content three_quarter"> 

        <h2 class="title_center">{{$infoobservatory->observatory_name}}</h2>
    
        @php
        $img= $infoobservatory->image == (NULL) ? 'no_avatar.png' : ($infoobservatory->image);          
        $image_url= asset('images/'.$img) 
        @endphp
        <img id="image_data" class="imgl inspace-5" src="{{$image_url}}" alt="" width="50px" height="50px">
    
       
        {{-- <p><u id="location">Location:</u>{{$infoobservatory->location}}</p> --}}
        
     
        <p><u id="overview">Overview:</u> {!!$infoobservatory->overview!!}</p>

        <p><u id="category">Category:</u> {{$infoobservatory->category}}</p>
        
        <p><u id="establish">Establish:</u> {!!$infoobservatory->establish!!}</p>
       

        <br>
        <iframe src="{{$infoobservatory->location}}" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

@endsection
