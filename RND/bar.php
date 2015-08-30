<!DOCTYPE html>
<!-- saved from url=(0074)file:///Users/duraimurugangovindaraj/Downloads/dist/examples/monchrt.html# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

    <title>Bar Charts</title>

    <!--link rel="stylesheet" type="text/css" href="../jquery.jqplot.min.css" /-->
    <!--link rel="stylesheet" type="text/css" href="examples.min.css" /-->
    <!--link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shCoreDefault.min.css" />
    <link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shThemejqPlot.min.css" /-->
  
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->
    <script type="text/javascript" src="../javascript/jquery.min.js"></script>
    
   
</head>
<body>
   
      <div class="colleft">
        <div class="col1" id="example-content">

  
    
    <div><span>Status:</span><span id="info1">series: 0, point: 3, data: 4,100</span></div>
        
    <div id="chart1" style="margin-top: 20px; margin-left: 20px; width: 300px; height: 300px; position: relative;" class="jqplot-target"><canvas width="300" height="300" class="jqplot-base-canvas" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="jqplot-title" style="height: 0px; width: 0px;"></div><div class="jqplot-axis jqplot-xaxis" style="position: absolute; width: 300px; height: 18px; left: 0px; bottom: 0px;"><div class="jqplot-xaxis-tick" style="position: absolute; left: 39.25px;">Durai</div><div class="jqplot-xaxis-tick" style="position: absolute; left: 102.75px;">Murali</div><div class="jqplot-xaxis-tick" style="position: absolute; left: 170.75px;">Palani</div><div class="jqplot-xaxis-tick" style="position: absolute; left: 233.75px;">Sridhar</div></div><div class="jqplot-axis jqplot-yaxis" style="position: absolute; height: 300px; width: 24px; left: 0px; top: 0px;"><div class="jqplot-yaxis-tick" style="position: absolute; top: 273px;">0</div><div class="jqplot-yaxis-tick" style="position: absolute; top: 205px;">200</div><div class="jqplot-yaxis-tick" style="position: absolute; top: 137px;">400</div><div class="jqplot-yaxis-tick" style="position: absolute; top: 69px;">600</div><div class="jqplot-yaxis-tick" style="position: absolute; top: 1px;">800</div></div><canvas width="300" height="300" class="jqplot-grid-canvas" style="position: absolute; left: 0px; top: 0px;"></canvas><canvas width="266" height="272" class="jqplot-series-shadowCanvas" style="position: absolute; left: 24px; display: block; top: 10px;"></canvas><canvas width="266" height="272" class="jqplot-series-canvas" style="position: absolute; left: 24px; display: block; top: 10px;"></canvas><div class="jqplot-point-label jqplot-series-0 jqplot-point-3" style="position: absolute; left: 244.75px; top: 224px; display: block;">100</div><div class="jqplot-point-label jqplot-series-0 jqplot-point-2" style="position: absolute; left: 178.25px; top: 20px; display: block;">700</div><div class="jqplot-point-label jqplot-series-0 jqplot-point-1" style="position: absolute; left: 111.75px; top: 54px; display: block;">600</div><div class="jqplot-point-label jqplot-series-0 jqplot-point-0" style="position: absolute; left: 45.25px; top: 224px; display: block;">100</div><canvas width="266" height="272" class="jqplot-barRenderer-highlight-canvas" style="position: absolute; left: 24px; top: 10px;"></canvas><canvas width="266" height="272" class="jqplot-event-canvas" style="position: absolute; left: 24px; top: 10px;"></canvas></div>


<!--pre class="code brush:js"></pre-->

      
<script type="text/javascript">

$(document).ready(function(){
        $.jqplot.config.enablePlugins = true;
        var s1 = [100, 600, 700, 100];
        var ticks = ['Durai', 'Murali', 'Palani', 'Sridhar'];
        
        plot1 = $.jqplot('chart1', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
            highlighter: { show: true }
        });
    
        $('#chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
                $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
            }
        );
    });
</script>
    
  <!-- End example scripts -->

<!-- Don't touch this! -->


    <script type="text/javascript" src="./Bar Charts_files/jquery.jqplot.min.js"></script>
    <!--script type="text/javascript" src="syntaxhighlighter/scripts/shCore.min.js"></script-->
    <!--script type="text/javascript" src="syntaxhighlighter/scripts/shBrushJScript.min.js"></script-->
    <!--script type="text/javascript" src="syntaxhighlighter/scripts/shBrushXml.min.js"></script-->
<!-- Additional plugins go here -->

  <script type="text/javascript" src="../javascript/jqplot.barRenderer.min.js"></script>
  <script type="text/javascript" src="../javascript/jqplot.pieRenderer.min.js"></script>
  <script type="text/javascript" src="../javascript/jqplot.categoryAxisRenderer.min.js"></script>
  <script type="text/javascript" src="../javascript/jqplot.pointLabels.min.js"></script>

<!-- End additional plugins -->

        </div>
                       </div>
       <!--script type="text/javascript" src="example.min.js"></script-->





</body></html>
