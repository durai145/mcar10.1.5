<!DOCTYPE html>

<html>
<head>

    <title>Bar Charts</title>

    <link rel="stylesheet" type="text/css" href="../jquery.jqplot.min.css" />
    <link rel="stylesheet" type="text/css" href="examples.min.css" />
    <link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shCoreDefault.min.css" />
    <link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shThemejqPlot.min.css" />
  
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->
    <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
   
</head>
<body>
   
      <div class="colleft">
        <div class="col1" id="example-content">

  
    
    <div><span>You Clicked: </span><span id="info1">Nothing yet</span></div>
        
    <div id="chart1" style="margin-top:20px; margin-left:20px; width:300px; height:300px;"></div>


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
            highlighter: { show: false }
        });
    
        $('#chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
                $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
            }
        );
    });</script>
    
  <!-- End example scripts -->

<!-- Don't touch this! -->


    <script type="text/javascript" src="../jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="syntaxhighlighter/scripts/shCore.min.js"></script>
    <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushJScript.min.js"></script>
    <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushXml.min.js"></script>
<!-- Additional plugins go here -->

  <script  type="text/javascript" src="../plugins/jqplot.barRenderer.min.js"></script>
  <script  type="text/javascript" src="../plugins/jqplot.pieRenderer.min.js"></script>
  <script  type="text/javascript" src="../plugins/jqplot.categoryAxisRenderer.min.js"></script>
  <script  type="text/javascript" src="../plugins/jqplot.pointLabels.min.js"></script>

<!-- End additional plugins -->

        </div>
                       </div>
       <script type="text/javascript" src="example.min.js"></script>

</body>


</html>
