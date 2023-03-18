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
    <br><br>
    <div class="container" style="width:700px">
        <fieldset>      
            <legend><center>FOOD MENU</center></legend>
            <label style="font-size:20px;">Hi Foodie<?php echo $_SESSION['username'];?>, hope you have a very good day. Get the food you love...</label>

            <hr>

            <table class="table table-bordered">
                <tr>
                    <th>Food ID</th>
                    <th>Food Name</th>
                    <th>Price</th>
                </tr>

                <?php 
                include '../Controller/DataHandler.php';
                if(file_exists('../Data/food1.json'))
                {
                    $data = loadFoodData1();
                    foreach($data as $row)
                    {
                        echo '<tr>
                        <td>'.$row["foodID"].'</td>
                        <td>'.$row["foodName"].'</td>
                        <td>'.$row["price"].'</td>
                        </tr>';
                    }
                }
                else
                {
                    $error = "<label class='text-danger'>No data found</label>";
                }
                ?>
            </table>
        </fieldset> 
    </div>

    <?php include 'AddCart.php';?>
</body>
</html>