@extends('layouts.app')

@section('content')
    <div style="font-family: Cairo">
        <section class="sign-in-page" {{__("reg.direction")}}>
            <div class="container">
                <div class="row justify-content-center align-items-center height-self-center">
                    <div class="col-md-6 col-sm-12 col-12 ">
                        <div class="sign-user_card ">
                            <div class="sign-in-page-data">
                                <div class="sign-in-from w-100 m-auto">
                                    <h3 class="mb-0 {{__("reg.float")}}" style="font-family: Cairo">{{__("reg.reset")}}</h3>
                                    <p class="text-white {{__("reg.float")}}" {{__("reg.direction")}}>{{__("reg.reset message")}}</p>
                                    <form class="mt-4" method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail2" placeholder="{{__("reg.email")}}" autocomplete="off" required=""  value="{{ $email ?? old('email') }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong class="{{__("reg.float")}}">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="exampleInputEmail2" placeholder="{{__("reg.password")}}" autocomplete="off" required="">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong class="{{__("reg.float")}}">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control mb-0 @error('password_confirmation') is-invalid @enderror" id="exampleInputEmail2" placeholder="{{__("reg.confirm password")}}" autocomplete="off" required="">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong class="{{__("reg.float")}}">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="d-inline-block w-100">
                                            <button class="btn btn-primary {{__("reg.float")}}">{{__("reg.reset")}}</button>
                                            {{--                                            <a href="sign-in.html" class="btn btn-primary float-right">{{__("reg.reset")}}</a>--}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sign in END -->
                <!-- color-customizer -->
            </div>
        </section>
    </div>
@endsection
