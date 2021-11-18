<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="icon" href="{{ asset('favicon.png')  }}" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css')  }}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js')  }}"></script>
{{--    <script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js')  }}"></script>--}}
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')  }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-filestyle.min.js')  }}"></script>

</head>
<body>
<video width="400" height="300" controls="controls" poster="img/portfolio_pic6.jpg">
    <source src="{{asset('video/123.mp4')}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
    Тег video не поддерживается вашим браузером.
{{--    <a href="video/duel.mp4">Скачайте видео</a>.--}}
</video>
<header id="header_wrapper">
    @yield('header')

@if(session('status'))
    <div class = "alert alert-success">
        {{session('status')}}
    </div>
@endif
@if(count($errors)>0)
    <div class = "alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>
@endif
</header>
    @yield('content')
</body>
</html>