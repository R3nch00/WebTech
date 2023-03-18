<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br><br><br><br><br><br>  
           <div class="container" style="width:500px;">
<?php

    session_start();

    if(isset($_SESSION['username']))
    {

    }
    else
    {
        header("location:Login.php");
    }
    if(!isset($_POST['Submit1']))
    {
        $a = "<img src='default.jpg' height=200 width=300 />";
        echo "$a";
    }
    else if(isset($_POST['Submit1']))
        { 
            $filepath = "../Images/" . $_FILES["file"]["name"];
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
            {
            $a = "<img src=".$filepath." height=200 width=300 />";
            echo "$a";
            } 
            
            else 
            {
            echo "Error !!";
            }
        } 
    ?>

<form action="" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
</form>

    </div>
</body>
</html>