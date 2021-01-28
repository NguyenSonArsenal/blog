@extends('layouts.backend.main')

@section('content')
    <div class="admin-wrapper">
        @include('layouts.backend.elements.includes._notification')
        <div class="x_panel">

            <div class="x_title inline_auto">
                <div class="x_title__title font-weight-bold">Bộ lọc</div>
            </div>

            <!-- From search -->
            <form method="GET" action="{{ backendRouter('admin.list') }}" id="form-search">
                <div class="form-row">
                    <div class="col-md-1">
                        <input type="text" name="id_eq" class="form-control" placeholder="ID" value="{{request('id_eq')}}">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="name_contains" class="form-control" placeholder="Họ tên" value="{{request('name_contains')}}">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="email_contains" class="form-control" placeholder="Email" value="{{request('email_contains')}}">
                    </div>
                    <div class="col-md-2">
                        @include('layouts.backend.elements.includes._form_search_status')
                    </div>
                </div>

                <div class="form-search__btn_control">
                    <button type="submit" class="btn btn-primary btn-sm">Tìm kiếm</button>
                </div>
            </form>

            <div class="x_title inline_auto">
                <div class="x_title__title font-weight-bold">Danh sách admin</div>
                <div class="x_panel__action">
                    <a class="btn btn-primary btn-sm" href="{{ backendRouter('admin.create') }}">Thêm mới</a>
                </div>
            </div>

            <div class="x_content">
                <div class="table-responsive">
                    <table class="list-admin table table-striped">
                        <thead>
                            <tr class="headings">
                                <th class="th_stt column-title">STT</th>
                                <th class="th_name column-title">Tên</th>
                                <th class="th_stt column-title">Email</th>
                                <th class="th_avatar column-title">Ảnh đại diện</th>
                                <th class="th_time column-title">Thời gian tạo</th>
                                <th class="th_time column-title">Trạng thái</th>
                                <th class="column-title no-link last text-right"><span class="nobr">Hành động</span></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($entities as $key => $entity)
                            <tr class="tr_admin even pointer">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $entity->name }} </td>
                                <td>{{ $entity->email }} </td>
                                <td>
                                    @if($entity->avatar)
                                        <a href="javascript:void(0)">
                                            <img width="35px" src="{{ $entity->avatar }}" alt="Image name">
                                        </a>
                                    @else
                                        <a href="javascript:void(0)">
                                            <img width="35px" src="{{asset('/backend/images/no_image.png')}}" alt="Image Name">
                                        </a>
                                    @endif
                                </td>
                                <td> {{ $entity->getCreatedAt() }}</td>
                                <td>
                                    @include('layouts.backend.elements.includes._status')
                                </td>
                                <td class="text-right">
                                    <div class="comment-footer">
                                        <a href="#">
                                            <button type="button" class="btn btn-primary btn-xs">Sửa</button>
                                        </a>
                                        <a href="#modal_confirm_delete"
                                           class="btn-danger btn btn-xs modal_confirm_delete rounded"
                                           data-toggle="modal"
                                           data-form-action="{{ backendRouter('admin.destroy', ['id' => $entity->id]) }}"
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
                    {{ $entities->appends(\Illuminate\Support\Facades\Request::all())->links('layouts.backend.elements.structures._pagination')}}
                </div>
            </div>
        </div>
    </div>
@stop
