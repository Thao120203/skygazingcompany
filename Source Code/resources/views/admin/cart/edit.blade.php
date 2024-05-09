@extends('admin.layoutadmin')
@section('content')    
<link rel="stylesheet" href="{{asset('assets/layout_event/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/layout_event/css/jquery-ui.min.css')}}" type="text/css">
    <form method="post" action=" {{ route('admin.cart.update',['id'=>$cart->id]) }}" enctype="multipart/form-data"> 
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h5 class="card-header">Edit Cart</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element"> 
                            <label class="form-label">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="client_name" placeholder="Name" value="{{ $cart->client_name }}">
                            </div>
                            <label class="form-label">Phone</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $cart->phone }}">
                            </div>
                            <label class="form-label">Mail</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $cart->email }}">
                            </div>
                            <div class="check-date">
                                <label  class="form-label" for="">Date arrive</label>
                                <input name="date" type="text" class="form-control date-input" id="date-in"  value="{{ $cart->date }}">
                            </div>
    
                            <div class="demo-inline-spacing">
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                                <button type="reset" class="btn btn-outline-secondary">Delete</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{asset('assets/layout_event/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/layout_event/js/main.js')}}"></script>
</body>
@endsection