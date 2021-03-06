@include('_partials.navigation')
@include('_partials.header')
@include('_partials.post-header')
@include('_partials.footer')
@include('_partials.box-ad')
@include('_partials.analytics')

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $page->siteDescription }}">
        <meta name="keywords" content="{{ 'laravel, php, aws, tutorial, laravel beginner, laravel for newbie, ' . $page->keywords  }}">

        <title>
            {{ $page->siteTitle }} - {{ trim($page->getUrl(), '/') == $page->baseUrl ? $page->siteDescription : $page->title }}
        </title>

        <!-- Bootstrap Core CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="/css/clean-blog.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        @yield('navigation')

        @if(trim($page->getUrl(), '/') == $page->baseUrl)
            @yield('header')
        @else
            @yield('post-header')
        @endif

        @yield('contents')

        <hr>

        @yield('footer')

        @yield('analytics')

        <!-- jQuery -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="/js/clean-blog.min.js"></script>
    </body>

</html>
