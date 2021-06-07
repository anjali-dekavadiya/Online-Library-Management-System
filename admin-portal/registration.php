<?php
    include "connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Registration
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
            <div class="reg_img">
                <br>
            
              <div class="box2">
                  <h1 style="text-align: center; font-size: 35px; font-family: lucida Console;">Library Managment System </h1>
                  <h1 style="text-align: center; font-size: 25px;">User Registration From </h1>
                  <form name="Registration" action="" method="post">
                  
                    <div class="login">
                      <input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
                      <input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
                      <input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
                      <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
                      <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
                      <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>
                      <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: white; width:260px;height: 30px;background-color: green"><br>
                    </div>

                  </form>
                  

              </div>


            </div>

        </section>
            <?php

                if(isset($_POST['submit']))
                {
                    $count=0;
                    $sql="SELECT username from `admin`";
                    $res=mysqli_query($db,$sql);

                    while($row=mysqli_fetch_assoc($res))
                    {
                        if($row['username']==$_POST['username'])
                        {
                            $count=$count+1;
                        }
                    }
                  if($count==0)
                  {  
                    mysqli_query($db,"INSERT INTO `admin` VALUES('','$_POST[first]', '$_POST[last]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','profile.png');");

                    ?>
                    <script type="text/javascript">
                        alert("Registration successful");
                    </script>
                    <?php
                  }
                  else
                  {
                    ?>
                    <script type="text/javascript">
                        alert("The username already exist.");
                    </script>
                    <?php
                  }


                }
            ?>
    </body>
</html>