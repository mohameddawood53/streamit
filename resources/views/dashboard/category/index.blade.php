@extends('dashboard.sidebar')

@section('sidebar')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title" >
                                <h4 class="card-title" style="font-family: Cairo">{{__("dashboard.cat list")}}</h4>
                            </div>

                                <div class="iq-card-header-toolbar d-flex align-items-center" style="font-family: Cairo">
                                    <a href="{{route("categories.add")}}" class="btn btn-primary">{{__("dashboard.add category")}}</a>
                                </div>

                        </div>
                        <div class="iq-card-body" style="font-family: Cairo">
                            <div class="table-view">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="col-sm-12 col-md-6">--}}
                                    {{--                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="col-sm-12 col-md-6">--}}
                                    {{--                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="data-tables table movie_table dataTable no-footer" style="width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                <tr role="row">
{{--                                                    <th style="width: 54px;" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="font-family: Cairo">{{__("dashboard.profile")}}</th>--}}
                                                    <th style="width: 39px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">{{__("dashboard.category name")}}</th>
                                                    <th style="width: 69px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending">{{__("dashboard.category type")}}</th>
{{--                                                    <th style="width: 109px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">{{__("dashboard.email")}}</th>--}}
{{--                                                    --}}{{--                                                    <th style="width: 63px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Country</th>--}}
{{--                                                    <th style="width: 50px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">{{__("dashboard.role")}}</th>--}}
{{--                                                    <th style="width: 34px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Join Date: activate to sort column ascending">{{__("dashboard.join date")}}</th>--}}
                                                    <th style="width: 50px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">{{__("dashboard.action")}}</th></tr>
                                                </thead>
                                                <tbody>






                                                @foreach($cats as $cat)
                                                    <tr role="row" class="odd">
{{--                                                        <td class="sorting_1">--}}
{{--                                                            <img src="@if($user->img) {{asset("storage/" . $user->img)}} @else {{asset("images/user/user.jpg")}} @endif" class="img-fluid avatar-50" alt="author-profile" style="border-radius: 5px">--}}
{{--                                                        </td>--}}
                                                        <td>{{$cat->name}}</td>
                                                        <td>
                                                           {{!empty($cat->parent_id) ? __("dashboard.sub cat"): __("dashboard.main cat")}}
                                                        </td>
{{--                                                        <td>{{$user->email}}</td>--}}
                                                        {{--                                                    <td>India</td>--}}
{{--                                                        <td><span class="badge--}}
{{--                                                                @if($user->role_id == \App\Models\User::IS_ADMIN)--}}
{{--                                                                iq-bg-success--}}
{{--@elseif($user->role_id == \App\Models\User::IS_User)--}}
{{--                                                                iq-bg-primary--}}
{{--@else--}}
{{--                                                                iq-bg-warning--}}
{{--@endif">--}}
{{--                                                                {{--}}
{{--                                                                    $user->role->role--}}
{{--                                                                }}</span></td>--}}
{{--                                                        <td>{{date("Y/m/d",strtotime($user->created_at))}}</td>--}}
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">

                                                                    <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{__("dashboard.edit")}}" href="{{route("categories.edit" , $cat->id)}}"><i class="ri-pencil-line"></i></a>


                                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{__("dashboard.delete")}}" href="{{route("categories.destroy" , $cat->id)}}"><i class="ri-delete-bin-line"></i></a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{--                                                <tr role="row" class="even">--}}
                                                {{--                                                    <td class="sorting_1">--}}
                                                {{--                                                        <img src="../assets/images/user/03.jpg" class="img-fluid avatar-50" alt="author-profile">--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                    <td>Brock Lee</td>--}}
                                                {{--                                                    <td>2586253125</td>--}}
                                                {{--                                                    <td>brock@gmail.com</td>--}}
                                                {{--                                                    <td>India</td>--}}
                                                {{--                                                    <td><span class="badge iq-bg-primary">Block</span></td>--}}
                                                {{--                                                    <td>12 Jun, 2020</td>--}}
                                                {{--                                                    <td>--}}
                                                {{--                                                        <div class="flex align-items-center list-user-action">--}}
                                                {{--                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>--}}
                                                {{--                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                </tr>--}}
                                                {{--                                                <tr role="row" class="odd">--}}
                                                {{--                                                    <td class="sorting_1">--}}
                                                {{--                                                        <img src="../assets/images/user/05.jpg" class="img-fluid avatar-50" alt="author-profile">--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                    <td>Nick Allen</td>--}}
                                                {{--                                                    <td>6523456856</td>--}}
                                                {{--                                                    <td>nick@gmail.com</td>--}}
                                                {{--                                                    <td>India</td>--}}
                                                {{--                                                    <td><span class="badge iq-bg-warning">Pending</span></td>--}}
                                                {{--                                                    <td>10 Aug, 2020</td>--}}
                                                {{--                                                    <td>--}}
                                                {{--                                                        <div class="flex align-items-center list-user-action">--}}
                                                {{--                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>--}}
                                                {{--                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                </tr>--}}
                                                {{--                                                <tr role="row" class="even">--}}
                                                {{--                                                    <td class="sorting_1">--}}
                                                {{--                                                        <img src="../assets/images/user/08.jpg" class="img-fluid avatar-50" alt="author-profile">--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                    <td>Lynn Guini</td>--}}
                                                {{--                                                    <td>2563456589</td>--}}
                                                {{--                                                    <td>lynn@gmail.com</td>--}}
                                                {{--                                                    <td>India</td>--}}
                                                {{--                                                    <td><span class="badge iq-bg-success">Active</span></td>--}}
                                                {{--                                                    <td>29 Jul, 2020</td>--}}
                                                {{--                                                    <td>--}}
                                                {{--                                                        <div class="flex align-items-center list-user-action">--}}
                                                {{--                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>--}}
                                                {{--                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                </tr>--}}
                                                {{--                                                <tr role="row" class="odd">--}}
                                                {{--                                                    <td class="sorting_1">--}}
                                                {{--                                                        <img src="../assets/images/user/06.jpg" class="img-fluid avatar-50" alt="author-profile">--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                    <td>Eric Shun</td>--}}
                                                {{--                                                    <td>5625456589</td>--}}
                                                {{--                                                    <td>eric@gmail.com</td>--}}
                                                {{--                                                    <td>India</td>--}}
                                                {{--                                                    <td><span class="badge iq-bg-primary">Block</span></td>--}}
                                                {{--                                                    <td>01 Aug, 2020</td>--}}
                                                {{--                                                    <td>--}}
                                                {{--                                                        <div class="flex align-items-center list-user-action">--}}
                                                {{--                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>--}}
                                                {{--                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                </tr>--}}
                                                {{--                                                <tr role="row" class="even">--}}
                                                {{--                                                    <td class="sorting_1">--}}
                                                {{--                                                        <img src="../assets/images/user/10.jpg" class="img-fluid avatar-50" alt="author-profile">--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                    <td>Marge Arita</td>--}}
                                                {{--                                                    <td>2563456589</td>--}}
                                                {{--                                                    <td>marge@gmail.com</td>--}}
                                                {{--                                                    <td>India</td>--}}
                                                {{--                                                    <td><span class="badge iq-bg-warning">Pending</span></td>--}}
                                                {{--                                                    <td>09 May, 2020</td>--}}
                                                {{--                                                    <td>--}}
                                                {{--                                                        <div class="flex align-items-center list-user-action">--}}
                                                {{--                                                            <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>--}}
                                                {{--                                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                </tr>--}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="col-sm-12 col-md-5">--}}
                                    {{--                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="col-sm-12 col-md-7">--}}
                                    {{--                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
