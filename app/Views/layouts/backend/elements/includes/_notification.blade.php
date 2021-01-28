@switch(true)
    @case(session()->has('notification_success'))
        <div class="alert alert-success alert-dismissible fade show notification" role="alert">
            <strong>{{ session()->get('notification_success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @break

    @case(session()->has('notification_warning'))
        <div class="alert alert-danger alert-dismissible fade show notification" role="alert">
            <strong>{{ session()->get('notification_warning') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @break
@endswitch
