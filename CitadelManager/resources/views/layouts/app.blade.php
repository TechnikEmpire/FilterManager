<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Citadel service provider user manager.">
    <meta name="keywords" content="Content Filtering">
    <meta name="author" content="Jesse Nicholson">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Citadel') }}</title>
    
    <!-- Styles -->    
    <link href="{{ asset('css/metro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metro-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metro-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dragula.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/citadel-main.css') }}" rel="stylesheet">
    <!-- re-enable these when we manage to make datatables.responsive work properly.. -->
    <!-- <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/responsive.datatables.min.css') }}" rel="stylesheet"> -->
    
    <!-- Scripts -->    
    <script src="{{ asset('js/dragula.min.js') }}"></script>
    <!-- Require for form/data validation. -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/additional-methods.min.js') }}"></script>

    <script src="{{ asset('js/metro.min.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            });
        })
    </script>
</head>
<body class="bg-grayLighter" style="overflow: hidden;">
    @yield('navbar')
    @yield('content')
</body>
</html>
