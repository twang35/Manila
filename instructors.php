<!DOCTYPE html>
<html>
<?php session_start(); $_SESSION[ 'Title']="Instructors" ; include( "header.php"); ?>

<div class="content">

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 " align="center">
            <h1>Benn Konsynski</h1>
        </div>
    </div>

    <div class="row" style="margin-top: 40px; length:100px;">
        <div class="col-md-6">
            <div style="padding-left:80px">
                <img src="img/konsynski.jpg" style="width: 45%">
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-md-12 center-statsUp">Courses</div>
            <div class="col-md-12 center-statsBo">
                <h4>Appcology</h4>
                <h4>Course 2</h4>
                <h4>Course 3</h4>
            </div>
        </div>

    </div>
    <div class="row" style="margin-top: 40px; length:100px;">

        <div class="col-md-12">
            <div align="center">
                <h4>Assignment Type</h4>
                <div id="hero-donut-1" style="height: 248px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- end main container -->


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
<!-- morrisjs -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="js/morris.min.js"></script>

<script type="text/javascript">
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
</script>

</body>

</html>