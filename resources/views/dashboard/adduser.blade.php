@extends('dashboard.sidebar')

@section('sidebar')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" >
                                <h4 class="card-title" style="font-family: Cairo">{{__("dashboard.add new user")}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body" style="font-family: Cairo">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/dashboard/users/add" method="post" id="my-form">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control @error("name") is-invalid @enderror" value="{{old("name")}}" placeholder="{{__("reg.full name")}}" style="font-family: Cairo;background-color: #191919; border: 1px solid #404043">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" style="font-family: Cairo;background-color: #191919; border: 1px solid #404043" name="email" class="form-control @error("email") is-invalid @enderror" value="{{old("email")}}" placeholder="{{__("reg.email")}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" style="font-family: Cairo;background-color: #191919; border: 1px solid #404043" class="form-control @error("phone") is-invalid @enderror" value="{{old("phone")}}" placeholder="{{__("reg.phone")}}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" style="font-family: Cairo;background-color: #191919; border: 1px solid #404043" class="form-control @error("password") is-invalid @enderror" placeholder="{{__("reg.password")}}">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" style="font-family: Cairo;background-color: #191919; border: 1px solid #404043" class="form-control @error("password_confirmation") is-invalid @enderror" placeholder="{{__("reg.confirm password")}}">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">{{__("reg.membership")}}</label>
                                            <select class="form-control form-control-lg @error("package") is-invalid @enderror"  style="font-family: Cairo;background-color: #191919; border: 1px solid #404043" name="package">
                                                <option selected="" disabled="" value="0">{{__("reg.select membership")}}</option>
                                                <option value="1">{{__("reg.yearly bundle")}}</option>
                                                <option value="2">{{__("reg.3 month bundle")}}</option>
                                                <option value="3">{{__("reg.monthly bundle")}}</option>
                                            </select>
                                            @error('package')
                                            <span class="invalid-feedback" role="alert">
                                            <strong class="{{__("reg.float")}}">{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>{{__("home.preference language")}}</label>
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
                                        <div class="form-group">
                                            <label>{{__("dashboard.role")}}</label>
                                            <select class="form-control form-control-lg @error("role_id") is-invalid @enderror" style="background-color: #191919; border: 1px solid #404043" name="role_id" required>
                                                <option selected="" disabled="" value="0">{{__("dashboard.choose role")}}</option>
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->role}}</option>
                                                @endforeach
                                            </select>
                                            @error('role_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong class="{{__("reg.float")}}">{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
{{--                                        <div class="form-group">--}}
{{--                                            <textarea id="text" name="text" rows="5" class="form-control" placeholder="Description"></textarea>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group radio-box">--}}
{{--                                            <label>Status</label>--}}
{{--                                            <div class="radio-btn">--}}
{{--                                                <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                                    <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input">--}}
{{--                                                    <label class="custom-control-label" for="customRadio6">enable</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                                    <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">--}}
{{--                                                    <label class="custom-control-label" for="customRadio7">disable </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="form-group ">
                                            <button type="submit" class="btn btn-primary">{{__("dashboard.add")}}</button>
                                            <button type="reset" class="btn btn-danger">{{__("dashboard.reset")}}</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push("scripts")
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <!-- Laravel Javascript Validation -->
        <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

        {!! JsValidator::formRequest('App\Http\Requests\addUser', '#my-form'); !!}
    @endpush
@endsection
