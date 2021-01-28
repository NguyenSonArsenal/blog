@extends('layouts.backend.main')

@push('scripts')
    <script src="{{ asset('backend/js/pages/post.js') }}"></script>
@endpush

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title inline_auto">
                        <div class="x_title__title font-weight-bold">Thêm mới bài viết</div>
                        <div class="x_panel__action">
                            <a class="btn btn-primary btn-sm" href="{{ backendRouter('post.list') }}">Quay lại</a>
                        </div>
                    </div>

                    <div class="x_content">
                        <div class="x_content">
                            <form class="form-horizontal store-update-entity" action="{{backendRouter('post.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @include('backend.post._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
