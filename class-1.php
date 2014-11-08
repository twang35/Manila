<!DOCTYPE html>
<html>
<?php
session_start();
$_SESSION['Title']="Bio 141";
include("header.php");
?>

    <!-- main container -->
    <div class="content">

        <div class="row" align="center" style="margin-bottom: 10px">
            <div class="col-md-4-classBar" style="padding-left:15px">
                <a href="#"><font size="4">Professor: <span class="badge">Patrick Cafferty</span></a>
            </div>
            <div class="col-md-4-classBar">
                <a href="#"><font size="4">Day/Time: <span class="badge">MWF 12:45pm</span></a>
            </div>
            <div class="col-md-4-classBar">
                <a href="#"><font size="4">Room: <span class="badge">MSC N301</span></a>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-10 col-md-offset-1" align="center">
                <h1 class = "Class-Title">Biology 141 </h1>
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;" align="center">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="Course-Num">Course #3280 </h3>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6">
                <div class="col-md-12 center-statsUp">93%</div>
                <div class="col-md-12 center-statsBo"><h3>Current Grade</h3></div> 
            </div>
            <div class="col-md-6">
                <div class="col-md-12 center-statsUp">A-</div>
                <div class="col-md-12 center-statsBo"><h3>Letter Grade</h3></div> 
            </div>
            <!-- <div class="col-md-4">
                <div class="col-md-12"><h1>2.5</h1></div>
                <div class="col-md-12" style="margin-bottom: 20px;"><h3>Z-Score</h3></div>
            </div> -->
        </div>

        <div class="row col-md-offset-1 col-md-10 line" style="padding-top: 30px;">
        	<div class="col-md-12">
                <div class="slider single-item" style="margin-bottom: 50px;">
                    <div>
                        <div class="row" align="center">
                            <div id="class-breakdown" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        </div>
                    </div>
                    <!-- jQuery flot chart -->
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="title pull-left">
                                jQuery Flot <small>Monthly growth</small>                        
                            </h4>
                            <div class="btn-group pull-right">
                                <button class="glow left">DAY</button>
                                <button class="glow middle active">MONTH</button>
                                <button class="glow right">YEAR</button>
                            </div>
                        </div>
                        <div class="span12">
                            <div id="statsChart"></div>
                        </div>
                    </div>
                    <div>
                        <div class="row" align="center">
                            <div class="row" style="width: 100%;">
                                <div class="col-md-6 chart">
                                    <h5>Assignment Type</h5>
                                    <div id="hero-donut-1" style="height: 248px;"></div>    
                                </div>
                                <div class="col-md-6 chart">
                                    <h5>Individual Assignments</h5>
                                    <div id="hero-donut-2" style="height: 248px;"></div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- morris graph chart -->
                    <div class="row" style="width: 100%;">
                        <div class="col-md-12">
                            <h4 class="title">Progress</h4>
                        </div>
                        <div class="col-md-12">                        
                            <div id="hero-graph-progress" style="height: 230px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
			</div>
           

           <!--  <div class="row" style="padding-top:50px" align="center">
                <div class="row" style="width: 100%;">    
                            <div class="col-md-12 chart">
                                <h5>Points Recieved of Points Available</h5>
                                <div id="assignment" style="width: 600px;"></div>
                            </div>
                        </div>
            </div> -->

            <div class="row line" style="padding-top:70px" align="center">
                <div class="col-md-4">
                    <div class="col-md-12"><input id='knob1' type="text"  class="knob second mid" value=93 data-thickness=".3" data-inputColor="#333" data-fgColor="#30a1ec" data-bgColor="#d4ecfd" data-width="140" text-width="40"></div>
                    <div class="col-md-12" style="margin-bottom: 20px;"><h3>Goal Grade</h3></div> 
                </div>
                <div class="col-md-4">
                    <div class="col-md-12"><input id='knob2' type="text" class="knob second mid" data-readOnly=true data-thickness=".3" data-inputColor="#333" data-fgColor="#30a1ec" data-bgColor="#d4ecfd" data-width="140"></div>
                    <div class="col-md-12" style="margin-bottom: 20px;"><h3>Current Average</h3></div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12"><input id='knob3' type="text" class="knob second mid" data-thickness=".3" data-readOnly=true  data-inputColor="#333" data-fgColor="#30a1ec" data-bgColor="#d4ecfd" data-width="140"></div>
                    <div class="col-md-12" style="margin-bottom: 20px;"><h3>Average Needed</h3></div>
                </div>
            </div>

            <div class="row grdbk" align="center">
                <h1 >Gradebook</h1>
                <hr>
                <div class="div-scroll">
                    <div class="row" align="left">
                        <div class="col-md-7">
                            <h3 class="assignmentColor">Cell Regeneration Paper (11/13)</h3>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2" style="padding-right:0px;">
                            <div class="col-md-12">
                                <h1>A-</h1>
                            </div>
                            <div class="col-md-12">
                                <h3>Grade</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <input type="text" value="94" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                            <div class="col-md-12">
                                <h3>% Grade</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <input type="text" value="30" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                            </div>
                            <div class="col-md-12">
                                <h3>Received Weight</h3>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <div class="col-md-12">
                                <h3 class="points">47/50</h3>
                                <div style="border-top:1px"><h4><!--50 Pts--></h4></div>
                            </div>
                            <div class="col-md-12">
                                <h3  class="scorecap">Score</h3>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <div class="col-md-12" style="padding:0px;">
                                <h3>45/50</h3>
                                <div style="border-top:1px"><h4><!--50 Total Pts--></h4></div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="classavgcap">Class Average</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="left">
                        <div class="col-md-7">
                            <h3 class="assignmentColor">Cell Regeneration Paper (11/13)</h3>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2" style="padding-right:0px;">
                            <div class="col-md-12">
                                <h1>A-</h1>
                            </div>
                            <div class="col-md-12">
                                <h3>Grade</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <input type="text" value="94" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                            <div class="col-md-12">
                                <h3>% Grade</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <input type="text" value="30" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                            </div>
                            <div class="col-md-12">
                                <h3>Received Weight</h3>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <div class="col-md-12">
                                <h3 class="points">47/50</h3>
                                <div style="border-top:1px"><h4><!--50 Pts--></h4></div>
                            </div>
                            <div class="col-md-12">
                                <h3  class="scorecap">Score</h3>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <div class="col-md-12" style="padding:0px;">
                                <h3>45/50</h3>
                                <div style="border-top:1px"><h4><!--50 Total Pts--></h4></div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="classavgcap">Class Average</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row" align="left">
                        <div class="col-md-7">
                            <h3 class="assignmentColor">Cell Regeneration Paper (11/13)</h3>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2" style="padding-right:0px;">
                            <div class="col-md-12">
                                <h1>A-</h1>
                            </div>
                            <div class="col-md-12">
                                <h3>Grade</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <input type="text" value="94" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                            <div class="col-md-12">
                                <h3>% Grade</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <input type="text" value="30" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                            </div>
                            <div class="col-md-12">
                                <h3>Received Weight</h3>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <div class="col-md-12">
                                <h3 class="points">47/50</h3>
                                <div style="border-top:1px"><h4><!--50 Pts--></h4></div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="scorecap">Score</h3>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <div class="col-md-12" style="padding:0px;">
                                <h3>45/50</h3>
                                <div style="border-top:1px"><h4><!--50 Total Pts--></h4></div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="classavgcap">Class Average</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>
