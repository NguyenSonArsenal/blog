<input name="toggle_status" type="checkbox" data-size="mini" class="btn-xs"
       data-offstyle="danger" data-onstyle="primary" disabled data-toggle="toggle" {{ $entity->isStatusOn() ? "checked" : '' }}>
