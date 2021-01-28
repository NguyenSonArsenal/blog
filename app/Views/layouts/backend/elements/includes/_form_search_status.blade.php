<div class="my-select2">
    <select class="my-select2__select2 select2-teacher select2-teacher-wrapper select2-wrapper" name="status">
        <option selected readonly value="-1">--- Trạng thái ---</option>
        <option value="{{ statusOn() }}" {{ !is_null(request('status_eq')) && (int)request('status_eq') === statusOn() ? "selected" : "" }}>{{ statusOnAlias() }}</option>
        <option value="{{ statusOff() }}" {{ (int)request('status_eq') === statusOff() ? "selected" : "" }}>{{ statusOffAlias() }}</option>
    </select>
</div>
