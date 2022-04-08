<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('plugins/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/admin/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/admin/css/bootadmin.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>@yield('title', 'Vinculacón | Servicio Social')</title>
</head>
<body class="bg-light">

@include('admin.template.nav')
    <div class="content p-4">
        <h2 class="mb-4">@yield('title')</h2>
        <div class="card mb-4">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
<script src="{{asset('plugins/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('plugins/admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/admin/js/bootadmin.min.js')}}"></script>

</body>
</html>