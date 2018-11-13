<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart C3</title>

    </head>
    <body>
        <div id="app">
            {!! $chart->container() !!}
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>

        {!! $chart->script() !!}
    </body>
</html>
