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
                                    <h3 class="mb-3 text-center" style="font-family: Cairo">{{__("reg.payment error")}}</h3>
                                    <div class="text-center">
                                        <i class="fas fa-times" style="color: #a71d2a; font-size: 60px"></i>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="mt-3">--}}
{{--                                <div class="d-flex justify-content-center links" >--}}


{{--                                    <h5 style="font-family: Cairo"> {{__("reg.transaction id")}} : <span></span></h5>--}}

{{--                                    <br>--}}
{{--                                    <h3></h3>--}}
{{--                                    --}}{{--                                    {{__("reg.already have an account?")}} <a href="{{route("login")}}" class="text-primary ml-2"> {{__("reg.sign in")}}</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="mt-3">
                                <div class="d-flex justify-content-center links" {{__("reg.direction")}}>
                                    <a href="/pay" class="text-primary ml-2"> {{__("reg.try again")}}</a>
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
