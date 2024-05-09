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
                <h5 class="card-header">List Solar System</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <table id="datatable" class="table table-bordered table-striped display">
                            <thead>
                                <tr class="table-border-bottom-0">
                                    <th>Id</th>
                                    <th>Solar System name</th>
                                    <th>Image</th>
                                    <td>Rings</td>
                                    <th>Atmosphere</th>
                                    <th>When discovered</th>
                                    <th>Delete</th>
                                    <th>Edit</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ss as $planet)
                                    <tr class="table-border-bottom-0">
                                        <td>{{ $loop->iteration }}</td> 
                                        <td>{{ $planet->solar_system_name }}</td>
                                        <td>
                                            @php
                                                $image = $planet->image == NULL ? 'no-image-found.png' : $planet->image;
                                                $image_url = asset('images/'.$image);
                                            @endphp
                                            <img src="{{ $image_url }}" widtd="100px" height="100px">
                                        </td>
                                        <td>{!!$planet->rings !!}</td>
                                        <td>{!! $planet->when_discovered !!}</td>
                                        <td>{!!$planet->namesake !!}</td>                                  
                                        <td><a onclick="return deleteConfirm()" href="{{ route('admin.ss.delete',['id'=> $planet->id]) }}">Delete</a></td>
                                        <td><a href="{{ route('admin.ss.edit',$planet->id) }}">Edit</a></td>
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
@endsection

