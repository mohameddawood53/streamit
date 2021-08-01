@extends('layouts.app')

@section('content')
<div style="font-family: Cairo">
    <section class="sign-in-page">
        <div class="container">


            <div class="row justify-content-center align-items-center height-self-center">

                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="sign-user_card ">
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 m-auto">
                                <h3 class="mb-3 text-center" style="font-family: Cairo">{{__("reg.sign in")}}</h3>
                                <form class="mt-4" {{__("reg.direction")}} action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control mb-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="exampleInputEmail2" placeholder="{{__("reg.email")}}" autocomplete="off" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="{{__('reg.float')}}">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control mb-0 @error('password') is-invalid @enderror" value="{{old("password")}}" id="exampleInputPassword2" placeholder="{{__("reg.password")}}" required>
                                        @error('password')
                                        <span class="invalid-feedback {{__('reg.float')}}" role="alert">
                                                <strong class="{{__('reg.float')}}">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="sign-info">
                                        <button type="submit" class="btn btn-primary">{{__("reg.sign in")}}</button>
                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                            <label class="custom-control-label" for="remember" {{ old('remember') ? 'checked' : '' }}>{{__("reg.remember")}}</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-3" {{__("reg.direction")}}>
                            <div class="d-flex justify-content-center links">
                                {{__("reg.without account")}} <a href="{{ route('register') }}" class="text-primary ml-2">{{__("reg.sign up")}}</a>
                            </div>
                            <div class="d-flex justify-content-center links">
                                <a href="{{ route('password.request') }}" class="f-link">{{__("reg.forgot password")}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-5 {{__("reg.float")}}" {{__("reg.direction")}}>

                    </div>
                </div>



            </div>
            <!-- Sign in END -->
            <!-- color-customizer -->

        </div>

    </section>

</div>
@endsection
