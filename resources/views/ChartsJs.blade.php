<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart Js</title>

    </head>
    <body>
        <div class='row'>
        <div class='col-md-4'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Chart</h3>
                    
                </div>
                <div class="box-body">
                  <div class="Card">

                    <h2>Definded Data</h2><br/>
                    <div id="app">
                      {!! $chart1->container() !!}
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                    {!! $chart1->script() !!}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div>
        <div class='col-md-4'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Chart</h3>
                    
                </div>
                <div class="box-body">
                  <div class="Card">

                    <h2>Football Fans</h2><br/>
                    <div id="app">
                        {!! $chart2->container() !!}
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                    {!! $chart2->script() !!}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-4'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Chart</h3>
                    
                </div>
                <div class="box-body">
                  <div class="Card">

                    <h2>Targets</h2><br/>
                    <div id="app">
                        {!! $chart3->container() !!}
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                    {!! $chart3->script() !!}
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
    </body>
</html>
