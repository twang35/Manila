<!DOCTYPE html>
<html>
<?php
session_start();
$_SESSION['Title']="Home";
include("header.php");
?>
<!-- main container -->
<div class="content">

	<div class="row col-md-offset-1 col-md-10">
	    <div class="row" align="center" style="margin:20px;">
			<iframe width="100%" height="350" src="//www.youtube.com/embed/2t15vP1PyoA" frameborder="1" allowfullscreen></iframe>
		</div>
        <div class="row" align="center" style="margin:20px; border-top:1px solid silver; border-bottom:1px solid silver; background-color:white;">
            <div class="my-courses-title">
                <h1>My Courses</h1>
            </div>
            <div class="div-scroll">
	            <div class="row">
	                <div class="col-md-4" align="center" style="margin-top:10px;">
	                    <a href="/class-1.php"><span style="font-size: 24px">Biology 141</span></a>
	                </div>	
	            </div>
	            <div class="row">
	                <div class="col-md-4">
	                    <font size="8">A-</font>
	                </div> 
	                <div class="col-md-4">
	                    <font size="8">92</font>
	                </div>
	                <div class="col-md-4">     
	                    <input type="text" value="97" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
	                </div>
	            </div>
	           	<div class="row" style="margin-bottom:10px;">
	           		<div class="col-md-4">
			           	<h4>Current Grade</h4>
			        </div>
			        <div class="col-md-4">
			           	<h4>Current Grade</h4>
			        </div>
			        <div class="col-md-4">
			           	<h4>Goal Grade</h4>
			        </div>
	           	</div>
	           	<div class="row">
	                <div class="col-md-4">
	                    <a href="/class-2.php"><span style="font-size: 24px">Econ 121</span></a>
	                </div>	
	            </div>
	           	<div class="row">
	           		<div class="col-md-4">
	                    <font size="8">B+</font>
	                </div> 
	                <div class="col-md-4">
	                    <font size="8">88</font>
	                </div>
	                <div class="col-md-4">     
	                    <input type="text" value="94" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
	                </div>
	           	</div>
	           	<div class="row" style="margin-bottom:10px;">
	           		<div class="col-md-4">
			           	<h4>Current Grade</h4>
			        </div>
			        <div class="col-md-4">
			           	<h4>Current Grade</h4>
			        </div>
			        <div class="col-md-4">
			           	<h4>Goal Grade</h4>
			        </div>
	           	</div>
	           	<div class="row">
	                <div class="col-md-4">
	                    <a href="/class-3.php"><span style="font-size: 24px">Eng 181</span></a>
	                </div>	
	            </div>
	           	<div class="row">
	           		<div class="col-md-4">
	                    <font size="8">A</font>
	                </div> 
	                <div class="col-md-4">
	                    <font size="8">95</font>
	                </div>
	                <div class="col-md-4">     
	                    <input type="text" value="95" class="knob second" data-thickness=".3" data-inputColor="#333" data-fgColor="#E60000" data-bgColor="#FFCCCC" data-width="80" data-height="80">
	                </div>
	           	</div>
	           	<div class="row" style="margin-bottom:10px;">
	           		<div class="col-md-4">
			           	<h4>Current Grade</h4>
			        </div>
			        <div class="col-md-4">
			           	<h4>Current Grade</h4>
			        </div>
			        <div class="col-md-4">
			           	<h4>Goal Grade</h4>
			        </div>
	           	</div>
	        </div>
            <br>
        </div>
    </div>
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
        });
    </script>
</body>  <!-- inside header.php -->
</html>  <!-- inside header.php -->