<div class="card text-white bg-dark mb-3">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
<script>
    $('#date-format').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm' });
</script>
</div>