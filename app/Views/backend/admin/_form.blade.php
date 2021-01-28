<div class="form-body">
    @if ($errors->any())
        <div class="error alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-body__input">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Họ và tên <span class="text-danger">(*)</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" value="{{ $entity->name }}" placeholder="Nhập họ và tên">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Email <span class="text-danger">(*)</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="email" value="{{ $entity->email }}"  placeholder="Nhập email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ảnh đại diện</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" name="avatar">
                    </div>
                </div>
            </div>
            <div class="col-sm-6"></div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-6">
            <div class="offset-sm-3">
                <button type="submit" class="btn btn-success">Gửi đi</button>
                <a class="btn btn-primary" href="{{ backendRouter('admin.list') }}">Quay lại</a>
            </div>
        </div>
    </div>
</div>
