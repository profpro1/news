<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Новости</title>
</head>
<body>

<div class="head">
    <div class="content">
        <h1 class="title">Новости</h1>

        <div class="block">@foreach( $news as $el)
            <div class="cont">

                <div class="data">13.02.2020</div>
                <a href="{{ route('view',$el->id) }}"  class="news">{!!$el->title !!}</a>
                <p class="text">{!!$el->announce!!}</p>
            </div>
            @endforeach
        </div>

            <div class="page">Страницы:</div>
        {{ $news->onEachSide(100)->links() }}
    </div>
</div>


</body>
</html>
