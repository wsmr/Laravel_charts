<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart Fusion</title>

    </head>
    <body>
        <div id="app">
            {!! $chart->container() !!}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js" charset="utf-8"></script>

        {!! $chart->script() !!}
    </body>
</html>
