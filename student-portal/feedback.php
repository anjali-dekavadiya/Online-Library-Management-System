<?php
    include "connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.css">
        <script src="jquery.js"></script>
        <script src="bootstrap.js"></script>

        <style type="text/css">
            body
            {
                background-color: gray;
            }
            .wrapper
            {
                padding: 10px;
                margin: 20px auto;
                width: 600px;
                height: 600px;
                background-color: black;
                opacity: .4;
                color: yellow;
            }
            .form-control
            {
                height: 70px;
                width: 60%;
            }
            .scroll
            {
                height: 300px;
                width: 100%;
                overflow: auto;
            }
        </style>

    </head>
    <body>
            <div class="wrapper">
                <h4>If you have any suggesions or questions please comment below.</h4><br>
                <form style="" action="" method="post">
                    <input class="form-control" type="text" name="comment" placeholder="write something..."><br><br>
                    <input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">
                </form>
                <br><br><br>
        

            <div class="scroll">
                <?php
                    if(isset($_POST['submit']))
                    {
                        $sql="INSERT INTO `comments` VALUES('','$_POST[comment]', '$_SESSION[login_user]')";
                        if(mysqli_query($db,$sql))
                        {
                            $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                            $res=mysqli_query($db,$q);

                            echo "<table class='table table-bordered'>";
                            while($row=mysqli_fetch_assoc($res))
                            {
                                echo "<tr>";
                                    echo "<td>"; echo $row['username']; echo "</td>";
                                    echo "<td>"; echo $row['comment']; echo "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    else
                    {
                            $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                            $res=mysqli_query($db,$q);

                            echo "<table class='table table-bordered' style='color: white;'>";
                            while($row=mysqli_fetch_assoc($res))
                            {
                                echo "<tr>";
                                    echo "<td>"; echo $row['username']; echo "</td>";
                                    echo "<td>"; echo $row['comment']; echo "</td>";
                                echo "</tr>";
                            }
                    }
                
                        
                    
                ?>

            </div>
            </div>
        
    </body>
</html>