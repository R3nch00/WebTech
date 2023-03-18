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

    if(file_exists('../Data/data.json'))
    {
        include '../Controller/DataHandler.php';
        $data = loadData();
        foreach($data as $item)
        {
            if($item['username'] == $_SESSION['username'])
            {
                $name = $item['name'];
                $email = $item['email'];
                $username = $item['username'];
                $pass = $item['pass'];
                $gender = $item['gender'];
                $mobile = $item['mobile'];
            }
            else
            {
                $error = "<label class='text-danger'>Data not found</label>";
            }
        }
    }
    ?>
    <br><br>
    <span style="font-size:20px;"><center><a href='DashboardProperties.php'>Go to Dashboard</a></center></span>
    <span style="font-size:20px;"><center><a href='Logout.php'>Log Out</a></center></span>
    <hr>

    <div class="container" style="width:500px;">
    <form action="" method="post">
        <br>
        <fieldset>
            <legend>PROFILE</legend>

            <label style="font-size:20px;">Name:</label>
            <span style="font-size:20px;" class="credentials"><?php echo $name;?></span><br><br>

            <label style="font-size:20px;">Email:</label>
            <span style="font-size:20px;" class="credentials"><?php echo $email?></span><br><br>

            <label style="font-size:20px;">Username:</label>
            <span style="font-size:20px;" class="credentials"><?php echo $username?></span><br><br>

            <label style="font-size:20px;">Gender:</label>
            <span style="font-size:20px;" class="credentials"><?php echo $gender?></span><br><br>

            <label style="font-size:20px;">Mobile:</label>
            <span style="font-size:20px;" class="credentials"><?php echo $mobile?></span><br><br>

            <span style="font-size:20px;" class="credentials"><a href="EditProfile.php">Edit Profile</a></span>
        </fieldset>
    </form>
    </div>
</body>
</html>