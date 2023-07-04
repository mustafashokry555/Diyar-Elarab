@extends('admin.layout.layout')

@section('title')
    Dashboard - Add Category
@endsection

@section('content')
   
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    @include("inc.massage")
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Categories (Add New Category)</h5>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('admin.storeCat') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="name" class="form-control" id="basic-default-title1"
                                        name="name" value="{{ old('name')}}">
                                </div>
                            </div>                            

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Images</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="img" id="formFile">
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"><i class='bx bx-plus'></i> Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        
@endsection

