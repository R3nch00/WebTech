<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VhojonBilash</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<body>
    <?php
        session_start();
        
        if (isset($_SESSION['username'])) {
            echo "<br><br><br>";
            echo "<center><h2>Welcome ". $_SESSION['username']. "</h2></center>";
        }else{
            header("location:Login.php");
        }
        
    ?>
    <div class="container" style="width:500px;">
    <label style="font-size:20px;"><a href="PersonalDetails.php">See Personal Details</a></label><br>
    <label style="font-size:20px;"><a href="Restaurant.php">Restaurant</a></label><br>
    <label style="font-size:20px;"><a href="Logout.php">Logout</a><label><br>
    </div>

</body>
</html>