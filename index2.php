<!DOCTYPE html>
<html>
	<?php
		session_start();
		$_SESSION['Title']="Home";
		include("header.php");
		?>
	<!-- main container -->
	<div class="content">
	<!-- settings changer -->
	<div class="skins-nav">
		<a href="#" class="skin first_nav selected">
		<span class="icon"></span><span class="text">Default skin</span>
		</a>
		<a href="#" class="skin second_nav" data-file="css/compiled/skins/dark.css">
		<span class="icon"></span><span class="text">Dark skin</span>
		</a>
	</div>
	<div class="row" align="center" style="margin-top: 0px">
		<div class="col-md-3" style="padding: 15px; padding-left:30px; padding-right:5px; background-color: #f6f6f6;">
			<a href="#"><font size="4">Assignments This Week <span class="badge">42</span></a>
		</div>
		<div class="col-md-3" style="padding: 15px; padding-left:5px; padding-right:5px; background-color: #f6f6f6;">
			<a href="#"><font size="4">New Grades <span class="badge">42</span></a>
		</div>
		<div class="col-md-3" style="padding: 15px; padding-left:5px; padding-right:5px; background-color: #f6f6f6;">
			<a href="#"><font size="4">Days Left of Semester <span class="badge">42</span></a>
		</div>
		<div class="col-md-3" style="padding: 15px; padding-right:30px; padding-left:5px; background-color: #f6f6f6;">
			<a href="#"><font size="4">% of semester completed <span class="badge">42</span></a>
		</div>
	</div>
	<div class="row1">
		<div class="col-md-12" align="center" style="margin-top:20px; margin-bottom:10px;">
			<font size="8">My Courses </font>
		</div>
	</div>
	<div class="row" align="center">
		<div class="col-md-2" style="height: 120px; vertical-align: middle;">
			<font size="5">Biology 141</font>
			<font size="3">Course #1234</font>
		</div>
		<div class="col-md-8" style="margin:10px; padding:60px; padding-left: 20px; border:0px solid silver; background-color:#f6f6f6;"></div>
		<div class="col-md-2"></div>
	</div>
	<div class="row4" align="center">
	<div class="col-md-2">
		<p>
			<a href="#">
		<p style="margin: 0px;"><h1 style="text-align:center;"><font size="5"><span style="line-height:10px">Economics 121 </font><br><font size="3"><span style="line-height:10px">Course #1234</font></br></a></p>
	</div>
	<div class="col-md-8" style="margin:10px; padding:60px; padding-left: 20px; border:0px solid silver; background-color:#f6f6f6;">
		<div class="col-md-2"></div>
	</div>
	<div class="row5" align="center">
	<div class="col-md-2">
		<p>
			<a href="#">
		<p style="margin: 0px;"><h1 style="text-align:center;"><font size="5"><span style="line-height:10px">English 181 </font><br><font size="3"><span style="line-height:10px">Course #1234</font></br></a></p>
	</div>
	<div class="col-md-8" style="margin:10px; padding:60px; padding-left: 20px; border:0px solid silver; background-color:#f6f6f6;">
		<div class="col-md-2"></div>
	</div>
	<div class="row6" align="center">
	<div class="col-md-2">
		<p>
			<a href="#">
		<p style="margin: 0px;"><h1 style="text-align:center;"><font size="5"><span style="line-height:10px">Chemistry 141 </font><br><font size="3"><span style="line-height:10px">Course #1234</font></br></a></p>
	</div>
	<div class="col-md-8" style="margin:10px; padding:60px; padding-left: 20px; border:0px solid silver; background-color:#f6f6f6;">
		<div class="col-md-2"></div>
	</div>
	<!-- scripts -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui-1.10.2.custom.min.js"></script>
	<!-- knob -->
	<script src="js/jquery.knob.js"></script>
	<!-- flot charts -->
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.js"></script>
	<script src="js/theme.js"></script>
	<script type="text/javascript">
		$(function () {
		
		    // jQuery Knobs
		    $(".knob").knob();
		
		
		
		    // jQuery UI Sliders
		    $(".slider-sample1").slider({
		        value: 100,
		        min: 1,
		        max: 500
		    });
		    $(".slider-sample2").slider({
		        range: "min",
		        value: 130,
		        min: 1,
		        max: 500
		    });
		    $(".slider-sample3").slider({
		        range: true,
		        min: 0,
		        max: 500,
		        values: [ 40, 170 ],
		    });
		
		    
		
		    // jQuery Flot Chart
		    var visits = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61],[8, 70],[9, 65],[10, 75],[11, 57],[12, 59]];
		    var visitors = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 55],[9, 43],[10,50],[11,47],[12, 39]];
		
		    var plot = $.plot($("#statsChart"),
		        [ { data: visits, label: "Signups"},
		         { data: visitors, label: "Visits" }], {
		            series: {
		                lines: { show: true,
		                        lineWidth: 1,
		                        fill: true, 
		                        fillColor: { colors: [ { opacity: 0.1 }, { opacity: 0.13 } ] }
		                     },
		                points: { show: true, 
		                         lineWidth: 2,
		                         radius: 3
		                     },
		                shadowSize: 0,
		                stack: true
		            },
		            grid: { hoverable: true, 
		                   clickable: true, 
		                   tickColor: "#f9f9f9",
		                   borderWidth: 0
		                },
		            legend: {
		                    // show: false
		                    labelBoxBorderColor: "#fff"
		                },  
		            colors: ["#a7b5c5", "#30a0eb"],
		            xaxis: {
		                ticks: [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4,"APR"], [5,"MAY"], [6,"JUN"], 
		                       [7,"JUL"], [8,"AUG"], [9,"SEP"], [10,"OCT"], [11,"NOV"], [12,"DEC"]],
		                font: {
		                    size: 12,
		                    family: "Open Sans, Arial",
		                    variant: "small-caps",
		                    color: "#697695"
		                }
		            },
		            yaxis: {
		                ticks:3, 
		                tickDecimals: 0,
		                font: {size:12, color: "#9da3a9"}
		            }
		         });
		
		    function showTooltip(x, y, contents) {
		        $('<div id="tooltip">' + contents + '</div>').css( {
		            position: 'absolute',
		            display: 'none',
		            top: y - 30,
		            left: x - 50,
		            color: "#fff",
		            padding: '2px 5px',
		            'border-radius': '6px',
		            'background-color': '#000',
		            opacity: 0.80
		        }).appendTo("body").fadeIn(200);
		    }
		
		    var previousPoint = null;
		    $("#statsChart").bind("plothover", function (event, pos, item) {
		        if (item) {
		            if (previousPoint != item.dataIndex) {
		                previousPoint = item.dataIndex;
		
		                $("#tooltip").remove();
		                var x = item.datapoint[0].toFixed(0),
		                    y = item.datapoint[1].toFixed(0);
		
		                var month = item.series.xaxis.ticks[item.dataIndex].label;
		
		                showTooltip(item.pageX, item.pageY,
		                            item.series.label + " of " + month + ": " + y);
		            }
		        }
		        else {
		            $("#tooltip").remove();
		            previousPoint = null;
		        }
		    });
		});
	</script>
	</body>  <!-- inside header.php -->
</html>
<!-- inside header.php -->