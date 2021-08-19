@extends("nav")
@section("content")
    <section class="m-profile setting-wrapper" {{__("reg.direction")}} style="font-family: Cairo">
        <div class="container">
            <h4 class="main-title mb-4 text-center" style="font-family: Cairo">{{__("settings.account settings")}}</h4>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="sign-user_card text-center">
                        <img src="@if(auth()->user()->img) {{asset("storage/" . auth()->user()->img)}} @else images/user/user.jpg @endif" class="rounded-circle img-fluid d-block mx-auto mb-3" alt="user">
                        <h4 class="mb-3">{{auth()->user()->name}}</h4>
{{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>--}}
                        <a href="/profile" class="edit-icon text-primary">{{__("settings.change")}}</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="sign-user_card">
                        <h5 class="mb-3 pb-3 a-border">{{__("settings.personal details")}}
                            <div class="col-md-4 text-md-right text-left">
                                <a href="/profile" class="text-primary">{{__("settings.change")}}</a>
                            </div>
                        </h5>
                        <div class="row align-items-center justify-content-between mb-3">
                            <div class="col-md-8">
                                <span class="text-light font-size-13 ">{{__("reg.email")}}</span>
                                <p class="mb-0">{{auth()->user()->email}}</p>
                            </div>
{{--                            <div class="col-md-4 text-md-right text-left">--}}
{{--                                <a href="#" class="text-primary">Change</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="row align-items-center justify-content-between mb-3">
                            <div class="col-md-8">
                                <span class="text-light font-size-13">{{__("reg.password")}}</span>
                                <p class="mb-0">**********</p>
                            </div>
                            <form action="/update/password" method="post">
                                @csrf
                                <update-password changing="{{__("settings.change")}}" cancal="{{__("settings.cancel")}}" passlang="{{__("settings.new pass")}}"></update-password>

                            </form>
{{--                            <div class="col-md-4 text-md-right text-left">--}}
{{--                                <a href="#" class="text-primary">Change</a>--}}
{{--                            </div>--}}
                        </div>
{{--                        <div class="row align-items-center justify-content-between mb-3">--}}
{{--                            <div class="col-md-8">--}}
{{--                                <span class="text-light font-size-13">Date of Birth</span>--}}
{{--                                <p class="mb-0">08-03-1995</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 text-md-right text-left">--}}
{{--                                <a href="#" class="text-primary">Change</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-8">
                                <span class="text-light font-size-13">{{__("settings.lang")}}</span>
                                <p class="mb-0">
                                    @if(app()->getLocale() == "ar")
                                        العربية
                                    @elseif(app()->getLocale() == "en")
                                    English
                                    @endif
                                </p>
                            </div>
    {{--                            <div class="col-md-4 text-md-right text-left">--}}
    {{--                                <a href="#" class="text-primary">Change</a>--}}
    {{--                            </div>--}}
                        </div>
                            <h5 class="mb-3 mt-4 pb-3 a-border ">{{__("settings.billing details")}}</h5>
                        @can("cancel-subscribtion")
                        <div class="row justify-content-between mb-3">
                                <div class="col-md-8 r-mb-15">
                                    <p>{{__("settings.Your next billing date is")}} {{auth()->user()->pck_end}}</p>
                                    <a href="/cancel/subscription" class="btn btn-hover">{{__("settings.cancel membership")}}</a>
                                </div>
                                {{--                            <div class="col-md-4 text-md-right text-left">--}}
                                {{--                                <a href="#" class="text-primary">Update Payment info</a>--}}
                                {{--                            </div>--}}
                            </div>
                        @endcan

                        @can("pay-subscribtion")
                            <div class="row justify-content-between mb-3">
                                <div class="col-md-8 r-mb-15">
                                    <a href="/pay" class="btn btn-hover">{{__("settings.pay now")}}</a>
                                </div>
                                {{--                            <div class="col-md-4 text-md-right text-left">--}}
                                {{--                                <a href="#" class="text-primary">Update Payment info</a>--}}
                                {{--                            </div>--}}
                            </div>
                        @endcan

                        <h5 class="mb-3 mt-4 pb-3 a-border">{{__("settings.plan details")}}</h5>
                        <div class="row justify-content-between mb-3">
                            <div class="col-md-8">
                                <p>
                                    @if(auth()->user()->package == \App\Models\User::IS_YEARLY)
                                        {{__("reg.yearly bundle")}}
                                    @elseif(auth()->user()->package == \App\Models\User::IS_THREE_MONTH)
                                    {{__("reg.3 month bundle")}}
                                    @elseif(auth()->user()->package == \App\Models\User::IS_MONTHLY)
                                        {{__("reg.monthly bundle")}}
                                    @endif

                                </p>
                            </div>
                            <form action="/update/bundle" method="post">
                                @csrf
                                <update-bundle changing="{{__("settings.change")}}" floating="{{__("reg.float")}}" membership="{{__("reg.membership")}}" select_membership="{{__("reg.select membership")}}" yearly_bundle="{{__("reg.yearly bundle")}}" three_month_bundle="{{__("reg.3 month bundle")}}" monthly_bundle="{{__("reg.monthly bundle")}}" cancal="{{__("settings.cancel")}}"></update-bundle>
                            </form>

                        </div>

                        @if($devices->count() > 0)
                            <h5 class="mb-3 pb-3 mt-4 a-border">{{__("settings.log in activities")}}</h5>
                            <div class="row text-center" >
                                <div class="col-12 setting">
                                    <div class="text-center">

                                        @foreach($devices as $device)
                                            <div class="row">
                                                {{__("settings.the account has been logged in from browser")}}
                                                ({{$device->browser}}) {{$device->updated_at->diffForHumans()}}
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        @endif
                        <h5 class="mb-3 pb-3 mt-4 a-border">{{__("settings.settings")}}</h5>
                        <div class="row" {{__("reg.direction")}}>
                            <div class="col-12 setting">
                                <div class="text-center">

                                </div>
                                <form action="/signout/all" method="post">
                                    @csrf
                                    <signout-devices logout="{{__("settings.logout of all devices")}}" passLang="{{__("reg.password")}}" cancal="{{__("settings.cancel")}}"></signout-devices>
                                </form>

{{--                                <a href="/signout/all" class="text-body d-block mb-1">Sign out of all devices </a>--}}
{{--                                <a href="#" class="text-body d-block">Download your person information</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
