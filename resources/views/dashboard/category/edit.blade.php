@extends('dashboard.sidebar')

@section('sidebar')
    <div id="content-page" class="content-page" style="font-family: Cairo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" >
                                <h4 class="card-title" style="font-family: Cairo">{{__("dashboard.edit cat")}}</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{route("categories.update", $category->id)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control @error("name_ar") is-invalid @enderror" placeholder="{{__("dashboard.category name")}} Ar" name="name_ar" value="{{$category->getTranslation('name', 'ar')}}">
                                            @error('name_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control @error("name_en") is-invalid @enderror" placeholder="{{__("dashboard.category name")}} En" name="name_en" value="{{$category->getTranslation('name', 'en')}}">
                                            @error('name_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        {{--                                        <div class="form-group">--}}
                                        {{--                                            <textarea id="text" name="text" rows="5" class="form-control" placeholder="Description"></textarea>--}}
                                        {{--                                        </div>--}}
                                        <add-category labl="{{__("dashboard.category type")}}"
                                                      selectcat="{{__("dashboard.choose category type")}}"
                                                      main="{{__("dashboard.main category")}}"
                                                      nestedmain="{{__("dashboard.related to main")}}"
                                                      nestedsub="{{__("dashboard.related to sub")}}"
                                                      chsemain="{{__("dashboard.choose main category")}}"
                                                      chsesub="{{__("dashboard.choose sub category")}}"
                                                      maincats="{{__("dashboard.main categories")}}"
                                                      subcats="{{__("dashboard.sub categories")}}"
                                                      inittype="
                                                      @if(empty($category->parent_id))
                                                          1
                                                      @elseif(empty($category->parent->parent_id) and !empty($category->parent_id))
                                                          2
                                                      @else
                                                          3
                                                      @endif"

                                        ></add-category>
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
                                            <button type="submit" class="btn btn-primary">{{__("dashboard.edit")}}</button>
                                            <a href="{{route("categories.index")}}" class="btn btn-danger">{{__("dashboard.back")}}</a>
{{--                                            <button type="reset" class="btn btn-danger">{{__("dashboard.reset")}}</button>--}}
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

@endsection

