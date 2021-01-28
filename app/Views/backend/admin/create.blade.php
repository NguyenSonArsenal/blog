@extends('layouts.backend.main')

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title inline_auto">
                        <div class="x_title__title font-weight-bold">Thêm mới admin</div>
                        <div class="x_panel__action">
                            <a class="btn btn-primary btn-sm" href="{{ backendRouter('admin.list') }}">Quay lại</a>
                        </div>
                    </div>

                    <div class="x_content">
                        <div class="x_content">
                            <form action="{{backendRouter('admin.store')}}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                                @csrf
                                @include('backend.admin._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