<br>
<br>
<hr class="linebreak">
            <!-- morris bar & donut charts -->
            <div class="row section">
                <div class="col-md-12">
                    <h4 class="title">Morris.js</h4>
                </div>
                <div class="col-md-6 chart">
                    <h5>Devices sold</h5>
                    <div id="hero-bar" style="height: 250px;"></div>
                </div>
                <div class="col-md-6 chart">
                    <h5>Month traffic</h5>
                    <div id="hero-donut-3" style="height: 250px;"></div>    
                </div>
            </div>

            <!-- jQuery knobs -->
            <div class="row section">
                <div class="col-md-12">
                    <h4 class="title">jQuery Knob</h4>
                </div>
                <div class="row">
                    <div class="col-md-3">     
                        <input type="text" value="50" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#30a1ec" data-bgColor="#d4ecfd" data-width="140">
                    </div>
                    <div class="col-md-3">
                        <input type="text" value="75" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#8ac368" data-bgColor="#c4e9aa" data-width="140">
                    </div>
                    <div class="col-md-3">
                        <input type="text" value="35" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#5ba0a3" data-bgColor="#cef3f5" data-width="140">
                    </div>
                    <div class="col-md-3">
                        <input type="text" value="85" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#b85e80" data-bgColor="#f8d2e0" data-width="140">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end main container -->


    <!-- scripts for this page -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- knob -->
    <script src="js/jquery.knob.js"></script>
    <!-- flot charts -->
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <!-- morrisjs -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>
    <!-- call all plugins -->
    <script src="js/theme.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="slick/slick/slick.js"></script>
    <script type="text/javascript" src="slick/js/scripts.js"></script>
    <script src="Highcharts-4/js/highcharts.js"></script>
    <script src="Highcharts-4/js/modules/exporting.js"></script>


    <!-- build the charts -->
    <script type="text/javascript">
		$(document).ready(function() {

		    

		    for (var i = 0; i < Object.keys(studentDataSource.assignments).length; i += 1) {
		        totalGrade += studentDataSource.assignments[i].grade * studentDataSource.assignments[i].weight;
		        totalWeight += studentDataSource.assignments[i].weight * 1;
		    }

		    var averageGrade = totalGrade / totalWeight;
		    document.getElementById("knob2").value = Math.round(averageGrade);
		    $('#knob2')
		        .val(Math.round(averageGrade)).trigger('change');
		    var neededAverage = (document.getElementById("knob1").value - (document.getElementById("knob2").value * (totalWeight / 100))) / (1 - (totalWeight / 100));
		    document.getElementById("knob3").value = neededAverage;
            $('#knob3')
                .val(neededAverage).trigger('change');
		});
		$('#knob3').knob({
				'stopper':false
		    });
		var totalGrade = 0;
		var totalWeight = 0;
		var studentDataSource = {
		        'assignments': [{
		            'assignmentName': 'quiz1',
		            'grade': '60',
		            'weight': '3'
		        }, {
		            'assignmentName': 'homework1',
		            'grade': '84',
		            'weight': '1'
		        }, {
		            'assignmentName': 'mideterm1',
		            'grade': '89',
		            'weight': '25'
		        }]
		    };

		$('#knob1').knob({
		    'draw': function(event) {
		        var neededAverage = (document.getElementById("knob1").value - (document.getElementById("knob2").value * (totalWeight / 100))) / (1 - (totalWeight / 100));
		        if (neededAverage > 100) {
		            document.getElementById("knob3").value = null; //make value = some out of bounds
		            $('#knob3')
		                .val(neededAverage).trigger('change');
		        } else if (neededAverage < 0) {
		            document.getElementById("knob3").value = null; //make value = some out of bounds
		            $('#knob3')
		                .val(neededAverage).trigger('change');
		        } else {
		            document.getElementById("knob3").value = neededAverage;
		            $('#knob3')
		                .val(neededAverage).trigger('change');
		        }
		    }
		});


        $(function() {
            $('.carousel').each(function(){
                $(this).carousel({
                    interval: false
                });
            });
        });

        $(function () {
            $('#class-breakdown').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Class Breakdown'
                },
                xAxis: {
                    categories: ['Tests', 'Homework', 'Quizzes', 'Attendance']
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total points'
                    },
                    stackLabels: {
                        enabled: true,
                        style: {
                            fontWeight: 'bold',
                            color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                        }
                    }
                },
                legend: {
                    align: 'right',
                    x: -70,
                    verticalAlign: 'top',
                    y: 20,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                    borderColor: '#CCC',
                    borderWidth: 1,
                    shadow: false
                },
                tooltip: {
                    formatter: function () {
                        return '<b>' + this.x + '</b><br/>' +
                        this.series.name + ': ' + this.y + '<br/>' +
                        'Total: ' + this.point.stackTotal;
                    }
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true,
                            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                            style: {
                                textShadow: '0 0 3px black, 0 0 3px black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Points Missing',
                    data: [20, 10, 24, 0],
                    color: 'pink'
                }, {
                    name: 'Points Recieved',
                    data: [80, 90, 76, 100],
                    color: '#cc0033'
                }]
            });
});

        // Morris Bar Chart
        Morris.Bar({
            element: 'hero-bar',
            data: [
                {device: '1', sells: 136},
                {device: '3G', sells: 1037},
                {device: '3GS', sells: 275},
                {device: '4', sells: 380},
                {device: '4S', sells: 655},
                {device: '5', sells: 1571}
            ],
            xkey: 'device',
            ykeys: ['sells'],
            labels: ['Sells'],
            barRatio: 0.4,
            xLabelMargin: 10,
            hideHover: 'auto',
            barColors: ["#3d88ba"]
        });

      //   Morris.Bar({
      //       element: 'assignment',
      //     data: [
      //     { y: 'Quiz-1', a: 100, b: 100 },
      //     { y: 'Quiz-2', a: 75,  b: 100 },
      //     { y: 'Quiz-3', a: 90,  b: 100 },
      //     { y: 'Test-1', a: 85,  b: 100 },
      //     { y: 'Test-2', a: 90,  b: 100 },
      //     { y: 'Final', a: 75,  b: 100 },
      //     { y: 'Attendance', a: 100, b: 100 }
      //     ],
      //     xkey: 'y',
      //     ykeys: ['a', 'b'],
      //     labels: ['Series A', 'Series B']
      // });


        // Morris Donut Chart
        Morris.Donut({
            element: 'hero-donut-1',
            data: [
                {label: 'Homework', value: 25 },
                {label: 'Quizzes', value: 40 },
                {label: 'Tests', value: 25 },
                {label: 'Attendance', value: 10 }
            ],
            colors: ["#B0B0B0", "#B27474", "#AD2A2A"],
            formatter: function (y, data) { return y + "%" }
            // resize: true
        
    });
        Morris.Donut({
            element: 'hero-donut-2',
            data: [
                {label: 'Test-1', value: 20 },
                {label: 'Test-2', value: 20 },
                {label: 'Final', value: 25 },
                {label: 'Quiz-1', value: 10 },
                {label: 'Quiz-2', value: 10 },
                {label: 'Quiz-3', value: 10 },
                {label: 'Homework', value: 5 }
            ],
            colors: ["#B0B0B0", "#B27474", "#AD2A2A"],
            formatter: function (y, data) { return y + "%" },
            // resize: true

        });
        // {
            
        // },
        // {
        Morris.Donut({
            element: 'hero-donut-3',
            data: [
                {label: 'Direct', value: 25 },
                {label: 'Referrals', value: 40 },
                {label: 'Search engines', value: 25 },
                {label: 'Unique visitors', value: 10 }
            ],
            colors: ["#30a1ec", "#76bdee", "#c4dafe"],
            formatter: function (y, data) { return y + "%" },
            resize: true
        });
        

        // Morris Line Chart
        var tax_data = [
            {"period": "2013-04", "visits": 2407},
            {"period": "2013-03", "visits": 3351},
            {"period": "2013-02", "visits": 2469},
            {"period": "2013-01", "visits": 2246},
            {"period": "2012-12", "visits": 3171},
            {"period": "2012-11", "visits": 2155},
            {"period": "2012-10", "visits": 1226},
            {"period": "2012-09", "visits": 2245}
        ];
        Morris.Line({
            element: 'hero-graph-progress',
            data: tax_data,
            xkey: 'period',
            xLabels: "month",
            ykeys: ['visits'],
            labels: ['Your Average'],
            lineColors: ['#cc0033']
        });


        // Build jQuery Knobs
        $(".knob").knob();



        //  jQuery Flot Chart
        var visits = [[1, 50], [2, 40], [3, 45], [4, 23],[5, 55],[6, 65],[7, 61],[8, 70],[9, 65],[10, 75],[11, 57],[12, 59]];
        var visitors = [[1, 25], [2, 50], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 55],[9, 43],[10,50],[11,47],[12, 39]];

        var plot = $.plot($("#statsChart"),
            [ { data: visits, label: "Signups"},
             { data: visitors, label: "Visits" }], {
                series: {
                    lines: { show: true,
                            lineWidth: 1,
                            fill: true, 
                            fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.09 } ] }
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
                colors: ["#a7b5c5", "#cc0033"],
                xaxis: {
                    ticks: [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4,"APR"], [5,"MAY"], [6,"JUN"], 
                           [7,"JUL"], [8,"AUG"], [9,"SEP"], [10,"OCT"], [11,"NOV"], [12,"DEC"]],
                    font: {
                        size: 12,
                        family: "Open Sans, Arial",
                        variant: "small-caps",
                        color: "#9da3a9"
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
    </script>
</body>
</html>