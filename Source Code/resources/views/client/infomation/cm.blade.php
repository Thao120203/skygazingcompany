@extends('client.infomation.master_info')
@section('layoutcontent')
<div class="sidebar one_quarter first fixed">         
  <h6 class="title_center">Infomation Comet</h6>
  <nav class="sdb_holder">
  <ul>
      <li><a href="#introduction">Introduction Comet</a></li>
      <li><a href="#where_do_comets_come_from">Where Do Comets Come From?</a></li>
      <li><a href="#exploration_of_comets">Exploration of Comets</a></li>
      <li><a href="#how_comets_get_their_name">How Comets Get Their Names</a></li>
  </ul>
  </nav>
</div>  

<div class="sidebar one_quarter first"> 

</div>
      
      <div class="content three_quarter"> 

        <h2 class="title_center">Comet</h2>
    
        @php
        $img= $infocm->image == (NULL) ? 'no_avatar.png' : ($infocm->image);          
        $image_url= asset('images/'.$img) 
        @endphp
        <img class="imgl inspace-5" src="{{$image_url}}" alt="" width="50px" height="50px">
       
    
        <p><u id="introduction">Introduction:</u> {!!$infocm->introduction!!}</p>
        

        <p><u id="where_do_comets_come_from">Where Do Comets Come From?</u> {!!$infocm->where_do_comets_come_from!!}</p>
       
        <p><u id="exploration_of_comets">Exploration of Comets:</u>{!!$infocm->exploration_of_comets!!}</p>

     
        <p><u id="how_comets_get_their_name">How Comets Get Their Names:</u> {!!$infocm->how_comets_get_their_name!!}</p>
      
      </div>

@endsection
