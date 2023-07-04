@extends('admin.layout.layout')

@section('title')
    Dashboard - SettingPage
@endsection

@section('content')
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            @include("inc.massage")
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Setting </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pages.update_settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Website Name <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="website_name" class="form-control  setting_input"
                            required="required" value="{{ $setting->website_name != null ? $setting->website_name : old('website_name') }}"placeholder=" Website Name">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Email <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control setting_input"
                            required="required"  value="{{ $setting->email != null ? $setting->email : old('email') }}"
                            placeholder=" Your Email">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Frist Mobile Number <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="number" name="mobile" class="form-control  setting_input"
                            required="required" value="{{ $setting->mobile != null ? $setting->mobile : old('mobile') }}"placeholder=" Frist Mobile">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Second Mobile Number </label>
                        <div class="col-sm-10">
                            <input type="number" name="mobile1" class="form-control  setting_input"
                            value="{{ $setting->mobile1 != null ? $setting->mobile1 : old('mobile1') }}"placeholder=" Second Mobile">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Address <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control  setting_input"
                            required="required"   value="{{ $setting->address != null ? $setting->address : old('address') }}" placeholder=" Address">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Facebook Link
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="facebook_link" class="form-control  setting_input" value="{{ $setting->facebook_link != null ? $setting->facebook_link : old('facebook_link') }}"
                             placeholder="Facebook Link">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Twitter Link
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="twitter_link" class="form-control  setting_input" value="{{ $setting->twitter_link != null ? $setting->twitter_link : old('twitter_link') }}"
                            placeholder=" Twitter Link ">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Instagram Link
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="instagram_link" class="form-control  setting_input" value="{{ $setting->instagram_link != null ? $setting->instagram_link : old('instagram_link') }}"
                            placeholder="Instagram Link">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Linked In Link
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="linkedin_link" class="form-control  setting_input" value="{{ $setting->linkedin_link != null ? $setting->linkedin_link : old('linkedin_link') }}"
                            placeholder=" Linked In Link ">
                        </div>
                    </div>

                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Google Link
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="google_link" class="form-control  setting_input"  value="{{ $setting->google_link != null ? $setting->google_link : old('google_link') }}"
                            placeholder=" Google Link ">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class=" label_input text-bold-900">Map Link
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="map_link" class="form-control  setting_input" value="{{ $setting->map_link != null ? $setting->map_link : old('map_link') }}"
                            placeholder="Map Link ">
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class="label_input text-bold-900"> Logo Image </label>
                        <div class="col-sm-10">
                        <input type="file" name="logo_image" id="logo_image" class="form-control m-input setting_input">
                        </div>
                        <div class="mt-2">
                             <img src="{{ asset('uploads/logo/' . $setting->logo_image) }}" id="logo-image-preview" width="200px" />
                        </div>
                    </div>
                    <div class="div_setting">
                        <label class="label_input text-bold-900"> Logo Image tab </label>
                        <div class="col-sm-10">
                        <input type="file" name="logo_image_tab" id="logo_image" class="form-control m-input setting_input">
                        </div>
                        <div class="mt-2">
                             <img src="{{ asset('uploads/logo/' . $setting->logo_image_tab) }}" id="logo-image-preview" width="200px" />
                        </div>
                    </div>


                    <div class="row justify-content-end">
                        <div class="col text-left">

                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

    {{-- <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Settings</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Full Name</label>
                  <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Company</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-email">Email</label>
                  <div class="input-group input-group-merge">
                    <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2">
                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                  </div>
                  <div class="form-text">You can use letters, numbers &amp; periods</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">Phone No</label>
                  <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Message</label>
                  <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
        </div>


    </div> --}}

@endsection

@section('style')
    @include('web.layout.style')
@endsection

@section('script')
    @include('web.layout.script')
@endsection






{{-- <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Basic Layout</h5>
          <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Full Name</label>
              <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Company</label>
              <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-email">Email</label>
              <div class="input-group input-group-merge">
                <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2">
                <span class="input-group-text" id="basic-default-email2">@example.com</span>
              </div>
              <div class="form-text">You can use letters, numbers &amp; periods</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-phone">Phone No</label>
              <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-message">Message</label>
              <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Basic with Icons</h5>
          <small class="text-muted float-end">Merged input group</small>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-company">Company</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-email">Email</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
              <div class="form-text">You can use letters, numbers &amp; periods</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-phone">Phone No</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-message">Message</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
