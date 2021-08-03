@extends("nav")
@section("content")
    <section class="m-profile manage-p" style="font-family: Cairo" {{__("reg.direction")}}>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-lg-10">
                    <div class="sign-user_card">
                        <div class="row">

                            <div class="col-lg-10 device-margin">
                                <div class="profile-from">
                                    <h4 class="mb-3 {{__("reg.float")}}">{{__("home.Manage Profile")}}</h4>
                                    <form class="mt-4" action="/profile" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-2 mb-2">
                                            <div class="upload_profile d-inline-block">
                                                <img src="@if(!empty(auth()->user()->img)) {{asset("storage/" . auth()->user()->img)}} @else {{asset("images/user/user.jpg")}} @endif" class="profile-pic rounded-circle img-fluid text-center" alt="user">
                                                <div class="p-image">
                                                    <i class="ri-pencil-line upload-button"></i>
                                                    <input class="file-upload @error("img") is-invalid @enderror" type="file" accept="image/*" name="img">
                                                    @error('img')
                                                    <span class="invalid-feedback" role="alert">
                                            <strong class="{{__("reg.float")}}">{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-0" id="exampleInputl2" placeholder="{{__("reg.full name")}}" autocomplete="off" required="" value="{{auth()->user()->name}}" disabled style="background-color:#191919 ">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control mb-0" id="exampleInputl2" placeholder="{{__("reg.email")}}" autocomplete="off" required="" value="{{auth()->user()->email}}" disabled style="background-color:#191919 ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-0" id="exampleInputl2" placeholder="{{__("reg.phone")}}" autocomplete="off" required="" value="{{auth()->user()->phone}}" disabled style="background-color:#191919 ">
                                        </div>
                                        <div class="form-group">
                                            <label class="{{__("reg.float")}}">{{__("home.preference language")}}</label>
                                            <select class="form-control form-control-lg @error("lang") is-invalid @enderror" style="background-color: #191919; border: 1px solid #404043" name="lang" required>
                                                <option selected="" disabled="" value="0">{{__("home.choose language")}}</option>
                                                <option value="ar" @if(auth()->user()->lang == "ar") selected @endif>العربية</option>
                                                <option value="en" @if(auth()->user()->lang == "en") selected @endif>English</option>
                                            </select>
                                            @error('lang')
                                            <span class="invalid-feedback" role="alert">
                                            <strong class="{{__("reg.float")}}">{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" class="form-control date-input basicFlatpickr mb-0 flatpickr-input" placeholder="Select Date" id="exampleInputPassword2" required="" readonly="readonly">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group d-flex flex-md-row flex-column">--}}
{{--                                            <div class="iq-custom-select d-inline-block manage-gen">--}}
{{--                                                <select name="cars" class="form-control pro-dropdown select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">--}}
{{--                                                    <option value="female" data-select2-id="3">Female</option>--}}
{{--                                                    <option value="male">Male</option>--}}
{{--                                                </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="2" style="width: 94px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-cars-m3-container"><span class="select2-selection__rendered" id="select2-cars-m3-container" role="textbox" aria-readonly="true" title="Female">Female</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="iq-custom-select d-inline-block lang-dropdown manage-dd">--}}
{{--                                                <select name="cars" class="form-control pro-dropdown select2-hidden-accessible" id="lang" multiple="" data-select2-id="lang" tabindex="-1" aria-hidden="true">--}}
{{--                                                    <option value="english" data-select2-id="5">English</option>--}}
{{--                                                    <option value="hindi" data-select2-id="6">Hindi</option>--}}
{{--                                                    <option value="gujarati" data-select2-id="7">Gujarati</option>--}}
{{--                                                    <option value="bengali" data-select2-id="8">Bengali</option>--}}
{{--                                                    <option value="marathi" data-select2-id="9">Marathi</option>--}}
{{--                                                    <option value="tamil" data-select2-id="10">Tamil</option>--}}
{{--                                                    <option value="kannada" data-select2-id="11">Kannada</option>--}}
{{--                                                </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="12" style="width: 101.969px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Language Preference" style="width: 175px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="d-flex">
                                            <button class="btn btn-hover">{{__("home.save")}}</button>
{{--                                            <a href="#" class="btn btn-hover">{{__("home.save")}}</a>--}}
                                            <a href="/" class="btn btn-link">{{__("home.cancel")}}</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
