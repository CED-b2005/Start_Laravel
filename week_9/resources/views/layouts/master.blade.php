<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/vendors/colorbox/example3/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/css/animate.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('source/assets/dest/css/huong-style.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/css/style.css') }}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('eshopper/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('eshopper/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('eshopper/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('eshopper/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('eshopper/images/ico/apple-touch-icon-57-precomposed.png') }}">

</head>

<body>

    @include('common.header')
    <div class="container">
        @yield('content')
    </div>
    @include('common.footer')

</body>

</html>