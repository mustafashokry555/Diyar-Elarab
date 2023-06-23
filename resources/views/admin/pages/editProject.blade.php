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
                @include('inc.massage')
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Projects ({{ $project->name }})</h5>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ route('admin.updateProject', $project->id) }}"
                        method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-title1" name="name"
                                    value="{{ $project->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <div id="froala"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $project->desc }}"
                                    id="basic-default-title2" name="desc">
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" name="text" class="form-control">{{ $slider->value->text }}</textarea>
                                </div>
                            </div> --}}

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Images</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="imgs[]" id="formFileMultiple" multiple>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Current Images</label>
                            <div id="oldImageSec" class="col-sm-10">
                                @if (!empty($project->imgs))
                                    @foreach ($project->imgs as $img)
                                        <span style='width: 24%; height: 170px;' class="text-center mb-2 d-inline-block">
                                            <img class="w-100 h-100" src="{{ URL::asset($img) }}">
                                            <input class="form-control" name="oldImgs[]" hidden value="{{ $img }}"
                                                multiple>
                                            <button type="button" class="deleteImg" style="all: unset; cursor: pointer;">
                                                <i class='bx text-danger bx-trash'></i>
                                            </button>
                                        </span>
                                    @endforeach
                                @endif
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

@section('script')
    <script>
        $("#oldImageSec .deleteImg").click(function(event) {
            event.preventDefault();
            let inputValue = $(this).siblings('input').val();
            $(this).parents('span').remove();
            $('#oldImageSec').append('<input name="deleteImgs[]" hidden value="' + inputValue + '" multiple>');
        });
    </script>
    <script type="text/javascript" 
    src="{{ asset('froala_editor.pkgd.min.js') }}"></script>
@endsection

@section('style')       
    <link href="{{ asset('froala_editor.pkgd.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
