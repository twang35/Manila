<!DOCTYPE html>
<html>
<?php
session_start();
$_SESSION['Title']="Profile";
include("header.php");
?>
    <!-- main container -->
    <div class="content">
        
        <!-- settings changer -->
        <div class="skins-nav">
            <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">Default</span>
            </a>
            <a href="#" class="skin second_nav" data-file="css/compiled/skins/dark.css">
                <span class="icon"></span><span class="text">Dark skin</span>
            </a>
        </div>
        
        <div id="pad-wrapper" class="user-profile">
            <!-- header -->
            <div class="row header">
                <div class="col-md-8">
                    <img src="img/contact-profile.png" alt="contact" class="avatar img-circle" />
                    <h3 class="name">Alejandra Galván Castillo</h3>
                    <span class="area">Emory College Class of 2015</span>
                </div>
                <a class="btn-flat icon pull-right delete-user" data-toggle="tooltip" title="Delete user" data-placement="top">
                    <i class="icon-trash"></i>
                </a>
                 <a class="btn-flat icon large pull-right edit">
                    Edit 
                </a>
            </div>

                <!-- calander, to do list, and message -->
                <!-- calander -->
            <?php include 'calendar2.php';?>
                <div class="col-md-9 bio">
                    <div class="profile-box">
                        <div class="col-md-12">
                        <h3 class="name">To Do List</h>
                        </div>
                        <!-- to do list -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                        Class
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Assignment
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Due Date
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Status 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <a href="#">class</a>
                                    </td>
                                    <td>
                                        <a href="#">Assignment</a>
                                    </td>
                                    <td>
                                        Due Date
                                    </td>
                                    <td>
                                        <a href="#">status</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">class</a>
                                    </td>
                                    <td>
                                        <a href="#">Assignment</a>
                                    </td>
                                    <td>
                                        Due Date
                                    </td>
                                    <td>
                                        <a href="#">status</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <a href="#">class</a>
                                    </td>
                                    <td>
                                        <a href="#">Assignment</a>
                                    </td>
                                    <td>
                                        Due Date
                                    </td>
                                    <td>
                                        <a href="#">status</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!--past classes-->
                        <div class="col-md-12">
                        <h3 class="name">Past Classes</h>
                        </div>
                        <!-- to do list -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                        Class
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Professor 
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Semester
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Review Score 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <a href="#">class</a>
                                    </td>
                                    <td>
                                        <a href="#">Professor</a>
                                    </td>
                                    <td>
                                        Semester
                                    </td>
                                    <td>
                                        <a href="#">Review Score</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">class</a>
                                    </td>
                                    <td>
                                        <a href="#">Professor</a>
                                    </td>
                                    <td>
                                        Semester
                                    </td>
                                    <td>
                                        <a href="#">Review Score</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <a href="#">class</a>
                                    </td>
                                    <td>
                                        <a href="#">Professor</a>
                                    </td>
                                    <td>
                                        Semester
                                    </td>
                                    <td>
                                        <a href="#">Review Score</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Message -->
                        <div class="col-md-12 section comment">
                            <h3>Message</h3>
                            <textarea></textarea>
                            <a href="#">Attach files</a>
                            <div class="col-md-12 submit-box pull-right">
                                <input type="submit" class="btn-glow primary" value="Add Note">
                                <span>OR</span>
                                <input type="reset" value="Cancel" class="reset">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- side address column -->
                <div class="col-md-3 col-xs-12 address pull-right">
                    <h6>Contact Info</h6>
                    <ul>
                        <li class="ico-li">
                            <i class="ico-phone"></i>
                            1817 274 2933
                        </li>
                         <li class="ico-li">
                            <i class="ico-mail"></i>
                            <a href="#">alejandra@detail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end main container -->


	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>