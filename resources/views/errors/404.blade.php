@extends('errors.header')

@section('content')

    <div class="wrapper">
        <div class="container pt-5">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 text-center align-self-center" style="font-family: Cairo;">
                    <div class="iq-error position-relative">
                        <img src="{{asset("images/error/404.png")}}" class="img-fluid iq-error-img" alt="">
                        <h2 class="mb-0 mt-4" style="font-family: Cairo;">{{__("error.404")}}</h2>
                        <p>{{__("error.check page")}}</p>
                        <a class="btn btn-primary mt-3" href="/"><i class="ri-home-4-line"></i> {{__("home.home")}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
