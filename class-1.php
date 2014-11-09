<!DOCTYPE html>
<html>
<?php session_start(); $_SESSION[ 'Title']="Bio 141" ; include( "header.php"); ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- main container -->
<div class="content">

    <div class="row" align="center" style="margin-bottom: 10px">
        <div class="col-md-4-classBar" style="padding-left:15px">
            <a href="http://goizueta.emory.edu/faculty/academic_areas/isom/konsynski_benn.html"><font size="4">Professor: <span class="badge">Benn Konsynski</span></a>
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
            <h1 class="Class-Title">Appcology</h1>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;" align="center">
        <div class="col-md-10 col-md-offset-1">
            <h3 class="Course-Num">Course #3280 </h3>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;">
        <div class="col-md-offset-1 col-md-5">
            <div id="current-grade" class="col-md-12 center-statsUp"></div>
            <div class="col-md-12 center-statsBo">
                <h4>Current Grade</h4>
            </div>
        </div>
        <div class="col-md-5">
            <div id ="letter-grade"class="col-md-12 center-statsUp"></div>
            <div class="col-md-12 center-statsBo">
                <h4>Letter Grade</h4>
            </div>
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
                <div>
                    <img id='bellcurve' src="img/Bell_Curve.png" style="width: 80%; align:center">    
                </div>
                <div>
                    <div class="row" align="center">
                        <div class="row" style="width: 100%;">
                            <div class="col-md-6 chart">
                                <div id="hero-donut-1" style="height: 248px;"></div>
                                <h4>Assignment Type</h4>
                            </div>
                            <div class="col-md-6 chart">
                                <div id="hero-donut-2" style="height: 248px;"></div>
                                <h4>Individual Assignments</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title pull-left">
                                Course Progress                        
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
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-6">
                        <div id="bestPossibleGrade"class="col-md-12 center-statsUp"></div>
                        <div class="col-md-12 center-statsBo">
                            <h4>Best Possible Grade</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="worstPossibleGrade"class="col-md-12 center-statsUp"></div>
                        <div class="col-md-12 center-statsBo">
                            <h4>Worst Possible Grade</h4>
                        </div>
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
            <div class="col-md-offset-1 col-md-5">
                <div class="col-md-12">
                    <input id='knob1' type="text" class="knob second mid" value=93 data-inputColor="#808080" data-fgColor="#DBA901" data-bgColor="#F5DA81" data-width="140" data-heightp="140" text-width="140">
                </div>
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <h3>Goal Grade</h3>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-12">
                    <input id='knob3' type="text" class="knob second mid" data-readOnly=true data-inputColor="#333" data-fgColor="#DBA901" data-bgColor="#F5DA81" data-width="140">
                </div>
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <h3>Average Needed</h3>
                </div>
            </div>
        </div>

        <div class="row grdbk" align="center">
            <h1>Gradebook</h1>
            <hr>
            <div class="div-scroll">
                <div class="grade-block" data-toggle="modal" data-target="#myModal">
                    <div class="row" align="left">
                        <div class="col-md-7">
                            <h3 class="assignmentColor">Cell Regeneration Paper (9/13)</h3>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2 grbk-letter">D</div>
                        <div class="col-md-3">
                            <input type="text" value="60" class="knob second" data-readOnly=true data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="5" class="knob second" data-thickness=".3" data-readOnly=true data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <!-- <h3 class="points">47/50</h3> -->
                            <h3 class="grbk-top-half">30</h3>
                            <h3>50</h3>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <h3 class="grbk-top-half">39</h3>
                            <h3>50</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>% Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Received Weight</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="scorecap">Score</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="classavgcap">Class Average</h4>
                        </div>
                    </div>
                </div>
                <div class="grade-block" data-toggle="modal" data-target="#myModal">
                    <div class="row" align="left">
                        <div class="col-md-7">
                            <h3 class="assignmentColor" data-toggle="modal" data-target="#myModal">Midterm 1 (9/19)</h3>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2 grbk-letter">
                            B
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="84" class="knob second" data-thickness=".3" data-readOnly=true data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="20" class="knob second" data-thickness=".3" data-readOnly=true data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <!-- <h3 class="points">47/50</h3> -->
                            <h3 class="grbk-top-half">84</h3>
                            <h3>100</h3>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <h3 class="grbk-top-half">81</h3>
                            <h3>100</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>% Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Received Weight</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="scorecap">Score</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="classavgcap">Class Average</h4>
                        </div>
                    </div>
                </div>
                <div class="grade-block" data-toggle="modal" data-target="#myModal">
                    <div class="row" align="left">
                        <div class="col-md-7">
                            <h3 class="assignmentColor" data-toggle="modal" data-target="#myModal">Lab Report (9/25)</h3>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2 grbk-letter">
                            B+
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="89" class="knob second" data-thickness=".3" data-readOnly=true data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="15" class="knob second" data-thickness=".3" data-readOnly=true data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <!-- <h3 class="points">47/50</h3> -->
                            <h3 class="grbk-top-half">38</h3>
                            <h3>40</h3>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <h3 class="grbk-top-half">35</h3>
                            <h3>40</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>% Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Received Weight</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="scorecap">Score</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="classavgcap">Class Average</h4>
                        </div>
                    </div>
                </div>
                <div class="grade-block" data-toggle="modal" data-target="#myModal">
                    <div class="row" align="left">
                        <div class="col-md-7">
                            <h3 class="assignmentColor" data-toggle="modal" data-target="#myModal">Cell Regeneration Paper (11/13)</h3>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2 grbk-letter">
                            A-
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="94" class="knob second" data-thickness=".3" data-readOnly=true data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-3">
                            <input type="text" value="30" class="knob second" data-thickness=".3" data-readOnly=true data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <!-- <h3 class="points">47/50</h3> -->
                            <h3 class="grbk-top-half">47</h3>
                            <h3>50</h3>
                            <h3 class="grbk-top-half">89</h3>
                            <h3>100</h3>
                        </div>
                        <div class="col-md-2" style="padding:0px;">
                            <h3 class="grbk-top-half">90</h3>
                            <h3>100</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>% Grade</h4>
                        </div>
                        <div class="col-md-3">
                            <h4>Received Weight</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="scorecap">Score</h4>
                        </div>
                        <div class="col-md-2">
                            <h4 class="classavgcap">Class Average</h4>
                        </div>
                    </div>
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
        averageGrade = totalGrade / totalWeight;
       
        var neededAverage = (document.getElementById("knob1").value - (averageGrade * (totalWeight / 100))) / (1 - (totalWeight / 100));
        if (neededAverage > -1) {
            document.getElementById("knob3").value = neededAverage;
            $('#knob3')
                .val(neededAverage).trigger('change');
        }
        $('#current-grade').text(Math.round(averageGrade)+"%");
        var grade = "A";
        if(Math.round(averageGrade)>93){
            grade = "A";
        }
        else if(Math.round(averageGrade)>89){
            grade = "A-";
        }
        else if(Math.round(averageGrade)>86){
            grade = "B+";
        }
        else if(Math.round(averageGrade)>83){
            grade = "B";
        }
        else if(Math.round(averageGrade)>79){
            grade = "B-";
        }
        else if(Math.round(averageGrade)>76){
            grade = "C+";
        }
        else if(Math.round(averageGrade)>73){
            grade = "D-";
        }
        else if(Math.round(averageGrade)>69){
            grade = "D-";
        }
        else if(Math.round(averageGrade)>66){
            grade = "D+";
        }
        else if(Math.round(averageGrade)>63){
            grade = "D";
        }
        else if(Math.round(averageGrade)>59){
            grade = "D-";
        }
        else{
            grade = "F";
        }
        $('#letter-grade').text(grade);
        $('#bestPossibleGrade').text(Math.round((totalGrade/100) + (100-totalWeight))+"%");
        $('#worstPossibleGrade').text(Math.round(totalGrade/100)+"%");


    });


    $('#knob3').knob({
        'stopper': false
    });
    var averageGrade = 0;
    var totalGrade = 0;
    var totalWeight = 0;
    var studentDataSource = {
        'assignments': [{
            'assignmentName': 'Cell Regeneration Paper',
            'grade': '60',
            'weight': '5',
            'date': '9/13'
        }, {
            'assignmentName': 'Midterm 1',
            'grade': '84',
            'weight': '20',
            'date': '9/19'
        }, {
            'assignmentName': 'Lab Report',
            'grade': '89',
            'weight': '15',
            'date': '9/25'
        }]
    };

    $('#knob1').knob({
        'draw': function(event) {
            var neededAverage = (document.getElementById("knob1").value - (averageGrade * (totalWeight / 100))) / (1 - (totalWeight / 100));
            if (neededAverage > -1) {
                document.getElementById("knob3").value = neededAverage;
                $('#knob3')
                    .val(neededAverage).trigger('change');
            }
        }
    });


    $(function() {
        $('.carousel').each(function() {
            $(this).carousel({
                interval: false
            });
        });
    });

    $(function() {
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
                formatter: function() {
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
                data: [20, 4, 15, 0],
                color: '#DBA901'
            }, {
                name: 'Points Recieved',
                data: [80, 36, 60, 10],
                color: '#cc0033'
            }]
        });
    });

    // Morris Donut Chart
    Morris.Donut({
        element: 'hero-donut-1',
        data: [{
            label: 'Homework',
            value: 25
        }, {
            label: 'Quizzes',
            value: 40
        }, {
            label: 'Tests',
            value: 25
        }, {
            label: 'Attendance',
            value: 10
        }],
        colors: ["#DBA901", "#B27474", "#AD2A2A"],
        formatter: function(y, data) {
                return y + "%"
            }
            // resize: true

    });
    Morris.Donut({
        element: 'hero-donut-2',
        data: [{
            label: 'Test-1',
            value: 20
        }, {
            label: 'Test-2',
            value: 20
        }, {
            label: 'Final',
            value: 25
        }, {
            label: 'Quiz-1',
            value: 10
        }, {
            label: 'Quiz-2',
            value: 10
        }, {
            label: 'Quiz-3',
            value: 10
        }, {
            label: 'Homework',
            value: 5
        }],
        colors: ["#DBA901", "#B27474", "#AD2A2A"],
        formatter: function(y, data) {
            return y + "%"
        },
        // resize: true

    });
    // {



    // Build jQuery Knobs
    $(".knob").knob();



    //  jQuery Flot Chart
    var Max = [
        [1, 0],
        [2, 0],
        [3, 1],
        [4, 2],
        [5, 4],
        [6, 6],
        [7, 7],
        [8, 9],
        [9, 60],
        [10, 69],
        [11, 81],
        [12, 100]
    ];
    var Actual = [
        [1, 5],
        [2, 11],
        [3, 13],
        [4, 16],
        [5, 22],
        [6, 33],
        [7, 38],
        [8, 51]
    ];

    var plot = $.plot($("#statsChart"), [{
        data: Actual,
        label: "Actual"
    }, {
        data: Max,
        label: "Max"
    }], {
        series: {
            lines: {
                show: true,
                lineWidth: 1,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.05
                    }, {
                        opacity: 0.09
                    }]
                }
            },
            points: {
                show: true,
                lineWidth: 2,
                radius: 3
            },
            shadowSize: 0,
            stack: true
        },
        grid: {
            hoverable: true,
            clickable: true,
            tickColor: "#f9f9f9",
            borderWidth: 0
        },
        legend: {
            // show: false
            labelBoxBorderColor: "#fff"
        },
        colors: ["#DBA901", "#cc0033"],
        xaxis: {
            ticks: [
                [1, "8/30"],
                [2, "9/6"],
                [3, "9/13"],
                [4, "9/20"],
                [5, "9/27"],
                [6, "10/4"],
                [7, "10/11"],
                [8, "10/18"],
                [9, "10/25"],
                [10, "11/1"],
                [11, "11/8"],
                [12, "11/15"]
            ],
            font: {
                size: 12,
                family: "Open Sans, Arial",
                variant: "small-caps",
                color: "#9da3a9"
            }
        },
        yaxis: {
            ticks: 3,
            tickDecimals: 0,
            font: {
                size: 12,
                color: "#9da3a9"
            }
        }
    });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css({
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
    $("#statsChart").bind("plothover", function(event, pos, item) {
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
        } else {
            $("#tooltip").remove();
            previousPoint = null;
        }
    });
</script>
</body>

</html>