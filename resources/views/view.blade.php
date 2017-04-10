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
                        {{ $post->title }}
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="well">
                        {{ $post->content }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2>
                        Comments
                    </h2>

                    @foreach($post->comments as $comment)
                        <div class="row" style="margin-bottom: 16px; padding-bottom: 8px; border-bottom: 1px solid #aaa;">
                            <div class="col-md-2">
                                {{ $comment->user->name }}
                            </div>
                            <div class="col-md-10">
                                {{ $comment->content }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
