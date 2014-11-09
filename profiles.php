<!DOCTYPE html>
<html>
<?php 
session_start(); 
$_SESSION[ 'Title']="Profiles" ; 
include( "header.php"); 
?>


<!-- main container -->

<!-- main container -->
<div class="content">



    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4 " align="center">
            <h1 >Benn Konsynski</h1>
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
                <h4>Course 1</h4>
                <h4>Course 2</h4>
                <h4>Course 3</h4>
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
</body>

</html>