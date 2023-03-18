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
        if (isset($_SESSION['username']))
        {

        }else
        {
            header("location:Login.php");
        }

        $error="";
        include '../Controller/DataHandler.php';
        
        //fetch data
        if(file_exists('../Data/data.json'))
        {          
            $data = loadData();
            foreach($data as $item)
            {
                if($item['username'] == $_SESSION['username'])
                {
                    $name = $item['name'];
                    $email = $item['email'];
                    $gender = $item['gender'];
                    $mobile = $item['mobile'];
                }
                else
                {
                    $error = "<label class='text-danger'>Data not found</label>";
                }
            }
        }

        //modify data
        if(isset($_POST['submit']))
        {
            if(file_exists('../Data/data.json'))
            {
                $data = loadData();
                foreach($data as $key => $entry)
                {
                    if($entry['username'] == $_SESSION['username'])
                    {
                        if(!empty($_POST['name']))
                        {
                            $data[$key]['name'] = $_POST['name'];
                        }
                        if(!empty($_POST['email']))
                        {
                            $data[$key]['email'] = $_POST['email'];
                        }
                        if(!empty($_POST['gender']))
                        {
                            $data[$key]['gender'] = $_POST['gender'];
                        }
                        if(!empty($_POST['mobile']))
                        {
                            $data[$key]['mobile'] = $_POST['mobile'];
                        }
                    }
                }
                $newdata = OverWriteData($data);
                $success = "<label class=text-success>Profile edited successfully</label>";
            }
            else
            {
                $error = 'JSON File does not exist';
            }
        }
    ?>

    <br><br>
    <span style="font-size:20px;"><center><a href='DashboardProperties.php'>Go to Dashboard</a></center></span>
    <span style="font-size:20px;"><center><a href='Logout.php'>Log Out</a></center></span>
    <hr>
    <div class="container" style="width:500px;">
    <form method="post" action="">
        <br>
        <fieldset>
            <legend>Change Profile</legend>

            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name"><br>

            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter email"><br>

            <label>Gender</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>                     
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>

            <label>Mobile No</label>
            <input type="text" name="mobile" class="form-control" placeholder="Enter mobile"><br>
            
            <span style="font-size:20px;"><center><a href='ProfilePicture.php'>Change Profile Picture</a></center></span>

            <input type="submit" name="submit" value="Submit">
            <input type="submit" name="reset" value="Reset">
        </fieldset>
    </form>
    </div>
</body>
</html>