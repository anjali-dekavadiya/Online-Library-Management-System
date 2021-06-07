<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Online Library Management System 
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css"> 

      <style type="text/css">
      .box
{
    height: 300px;
    width:450px;
    background-color: #100b0b;
    margin: 50px auto;
    opacity: .6;
    color: white;
}

        nav
        {
            float: right;
            word-spacing: 30px;
            padding: 20px;

        }
        nav li
        {
            display: inline-block;
            line-height: 80px;
        }

      </style>

    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="logo">
                    <img src="image/index3.jpeg">
                    <h6 style="color: white">ONILNE  LIBRARY  MANAGEMENT  SYSTEM</h6>
                </div>

                <?php
                
                     if(isset($_SESSION['login_user']))
                     {?>
                        <nav>
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="book.php">BOOKS</a></li>
                                <li><a href="logout.php">LOGOUT</a></li>
                                <li><a href="feedback.php">FEEDBACK</a></li>
                            </ul>
                        </nav>
                      <?php   
                     }
                     else
                     {
                         ?>
                             <nav>
                                <ul>
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="book.php">BOOKS</a></li>
                                    <li><a href="admin_login.php">ADMIN-LOGIN</a></li>
                                    <li><a href="feedback.php">FEEDBACK</a></li>
                                </ul>
                              </nav>
                         <?php
                     }
                ?>




                <!--<nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="book.php">BOOKS</a></li>
                        <li><a href="student_login.php">STUDENT-LOGIN</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                    </ul>
                </nav>-->

            </header>
            <section>
              <div class="sec_img">
              <!--

                 <div class="w3-content w3-section" style="width: 500px;">
                    <img class="mySlides w3-animate-fading" src="image/a.jpg" style="width: 100%;">
                    <img class="mySlides w3-animate-fading" src="image/b.jpg" style="width: 100%;">
                    <img class="mySlides w3-animate-fading" src="image/aa.png" style="width: 100%;">
                    <img class="mySlides w3-animate-fading" src="image/d.jpg" style="width: 100%;">
                 </div>
        
                 <script type="text/javascript">
                    var a=0;
                    carousel();
        
                    function carousel()
                    {
                        var i;
                        var x =document.getElementsByClassName("mySlides");
        
                        for(i=0; i<x.length; i++)
                        {
                            x[i].style.display="none";
                        }
        
                        a++;
        
                        if(a > x.length)
                        {
                            a = 1
                        }
                        x[a-1].style.display = "block";
                        setTimeout(carousel, 5000);
                    }
        
                 </script>
                 -->
              
                <br><br><br>
                <div class="box">
                    <br><br><br>
                    <h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br>
                    <h1 style="text-align: center; font-size: 20px">Opens at: 07:00</h1>
                    <h1 style="text-align: center; font-size: 20px">close at: 19:00</h1><br>


                </div>
        
            
            
            </div>            
            </section>
            <!--<footer>
             <p style="color:white;text-align:center;">
                    <br>
                    Email:&nbsp Online.library@gmail.com<br>
                    Mobile:&nbsp &nbsp +880171******
                </p>
            </footer>-->
        </div>
        <?php
            include "footer.php";
        ?>

    </body>
</html>
