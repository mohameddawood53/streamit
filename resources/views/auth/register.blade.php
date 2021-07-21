@extends('layouts.app')

@section('content')
<div style="font-family: Cairo">
    <section class="sign-in-page">
        <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="sign-user_card ">
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 m-auto" >
                                <h3 class="mb-3 text-center" style="font-family: Cairo">{{__("reg.sign up")}}</h3>
                                <form class="mt-4" method="POST" action="{{ route('register') }}" {{__("reg.direction")}}>
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control mb-0 @error('name') is-invalid @enderror" value="{{ old('name') }}" id="exampleInputText" placeholder="{{__("reg.full name")}}" autocomplete="off" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail2" placeholder="{{__("reg.email")}}" autocomplete="off" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-0 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" id="exampleInputEmail2" placeholder="{{__("reg.phone")}}" autocomplete="off" required>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password" autocomplete="new-password" id="exampleInputPassword2" placeholder="{{__("reg.password")}}" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password" id="exampleInputPassword2" placeholder="{{__("reg.confirm password")}}" required>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="{{__("reg.float")}}">{{__("reg.membership")}}</label>
                                        <select class="form-control" id="exampleFormControlSelect1" style="font-family: Cairo">
                                            <option selected="" disabled="">{{__("reg.select membership")}}</option>
                                            <option>{{__("reg.yearly bundle")}}</option>
                                            <option>{{__("reg.3 month bundle")}}</option>
                                            <option>{{__("reg.monthly bundle")}}</option>
                                        </select>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">{{__("reg.i accept")}} <a href="#" class="text-primary"> {{__("reg.terms")}}</a></label>
                                    </div>

                                    <button type="submit" class="btn btn-primary" style="font-family: Cairo">{{__("reg.register")}}</button>

                                </form>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-center links" {{__("reg.direction")}}>
                                {{__("reg.already have an account?")}} <a href="{{route("login")}}" class="text-primary ml-2"> {{__("reg.sign in")}}</a>
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
