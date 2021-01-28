<!-- Mainly scripts -->
<script src="{{ asset('backend/vendors/jquery/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('backend/vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('backend/vendors/bootstrap4/bootstrap4.js') }}"></script>
<script src="{{ asset('backend/vendors/loadingoverlay/loadingoverlay.min.js') }}"></script>
<script src="{{ asset('backend/vendors/dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('backend/vendors/dataTables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/vendors/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/vendors/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('backend/vendors/quill/dist/quill.min.js') }}"></script>

@stack('plugin_js')

<script src="{{ asset('backend/js/common.js') }}"></script>

@stack('scripts')
