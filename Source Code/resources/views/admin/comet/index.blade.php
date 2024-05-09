
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
                <h5 class="card-header">List Comet</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                            <tr class="table-border-bottom-0">
                                <th>Id</th>
                                <th>Image</th>
                                <th>Introduction</th>
                                <th>Where Do Comets Come From?</th>
                                <th>Exploration of Comets</th>
                                <th>How Comets Get Their Names</th>
                                <th>Created At</th>                               
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($AEs as $comet)
                                    <tr class="table-border-bottom-0">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @php
                                                $image = $comet->image == NULL ? 'no-image-found.png' : $comet->image;
                                                $image_url = asset('images/'.$image);
                                            @endphp
                                            <img src="{{ $image_url }}" width="100px" height="100px">
                                        </td>             
                                        <td>{!!$comet->introduction!!}</td>
                                        <td>{!!$comet->where_do_comets_come_from!!}</td>
                                        <td>{!!$comet->exploration_of_comets!!}</td>
                                        <td>{!!$comet->how_comets_get_their_name!!}</td>
                                        <td>{{ date('d-m-Y : H:i:s', strtotime($comet->created_at)) }}</td>                                    
                                        <td><a onclick="return deleteConfirm()" href="{{ route('admin.comet.delete',['id'=>$comet->id]) }}">Delete</a></td>
                                        <td><a href="{{ route('admin.comet.edit',['id'=>$comet->id]) }}">Edit</a></td>
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
