@extends('layouts.backend.main')

@push('styles')
    <link href="{{ asset('backend/css/pages/user.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                @include('layouts.backend.elements.includes._notification')

                <div class="x_panel">
                    <div class="x_title title_heading d-flex">
                        <h1>Danh sách User</h1>
                        <div class="nav navbar-right panel_toolbox">
                            <a href="{{ backendRouter('user.create') }}">
                                <button type="button" class="btn btn-primary btn-sm">Thêm mới</button>
                            </a>
                        </div>
                    </div>

                    <!-- From search -->
                    <form method="GET" action="javascript:void(0)" class="search-admin form-horizontal">
                    </form>

                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="list-admin table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="th_stt column-title">ID</th>
                                        <th class="th_name column-title">Tên</th>
                                        <th class="th_avatar column-title">Ảnh đại diện</th>
                                        <th class="th_stt column-title">Email</th>
                                        <th class="th_stt column-title">Số điện thoại</th>
                                        <th class="th_stt column-title">Giới tính</th>
                                        <th class="th_stt column-title">Ngày sinh</th>
                                        <th class="th_time column-title" width="175px">Địa chỉ</th>
                                        <th class="column-title no-link last text-center"><span class="nobr">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $key => $entity)
                                    <tr class="table-responsive__tr even pointer">
                                        <td>{{ $entity->getKey() }}</td>
                                        <td>{{ $entity->name }} </td>
                                        <td>
                                            @if($entity->avatar)
                                                <a href="javascript:void(0)">
                                                    <img width="35px" src="{{ $entity->avatar }}" alt="Image name">
                                                </a>
                                            @else
                                                <a href="javascript:void(0)">
                                                    <img width="35px" src="{{asset('/backend/images/no_image.png')}}" alt="Image Name" >
                                                </a>
                                            @endif
                                        </td>
                                        <td>{{ $entity->email }} </td>
                                        <td>{{ $entity->phone_number }} </td>
                                        <td>{{ $entity->date_of_birth }} </td>
                                        <td>{!! $entity->showUserGender()  !!} </td>
                                        <td class="address two_dots">{{ $entity->address }} </td>
                                        <td class="text-right">
                                            <div class="comment-footer">
                                                <a href="{{ backendRouter('user.edit', ['id' => $entity->getKey()]) }}">
                                                    <button type="button" class="btn btn-primary btn-sm">Sửa</button>
                                                </a>
                                                <a href="#modal_confirm_delete"
                                                   class="btn-danger btn btn-sm modal_confirm_delete rounded"
                                                   data-toggle="modal"
                                                   data-form-action="{{ backendRouter('user.destroy', ['id' => $entity->id]) }}"
                                                >
                                                    Xóa
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            {{ $entities->appends(request()->all())->links('layouts.backend.elements.structures._pagination')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
