@extends('admin.layoutadmin')
@section('content')
    <form action="{{Route('admin.astronomicalentity.store')}}" method="post">
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        <h5 class="card-header">Create Astronomical Entity</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">

                            <label class="form-label">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" value=" {{ old('name') }}"/>
                            </div>
    
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect03" name="parent" value=" {{ old('parent') }}"  aria-label="Example select with button addon">
                                    <option value="0">----------Root------------</option>
                                        <?php dequy($AEs,0) ?>
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
 