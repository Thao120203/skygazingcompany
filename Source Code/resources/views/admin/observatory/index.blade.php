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
                    <h5 class="card-header">List Observatory</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr class="table-border-bottom-0">
                                    <th>Id</th>
                                    <th>Observatory's name</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Establish</th> 
                                    <th>Created At</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($AEs as $observatory)
                                    <tr class="table-border-bottom-0">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $observatory->observatory_name }}</td>
                                        <td>
                                            @php
                                                $image = $observatory->image == NULL ? 'no-image-found.png' : $observatory->image;
                                                $image_url = asset('images/'.$image);
                                            @endphp
                                            <img src="{{ $image_url }}" width="100px" height="100px">
                                        </td>
                                        <td>{{ $observatory->category }}</td>
                                        <td>{!! $observatory->establish !!}</td>
                                        <td>{{ date('d-m-Y : H:i:s', strtotime($observatory->created_at)) }}</td>
                                        <td><a onclick="return deleteConfirm()" href="{{ route('admin.observatory.delete',['id'=>$observatory->id]) }}">Delete</a></td>
                                        <td><a href="{{ route('admin.observatory.edit',['id'=>$observatory->id]) }}">Edit</a></td>                                       
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