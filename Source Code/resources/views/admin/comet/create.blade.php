@extends('admin.layoutadmin')
@section('content')
    <form method="post" action=" {{ route('admin.comet.store') }}" enctype="multipart/form-data">
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
                        <h5 class="card-header">Create Comet</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element"> 

                            <label class="form-label">Image</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>

                            <label class="form-label">Introduction</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="introduction" placeholder="Introduction"> {{ old('introduction') }}</textarea>
                            </div>
                            
                            <script >
                                CKEDITOR.replace('introduction')
                            </script>

                            <label class="form-label">Where Do Comets Come From?</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="where_do_comets_come_from" placeholder="Where Do Comets Come From?">{{ old('where_do_comets_come_from') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace('where_do_comets_come_from')
                            </script>

                            <label class="form-label">Exploration of Comets</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="exploration_of_comets" placeholder="Exploration of Comets">{{ old('exploration_of_comets') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace('exploration_of_comets')
                            </script>

                            <label class="form-label">How Comets Get Their Names</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="how_comets_get_their_name" placeholder="How Comets Get Their Names">{{ old('how_comets_get_their_name') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace('how_comets_get_their_name')
                            </script>
                            
                            <label class="form-label">Astronomical Entity Id</label>
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
