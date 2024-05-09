@extends('admin.layoutadmin')
@section('content')
    <form method="post" action=" {{ route('admin.constellation.store') }}" enctype="multipart/form-data">
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
                        <h5 class="card-header">Create Constellation</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element"> 

                            <label class="form-label">Constellation's name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old ('name') }}" />
                            </div>

                            <label class="form-label">Overview</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="overview" placeholder="Overview" >{{ old('overview') }}</textarea>
                            </div>
                            
                            <script >
                                CKEDITOR.replace('overview')
                            </script>

                            <label class="form-label">Definition</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="definition" placeholder="Definition" >{{ old('definition') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace('definition')
                            </script>

                            <label class="form-label">Origin</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="origin" placeholder="Origin" >{{ old('origin') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace('origin')
                            </script>

                            <label class="form-label">Image</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
        
                            <label class="form-label">Meaning</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="meaning" placeholder="Meaning" >{{ old('meaning') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace('meaning')
                            </script>
                            
                            <label class="form-label">Symbolism</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="symbolism" placeholder="Symbolism" value="{{ old ('symbolism') }}" />
                            </div>
        
                            <label class="form-label">Right ascention</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="right_ascension" placeholder="Right ascention" value="{{ old ('right_ascension') }}" />
                            </div>
        
                            <label class="form-label">Declination</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="declination" placeholder="Declination" value="{{ old ('declination') }}" />
                            </div>
                            
                            <label class="form-label">Area</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="area" placeholder="Area" value="{{ old ('area') }}" />
                            </div>
        
                            <label class="form-label">Main Stars</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="main_stars" placeholder="Main Stars" value="{{ old ('main_stars') }}" />
                            </div>
        
                            <label class="form-label">Bordering constellations</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="bordering_constellations" placeholder="Bordering constellations">{{ old ('bordering_constellations') }}</textarea>
                            </div>



                            <label class="form-label">Visible at latitudes</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="visible_at_latitudes" placeholder="Visible at latitudes" value="{{ old ('visible_at_latitudes') }}" />
                            </div>
                            
                            <label class="form-label">Meteor showers</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="meteor_showers" placeholder="Meteor showers">{{ old ('meteor_showers') }}</textarea>
                            </div>

                            <script >
                                CKEDITOR.replace('meteor_showers')
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