<?php
    include "connection.php";
    include "navbar.php";
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Student Login
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            section
            {
                margin-top: -20px;
            }
           

        </style>

    </head>
    <body>
<!--
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
                
                <a class="navbar-brand active">ONILNE  LIBRARY  MANAGEMENT  SYSTEM</a>
            </div>
            <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="book.php">BOOKS</a></li>
                
                    <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in">  LOGIN</span></a></li>
                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in">  LOGUT</span></a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user">SIGN UP</span></a></li>
            </ul>
          </div>
        </nav>
        -->

        <!--<header style="height:80px;">
            <div class="logo">
                
                <h1 style="color: white; font-size: 25px;word-spacing: 10px;line-height: 20px; margin-top: 20px;">ONILNE  LIBRARY  MANAGEMENT  SYSTEM</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="">BOOKS</a></li>
                    <li><a href="student_login.html">STUDENT-LOGIN</a></li>
                    <li><a href="registration.html">REGISTRATION</a></li>
                    <li><a href="">FEEDBACK</a></li>
                </ul>
            </nav>


        </header>-->
        <section>
            <div class="log_img">
            <br><br><br>
              <div class="box1">
                  <h1 style="text-align: center; font-size: 35px; font-family: lucida Console;">Library Managment System </h1>
                  <h1 style="text-align: center; font-size: 25px;">User Login From </h1><br>
                  <form name="login" action="" method="post">
                  
                    <div class="login">
                      <input type="text" class="form-control" name="username" placeholder="Username" required=""><br>
                      <input type="password" class="form-control" name="password" placeholder="Password" required=""><br>
                      <input  class="btn btn-default" type="submit" name="submit" value="Login" style="color: white; width:310px; background-color: green;height: 30px;">
                    </div>

                  
                  <p style="color:white; padding-left: 15px;">
                      <br><br>
                      <a style="color: yellow;" text-decoration: none; href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      New to this website?<a style="color: yellow;" text-decoration: none; href="registration.html">Sign Up</a>
                  </p>
                  </form>


              </div>


            </div>

        </section>

            <?php
                if(isset($_POST['submit']))
                {
                    $count=0;
                    $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]'");
                    $row=mysqli_fetch_assoc($res);
                    $count=mysqli_num_rows($res);

                    if($count==0)
                    {
                        ?>
                    
                            <script type="text/javascript">
                                alert("The username and password doesn't match.");
                            </script>
                        
                      <!--  <div class="alert alert-danger" style="width: 700px; margin-left: 360px; background-color: #de1313; color: white">
                            <strong>The username and password doesn't match.</strong>
                        </div>
                        -->
                        <?php

                    }
                    else
                    {
                        $_SESSION['login_user'] = $_POST['username'];
                        $_SESSION['pic']=$row['pic'];
                        ?>
                            <script type="text/javascript">
                                window.location="index.php"
                            </script>

                        <?php
                    }
                }
            ?>

    </body>
</html>