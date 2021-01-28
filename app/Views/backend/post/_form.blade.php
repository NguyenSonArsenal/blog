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
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="fname" class="col-md-2 text-right control-label col-form-label">Tiêu đề <span class="text-danger">(*)</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="title" value="{{ $entity->title }}" placeholder="Nhập tiêu đề">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-2 text-right control-label col-form-label">Trạng thái</label>
                    <div class="col-md-8">
                        <div class="item_select_status">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status1" name="status" class="custom-control-input"
                                       {{ $entity->status == statusOn() ? "checked" : '' }}
                                       value="{{ statusOn() }}">
                                <label class="custom-control-label" for="status1">{{ statusOnAlias() }}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status2" name="status" class="custom-control-input"
                                       {{ $entity->status == statusOff() ? "checked" : '' }}
                                       value="{{ statusOff() }}">
                                <label class="custom-control-label" for="status2">{{ statusOffAlias() }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="featured_image" class="col-md-2 text-right control-label col-form-label">Ảnh đại diện</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" name="featured_image">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="short_description" class="col-md-1 text-right control-label col-form-label">Mô tả ngắn</label>
                    <div class="col-md-10">
                        <textarea id="short_description" name="short_description" class="form-control">{{ $entity->short_description }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="content" class="col-md-1 text-right control-label col-form-label">Nội dung <span class="text-danger">(*)</span></label>
                    <div class="col-md-10">
                        <input name="content" type="hidden" value="{{$entity->content}}">
                        <div id="editor-quill"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <div class="offset-sm-1">
                <button type="submit" class="btn btn-success">Gửi đi</button>
                <a class="btn btn-primary" href="{{ backendRouter('post.list') }}">Quay lại</a>
            </div>
        </div>
    </div>
</div>
