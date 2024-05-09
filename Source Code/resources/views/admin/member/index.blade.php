
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
                <h5 class="card-header">List Members</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr class="table-border-bottom-0">
                                <th>Id</th>
                                <th>Email</th>
                                <th>Authority</th>
                                <th>Created</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                                <tr class="table-border-bottom-0">
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{Route('history',$member->id)}}"> {{ $member->email }}</a></td>
                                    <td>@if ($member->id==1) SuperAdmin @elseif($member->level==1) Admin @else Member @endif</td>
                                    <td>{{ date('d-m-Y : H:i:s',strtotime($member->created_at)) }}</td>
                                    <td><a onclick="return deleteConfirm()" href="{{ route('admin.member.delete',['id'=> $member->id]) }}">Delete</a></td>
                                    <td><a href="{{ route('admin.member.edit',['id'=> $member->id]) }}">Edit</a></td>
                                </tr>
                            @endforeach
                        <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
</body>
@endsection