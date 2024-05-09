@extends('admin.layoutadmin')
@section('content')

<form method="post" action="{{ route('admin.member.update',$member->id) }}">
    @csrf
    <div class="container-xxl flex-grow-1 container-p-y">member
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
                    <h5 class="card-header">Edit Member</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11">@</span>
                            <input type="text" 
                            class="form-control" 
                            name="email" 
                            placeholder="Email" 
                            aria-label="email" 
                            aria-describedby="basic-addon11" 
                            value="{{$member->email}}"
                            disabled/>
                        </div>

                        <div class="form-password-toggle">
                            <label class="form-label" name="password" for="basic-default-password12">Password</label>
                            <div class="input-group">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="basic-default-password12"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="basic-default-password2"
                                />
                                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        
                        <div class="form-password-toggle">
                            <label class="form-label" name="password_confirm" for="basic-default-password12">Confirm password</label>
                            <div class="input-group">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="basic-default-password12"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="basic-default-password2"
                                />
                                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <label class="form-label">Authorities</label>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect03" name="level" aria-label="Example select with button addon">
                            <option value="2" <?php if( $member->level == 2) echo 'selected' ?> >Member</option>
                            <option value="1" <?php if( $member->level == 1) echo 'selected' ?>>Admin</option>
                            </select>
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
@endsection