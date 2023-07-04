@extends('admin.layout.layout')

@section('title')
    Dashboard - Edit Member Team
@endsection

@section('content')
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            @include("inc.massage")
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Member Team  </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pages.team.update',[$team->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Name <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control  setting_input"
                            required="required" value="{{ $team->name }}"placeholder="Name">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900"> Mobile Number <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="number" name="mobile" class="form-control  setting_input"
                            required="required"  value="{{ $team->mobile }}"placeholder="Mobile">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class="label_input text-bold-900"> Image </label>
                        <div class="col-sm-10">
                        <input type="file" name="image" id="image" class="form-control m-input setting_input">
                        </div>
                        @if ($team->img != Null)

                            <div class="col-md-3 mt-2 image-area">
                                <img src="{{ asset('uploads/team/' . $team->img) }}"
                                    width="100px" height="100px" />
                            </div>

                        @endif

                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Job Title <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="job_title" class="form-control  setting_input"
                            required="required" value="{{ $team->job_title }}"placeholder="Job Title">
                        </div>
                    </div>


                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Description <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="desc" class="form-control  setting_input"
                            required="required" value="{{ $team->desc }}" placeholder="Description">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col text-left">

                            <button type="submit" class="btn btn-primary mr-2">Edit </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>



@endsection

@section('style')
    @include('web.layout.style')
@endsection

@section('script')
    @include('web.layout.script')
@endsection




