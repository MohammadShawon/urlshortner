<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gofan</title>

    </head>
    <body>
        <p id="url" title="{{$url}}" url=""></p>
        <script type="text/javascript">
            var $url = document.getElementById('url');
            console.log($url.title);
            window.location = $url.title;
        </script>
    </body>
</html>
