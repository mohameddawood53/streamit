@extends('errors.header')

@section('content')

    <div class="wrapper">
        <div class="container pt-5">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 text-center align-self-center" style="font-family: Cairo;">
                    <div class="iq-error position-relative">
                        <img src="{{asset("images/error/500.png")}}" class="img-fluid iq-error-img" alt="">
                        <h1 class="text-in-box" style="font-family: Cairo;" >500</h1>
                        <h2 class="mb-0" style="font-family: Cairo;">{{__("error.500")}}</h2>
                        <p style="font-family: Cairo;">{{__("error.check 500 page")}}</p>
                        <a class="btn btn-primary mt-3" href="/" style="font-family: Cairo;"><i class="ri-home-4-line"></i> {{__("home.home")}}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
