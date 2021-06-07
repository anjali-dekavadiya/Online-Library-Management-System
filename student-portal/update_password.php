<?php
    include "connection.php";
    include "navbar.php";
?><!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>

        <style type="text/css">
            body
            {
                
                height: 650px;
                background-color: gray;
        
            }
            .wrapper
            {
                width: 400px;
                height: 400px;
                margin: 100 auto;
                background-color: black;
                opacity: .8;
                color: white;
                

            }
            .form-control
            {
                width: 300px;
            }
        </style>
    </head>
    <body>
            <div class="wrapper">
                <div>
                    <h1 style="text-align: center; font-size: 35px; font-family: lucida Console;">Change Your Password </h1><br>
                </div>
                <div style="padding-left: 50px;">
                    <form action="" method="post">
                        <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
                        <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
                        <input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
                        <button class="btn btn-default" type="submit" name="submit">Update</button>
                    </form>
                </div>
            </div>
            <?php
                if(isset($_POST['submit']))
                {
                    if(mysqli_query($db,"UPDATE student SET password='$_POST[password]' where username='$_POST[username]' AND email='$_POST[email]';"))
                    {
                        ?>
                            <script type="text/javascript">
                                alert("The PasswordUpadated Successfully.")
                            </script>
                        <?php
                    }
                }
            ?>
        
    </body>
</html>