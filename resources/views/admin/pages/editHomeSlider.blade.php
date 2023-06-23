@extends('admin.layout.layout')

@section('title')
    Dashboard - HomePage
@endsection

@section('content')
   
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    @include("inc.massage")
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Sliders ({{ $slider->key }})</h5>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('admin.pages.home.updateSlider', $slider->id) }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Title 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-title1"
                                        name="title1" value="{{ $slider->value->title1 }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Title 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $slider->value->title2 }}" id="basic-default-title2"
                                        name="title2">
                                </div>
                            </div>                            
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" name="text" class="form-control">{{ $slider->value->text }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="img" id="formFile">
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"><i class='bx bx-edit-alt'></i> Edit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        
@endsection
