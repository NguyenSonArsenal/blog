@extends('layouts.backend.main')

@push('styles')
    <link href="{{ asset('backend/css/pages/user.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title title_heading d-flex">
                        <h1>Thêm mới User</h1>
                        <div class="nav navbar-right panel_toolbox">
                            <a href="{{ backendRouter('user.list') }}">
                                <button type="button" class="btn btn-primary btn-sm">Quay lại</button>
                            </a>
                        </div>
                    </div>

                    <div class="x_content">
                        <div class="x_content">
                            <form action="{{ backendRouter('user.store') }}" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if ($errors->any())
                                    <div class="error alert alert-danger">
                                        <ul class="list-errors">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 text-right control-label col-form-label">Họ và tên <span class="text-danger">(*)</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name" value="{{ $entity->name }}" placeholder="Nhập họ và tên">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 text-right control-label col-form-label">Họ và tên <span class="text-danger">(*)</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="email" value="{{ $entity->email }}" placeholder="Nhập địa chỉ email: example@gmail.com">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-2 text-right control-label col-form-label">Họ và tên <span class="text-danger">(*)</span></label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="phone_number" value="{{ $entity->phone_number }}" placeholder="Nhập số điện thoại">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="avatar" class="col-md-2 text-right control-label col-form-label">Ảnh đại diện</label>
                                    <div class="col-md-5">
                                        <input type="file" class="form-control" name="avatar">
                                    </div>
                                </div>

                                <!-- @todo add file gender, date_of_birth, address -->

                                <div class="ln_solid"></div>

                                <div class="form-group row">
                                    <div class="col-md-4 offset-md-2">
                                        <button type="submit" class="btn btn-primary btn-md">Gửi đi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
