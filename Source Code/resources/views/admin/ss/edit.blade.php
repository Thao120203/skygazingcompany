@extends('admin.layoutadmin')
@section('content')
<form method="post" action="{{ route('admin.ss.update',$ss->id) }}" enctype="multipart/form-data">
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

                    <h5 class="card-header">Edit Solar System</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                        <label class="form-label">Solar system name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="solar_system_name" placeholder="Solar system name" value="{{ $ss->solar_system_name }}" />
                        </div>
    
                        <label class="form-label">Overview</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="overview" placeholder="Overview">{{ $ss->overview }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('overview')
                        </script>
    
                        <label class="form-label">When discovered</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="when_discovered" placeholder="When discovered" >{{ $ss->when_discovered }}</textarea>
                        </div>
                        
                        <script >
                            CKEDITOR.replace('when_discovered')
                        </script>

                        <label class="form-label">Atmosphere</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="atmosphere" placeholder="Atmosphere" >{{ $ss->atmosphere }}</textarea>
                        </div>

                        <script>
                            CKEDITOR.replace('atmosphere')
                        </script>
    
                        <label class="form-label">Namesake</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="namesake" placeholder="Namesake" >{{ $ss->namesake }}</textarea>
                        </div>
                        
                        <script >
                            CKEDITOR.replace('namesake')
                        </script>

                        <label class="form-label">Potential for life</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="potential_for_life" placeholder="Potential for life">{{ $ss->potential_for_life }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('potential_for_life')
                        </script>

                        <label class="form-label">Old Image</label>
                        <div class="input-group">
                            <img src="{{asset('images/'.$ss->image)}}" width="200">
                        </div>

                        <label class="form-label">New Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="image" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
    
                        <label class="form-label">Size and distance</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="size_and_distance" placeholder="Size and distance" >{{ $ss->size_and_distance }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('size_and_distance')
                        </script>
    
                        <label class="form-label">Orbit and rotation</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="orbit_and_rotation" placeholder="Orbit and rotation">{{ $ss->orbit_and_rotation }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('orbit_and_rotation')
                        </script>
    
                        <label class="form-label">Moons</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="moons" placeholder="Moons" >{{ $ss->moons }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('moons')
                        </script>
    
    
                        <label class="form-label">Rings</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="rings" placeholder="Rings" >{{ $ss->rings }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('rings')
                        </script>
    
                        <label class="form-label">Formation</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="formation" placeholder="Formation" >{{ $ss->formation }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('formation')
                        </script>
    
                        <label class="form-label">Structure</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="structure" placeholder="Structure" >{{ $ss->structure }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('structure')
                        </script>
    
                        <label class="form-label">Surface</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="surface" placeholder="Surface" >{{ $ss->surface }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('surface')
                        </script>
    


                        <label class="form-label">Magnetosphere</label>
                        <div class="input-group">
                            <textarea type="text" class="form-control" name="magnetosphere" placeholder="Magnetosphere">{{ $ss->magnetosphere }}</textarea>
                        </div>

                        <script >
                            CKEDITOR.replace('magnetosphere')
                        </script>

                        <label class="form-label">Astronomical entity id</label>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect03" name="id_ae" aria-label="Example select with button addon">
                            
                                <?php dequy($AEs,0) ?>
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