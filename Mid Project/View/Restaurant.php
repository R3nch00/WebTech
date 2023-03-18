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

        if(isset($_SESSION['username']))
        {
    
        }
        else
        {
            header("location:Login.php");
        }
        ?>
        <div class="container" style="width:500px">
        <br><br>
        <span style="font-size:20px;"><center><a href='DashboardProperties.php'>Go to Dashboard</a></center></span>
        <span style="font-size:20px;"><center><a href='Logout.php'>Log Out</a></center></span>
        <hr>
        <br><br>
        <center><span style="font-size:30px; color:coral;">Restaurants</span></center>
        <center><legend><a href='FoodMenu1.php'>Chillox</a></legend></center>
        <center><legend><a href='FoodMenu2.php'>Sultan's Dine</a></legend></center>
        <center><legend><a href='FoodMenu3.php'>Shawrma House</a></legend></center>
        </div>
</body>
</html>