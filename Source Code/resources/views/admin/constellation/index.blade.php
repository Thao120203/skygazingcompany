@extends('admin.layoutadmin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></h4>
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{ Session::get('error') }}</strong>
                </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                @endif
                <h5 class="card-header">List Constellation</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr class="table-border-bottom-0">
                                <th>Id</th>
                                <th>Constellation's name</th>
                                <th>Image</th> 
                                <th>Meaning</th>
                                <th>Main Stars</th>
                                <th>Visible at latitudes</th>
                                <th>Area</th>
                                <th>Delete</th>
                                <th>Edit</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($AEs as $constellation)
                                <tr class="table-border-bottom-0">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $constellation->name }}</td>
                                    <td>
                                        @php
                                            $image = $constellation->image == NULL ? 'no-image-found.png' : $constellation->image;
                                            $image_url = asset('images/'.$image);
                                        @endphp
                                        <img src="{{ $image_url }}" width="100px" height="auto">
                                    </td>   
                                    <td>{!! $constellation->meaning !!}</td>
                                    <td>{!! $constellation->main_stars !!}</td>
                                    <td>{!! $constellation->visible_at_latitudes !!}</td>
                                    <td>{!! $constellation->area !!}</td>                                
                                    <td><a onclick="return deleteConfirm()" href="{{ route('admin.constellation.delete',['id'=>$constellation->id]) }}">Delete</a></td>
                                    <td><a href="{{ route('admin.constellation.edit',['id'=>$constellation->id]) }}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
</body>
@endsection