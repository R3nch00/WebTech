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
    require ("../Controller/RegisterClass.php");
    ?>
    <?php  
     $error = '';
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["name"]))  
        {  
             $error = "<label class='text-danger'>Enter Name</label>";  
        }
        else if(empty($_POST["email"]))  
        {  
             $error = "<label class='text-danger'>Enter an e-mail</label>";  
        }  
        else if(empty($_POST["username"]))  
        {  
             $error = "<label class='text-danger'>Enter a username</label>";  
        }  
        else if(empty($_POST["pass"]))  
        {  
             $error = "<label class='text-danger'>Enter a password</label>";  
        }
        else if(empty($_POST["Cpass"]))  
        {  
             $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
        }
        else if($_POST["pass"] != $_POST["Cpass"])
        {
            $error = "<label class='text-danger'>Password did not match</label>";
        }
        else if(empty($_POST["gender"]))  
        {  
             $error = "<label class='text-danger'>Gender cannot be empty</label>";  
        } 
        else if(empty($_POST["mobile"]))  
        {  
             $error = "<label class='text-danger'>Mobile no cannot be empty</label>";  
        }
        else if(!preg_match('/^[0-9]{11}+$/', $_POST["mobile"]))
        {
            $error = "<label class='text-danger'>Mobile no must contain only 11 numbers</label>";
        }
        else
        {
            $user = new RegisterUser($_POST['name'], $_POST['email'], $_POST['username'], $_POST['pass'], $_POST['Cpass'], @$_POST['gender'], $_POST['mobile']);
        }
    }
    ?>
    <div class="container" style="width:500px;">                                 
    <form method="post" action="">
        <fieldset>
            <legend>REGISTRATION</legend> 
            <label>Name</label>  
            <input type="text" name="name" class="form-control" /><br />  
            <label>E-mail</label>
            <input type="text" name = "email" class="form-control" /><br />
            <label>User Name</label>
            <input type="text" name = "username" class="form-control" /><br />
            <label>Password</label>
            <input type="password" name = "pass" class="form-control" /><br />
            <label>Confirm Password</label>
            <input type="password" name = "Cpass" class="form-control" /><br />
                
            <label>Gender</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>                     
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
                
            <label>Mobile No</label>  
            <input type="text" name="mobile" class="form-control" /><br />
                                     
            <input type="submit" name="submit" value="Submit" />
            <input type="submit" name="reset" value="Reset" /><br />

            <p class="error"><?php echo @$user->error; ?></p>
            <p class="success"><?php echo @$user->success; ?></p>
            <?php   
                if(isset($error))  
                {  
                    echo $error;  
                }  
            ?>     
        </fieldset> 
        </form>  
        </div>  
</body>
</html>