<!DOCTYPE html>
<html>
<?php session_start(); $_SESSION[ 'Title']="Instructors" ; include( "header.php"); ?>

<div class="content">

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 " style="padding-left:100px">
            <h1>Benn Konsynski</h1>
        </div>
        <div class="col-md-6 " >
            <div class="col-md-12"><h2>Courses</h2></div>
            
        </div>
    </div>

    <div class="row" style="margin-top: 40px; length:100px;">
        <div class="col-md-6">
            <div style="padding-left:80px">
                <img src="img/konsynski.jpg" style="width: 45%">
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-md-12 ">
                <h4>Appcology</h4>
                <h4>Leveraging Media</h4>
                <h4>Managing the Information Resource</h4>
                <h4>Electronic Commerce: Business Sci Fi</h4>
            </div>
            <div class="col-md-5">
	            <div align="center">
	            <br>
	                <h2>Assignment Type</h2>
	                <div id="hero-donut-1" style="height: 248px;"></div>
	            </div>
            </div>
        </div>
    </div>
</div>
<!-- end main container -->


<!-- scripts -->
<script src="js/jquery-1.11.1.js"></script>
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
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>

<script type="text/javascript" >
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