@extends('admin.layoutadmin')
@section('content')
<form method="post" action="{{ route('admin.member.store') }}" >
    @csrf
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></h4>
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
                    <h5 class="card-header">Create Member</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11">@</span>
                            <input 
                            type="text"  
                            class="form-control" 
                            name="email" 
                            placeholder="Email"
                            value=" {{ old('email') }}"
                            aria-label="email" 
                            aria-describedby="basic-addon11"
                            />
                        </div>

                        <div class="form-password-toggle">
                            <label class="form-label"  for="basic-default-password12">Password</label>
                            <div class="input-group">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    id="basic-default-password12"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="basic-default-password2"
                                />
                                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        
                        <div class="form-password-toggle">
                            <label class="form-label"  for="basic-default-password12">Confirm password</label>
                            <div class="input-group">
                                <input
                                    type="password"
                                    name="password_confirm"
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
                            <option value="2">Member</option>
                            <option value="1">Admin</option>
                            </select>
                        </div>

                        <div class="demo-inline-spacing">
                            <button type="submit" class="btn btn-outline-primary">Create</button>
                            <button type="reset" class="btn btn-outline-secondary">Delete</button>
                        </div>
                </div>
            </div>
        </div>
    </div>    
</form> 
@endsection