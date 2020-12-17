<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auto selling</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/mdb.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/mdb.min.css') }}">
<!-- Plugin file -->
<link rel="stylesheet" href="{{ URL::asset('assets/addons/datatables.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

</head>
<body>
<div id="app">
    {{--Start enter page index--}}
    <v-header></v-header>
    <router-view></router-view>
</div>

<scripts src="{{ URL::asset('assets/js/mba.js') }}"></scripts>
<scripts src="{{ URL::asset('assets/js/jquery.js') }}"></scripts>
<scripts src="{{ URL::asset('assets/js/bootstrap.js') }}"></scripts>
<scripts src="{{ URL::asset('assets/js/popper.js') }}"></scripts>

<script src="./js/app.js"></script>

<script>
  $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script>

</body>
</html>
