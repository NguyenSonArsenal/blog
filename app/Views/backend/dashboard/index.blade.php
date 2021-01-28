@extends('layouts.backend.main')

@section('content')
    <div class="admin-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                @include('layouts.backend.elements.includes._notification')

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Trang Dashboard</h2>
                        <div class="clearfix"></div>
                    </div>

                    <!-- From search -->
                    <form method="GET" action="javascript:void(0)" class="search-admin form-horizontal">
                    </form>

                    <div class="x_content">
                        <div class="table-responsive">
                            Trang Dashboard
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
