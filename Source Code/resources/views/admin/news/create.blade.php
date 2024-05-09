@extends('admin.layoutadmin')
@section('content')
<form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
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
                <h5 class="card-header">Create news</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                
                    <label class="form-label">Title</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old ('title') }}" />
                    </div>

                    <label class="form-label">Content</label>
                    <div class="input-group">
                        <textarea type="text" class="form-control" name="content" placeholder="Content" >{{ old ('content') }}</textarea>
                    </div>
                    
                    <script >
                        CKEDITOR.replace('content')
                    </script>

                    <label class="form-label">Image</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

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
@endsection