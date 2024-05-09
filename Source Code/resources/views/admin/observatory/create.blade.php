@extends('admin.layoutadmin')
@section('content')
    <form method="post" action=" {{ route('admin.observatory.store') }}" enctype="multipart/form-data">
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

                        <h5 class="card-header">Create Observatory</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">
                        
                            <label class="form-label">Observatory's name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="observatory_name" placeholder="Observatory's name" value="{{ old ('observatory_name') }}" />
                            </div>


                            <label class="form-label">Category</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="category" placeholder="Category" value="{{ old ('category') }}" />
                            </div>

                            <label class="form-label">Image</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>

                            <label class="form-label">Establish</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="establish" placeholder="Establish">{{ old('establish') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace( 'establish')
                            </script>

                            <label class="form-label">Location</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="location" placeholder="Location" value="{{ old ('location') }}" />
                            </div>
                            
                            <label class="form-label">Overview</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="overview" placeholder="Overview" >{{ old('overview') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace( 'overview')
                            </script>

                            <label class="form-label">Astronomical entity id</label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect03" name="id_ae" aria-label="Example select with button addon">
                                
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
</body>
@endsection
