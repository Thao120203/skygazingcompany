@extends('client.infomation.master_info')
@section('layoutcontent')
<div class="sidebar one_quarter first fixed">         
  <h6>Infomation {{$infonews->title}}</h6>
  <nav class="sdb_holder">
  <ul>
      <li><a href="#content">Content {{$infonews->title}}</a></li>
  </ul>
  </nav>
</div>  
      <div class="content three_quarter"> 

        <h2 class="title_center">{{$infonews->title}}</h2>
        @php
        $img= $infonews->image == (NULL) ? 'no_avatar.png' : ($infonews->image);          
        $image_url= asset('images/'.$img) 
        @endphp
        <img id="image_data" class="imgl inspace-5" src="{{$image_url}}" alt="" width="50px" height="50px">
        <p><u id="content">Content:</u> {!!$infonews->content!!}</p>
      </div>
@endsection
