<!DOCTYPE html>
<head>  
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VhojonBilash</title> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head> 

<?php
$message = $error = "";
if(isset($_POST["login"])){
    if(empty($_POST["username"])){
        $error = "<label class='text-danger'>Enter username</label>";
    }
    else if(empty($_POST["pass"])){
        $error = "<label class='text-danger'>Enter password</label>";
    }
    else
    {
        if(file_exists('../Data/data.json'))
        {
            include '../Controller/DataHandler.php';
            $data = loadData();
            foreach($data as $item){
                if($item["username"]==$_POST["username"] && $item["pass"]==$_POST["pass"]){
                    $message = "<label class = text-success>Login Successsfull<br> Welcome</label>";
                    
                    session_start();

                    $username =$_POST["username"];

                    $_SESSION['username']= $username;
                    echo "Session Started<br>";
                    header("location:Dashboard.php");
                }
                else{
                    $error = "<label class='text-danger'>Incorrect username or password</label>";
                }
            }
        }
    }
}
?>

<body>  
    <br />  
    <div class="container" style="width:500px;"> 
    <br><br><br><br><br><br>
    <form action="" method="post">
        <?php
            if(isset($error)){
                 echo $error;
            }
        ?>
        <fieldset>
        <legend>LOGIN</legend>
        <label>User Name</label>
        <input type = "text" name = "username" class="form-control" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];}?>"><br>
        <label>Password</label>
        <input type = "password" name = "pass" class="form-control" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];}?>"><br>
        <hr>
        <input id="remember" type = "checkbox" name = "remember" <?php if(isset($_COOKIE['username'])) {echo "checked";}?>>
        <label for="remember">Remember me</label><br><br>
        <input type = "submit" name = "login" value = "Login">
        <input type = "submit" name= "reset" value="Reset"><br><br>
        <a href="ForgetPass.php">Forgot Password??<br>

        <?php
            if(isset($message))
            {
                echo $message;
                
            }
            if (!empty($_POST['remember'])) {
                setcookie("username", $_POST['username'], time()+1000);
                setcookie("pass", $_POST['pass'], time()+1000);                
            }else{
                setcookie("username", "");
                setcookie("pass", "");
            }
        ?>
    </form>
</body>
</html>