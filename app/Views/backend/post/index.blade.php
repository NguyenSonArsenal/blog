@extends('layouts.backend.main')

@section('content')
    <div class="admin-wrapper">
        @include('layouts.backend.elements.includes._notification')
        <div class="x_panel">

            <div class="x_title inline_auto">
                <div class="x_title__title font-weight-bold">Bộ lọc</div>
            </div>

            <!-- From search -->
            <form method="GET" action="{{ backendRouter('post.list') }}" id="form-search">
                <div class="form-row">
                    <div class="col-md-1">
                        <input type="text" name="id" class="form-control" placeholder="ID" value="{{request('id')}}">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{request('title')}}">
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
                <div class="x_title__title font-weight-bold">Danh sách bài viết</div>
                <div class="x_panel__action">
                    <a class="btn btn-primary btn-sm" href="{{ backendRouter('post.create') }}">Thêm mới</a>
                </div>
            </div>

            <div class="x_content">
                <div class="table-responsive">
                    <table class="list-admin table table-striped">
                        <thead>
                            <tr class="headings">
                                <th class="th_stt column-title">STT</th>
                                <th class="th_name column-title" width="300px">Tiêu đề</th>
                                <th class="th_avatar column-title">Ảnh đại diện</th>
                                <th class="th_avatar column-title" width="350px">Mô tả ngắn</th>
                                <th class="th_time column-title">Thời gian tạo</th>
                                <th class="th_time column-title">Trạng thái</th>
                                <th class="column-title no-link last text-right"><span class="nobr">Hành động</span></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($entities as $key => $entity)
                            <tr class="tr_admin even pointer">
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <span class="two_dots">
                                        {{ $entity->title }}
                                    </span>
                                </td>
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
                                <td>
                                    <span class="two_dots">
                                        {{ $entity->short_description }}
                                    </span>
                                </td>
                                <td> {{ $entity->getCreatedAt() }}</td>
                                <td>
                                    @include('layouts.backend.elements.includes._status')
                                </td>
                                <td class="text-right">
                                    <div class="comment-footer">
                                        <a href="{{ backendRouter('post.edit', ['id' => $entity->getKey()]) }}">
                                            <button type="button" class="btn btn-primary btn-xs">Sửa</button>
                                        </a>
                                        <a href="#modal_confirm_delete"
                                           class="btn-danger btn btn-xs modal_confirm_delete rounded"
                                           data-toggle="modal"
                                           data-form-action="{{ backendRouter('post.destroy', ['id' => $entity->id]) }}"
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
