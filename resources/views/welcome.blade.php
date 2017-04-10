<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        Posts
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    @foreach($articles as $post)
                        <div class="well">
                            <h4>
                                <a href="{{ route('article.view', $post) }}">{{ $post->title }}</a>
                            </h4>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </body>
</html>
