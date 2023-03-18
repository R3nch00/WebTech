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
    $message=$error1=$error2="";
    if(isset($_POST["AddToCart"]))
    {
        if(empty($_POST["fooditem"])){
            $error1 = "<label class='text-danger'>Enter Food ID</label>";
        }
        else if(empty($_POST["foodquantity"])){
            $error2 = "<label class='text-danger'>Enter Amount</label>";
        }
        else
        {
            $message = "<center><label class='text-success'>Order Confirmed Successfully</label></center>";
        }
    }
    ?>
    <br><br>
    <div class="container" style="width:500px;">
        <form action="" method="post">
            <fieldset>
            <legend><center>Add to cart</center></legend>
            <input type="text" name="fooditem" class="form-control" placeholder="Enter Food ID">
            <?php if(isset($error1)){echo $error1;}?><br>
            <input type="text" name="foodquantity" class="form-control" placeholder="Enter Amount">
            <?php if(isset($error2)){echo $error2;}?><br>
            <center><input type="submit" name="AddToCart" value="Confirm Order"></center>
            </fieldset>
            <?php   
                if(isset($message))  
                {  
                    echo $message;  
                }  
            ?>
        </form>
    </div>
</body>
</html>