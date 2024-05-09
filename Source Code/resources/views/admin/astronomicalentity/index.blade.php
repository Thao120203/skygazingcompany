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
                    <h5 class="card-header">List Astronomical Entity</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            {{-- <table id="datatable" class="table table-bordered table-striped"> --}}
                            <table  id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr class="table-border-bottom-0">
                                    <td>Name</td>
                                    <td style="width: 40px">Delete</td>
                                    <td style="width: 40px">Edit</td>
                                </tr>
                            </thead>
                            
                                <td>
                                <?php
                                     dequytable($AEs,0)
                                ?>
                                </td>
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
