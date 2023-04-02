<?php
session_start();
if(isset($_SESSION['username'])){
    //echo "Welcome ".$_SESSION['username']."<br>";
    
}
else{
    
    header("refresh: 4 ; url =../Sign_Login/login.php");
    die("Please Login First");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="shortcut icon" type="image/png" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="address.css"> 
</head>
<body>
    <main>
        <header >
            <nav>
                <div>
                <a class="logo" href="userprofile.php"><img src="../img/Lexpress.png" alt="logo" width="200px"></a>
                </div>
                <div class ="form">
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div >
                    <ul class = "menu">
                        <li><a href="../Home/index.php">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="../Sign_Login/logout.php">Logout</a></li>
                    </ul>
                </div>
                    
            </nav>

        </header>    
        
        
       
        <div class="div_center">
            <a href="edit_profile.php">
                <div class="divlist">
                    <img id="icon" src="../img/editpro.jpg" alt="ICON">
                    <p>Edit Profile</p>
                </div>
            </a>
            <a href="changepass.php">
                <div class="divlist">
                    <img id="icon" src="../img/changpass.png" alt="ICON">
                    <p>Change Password</p>
                </div>
            </a>
            <a href="#">
                <div class="divlist">
                    <img id="icon" src="../img/address.png" alt="ICON">
                    <p>Address</p>
                </div>
            </a>
            <a href="">
                <div class="divlist">
                    <img id="icon" src="../img/oderlist.png" alt="ICON">
                    <p>Order History</p>
                </div>
            </a>
            <a href="paymentmethod.php">
                <div class="divlist">
                    <img id="icon" src="../img/paymentM.png" alt="ICON">
                    <p>Payment Method</p>
                </div >
            </a>
            <a href="servicespage.php">
                <div class="divlist">
                    <img id="icon" src="../img/Services.png" alt="ICON">
                    <p>Services</p>
                </div>
            </a>
            <a href="#">
                <div class="divlist">
                    <img id="icon" src="../img/pricelist.jfif" alt="ICON">
                    <p>Price List</p>
                </div>
            </a>
            <a href="">
                <div class="divlist">
                    <img id="icon" src="../img/reviwe.jfif" alt="ICON">
                    <p>My Reviews</p>
                </div>
            </a>
            <a href="">
                <div class="divlist">
                    <img id="icon" src="../img/starpoints.png" alt="ICON">
                    <p>Star Points</p>
                </div> 
            </a>
        </div>


            
        <div class = "edit">

            <h3>Address Information :</h3>

            <form action="address_process.php" method="post" >

                <label for=""> Address:</label>
                <br>
                <input type="text" name="address" id="address" placeholder="Enter Address" required>
                <br>
                <label for=""> City:</label>
                <br>
                <input type="text" name="city" id="city" placeholder="Enter City" required>
                <br>
                <label for=""> Post Code:</label>
                <br>
                <input type="text" name="postcode" id="postcode" placeholder="Enter Post code" required>
                <br>
                <label for=""> State:</label>
                <br>
                <input type="text" name="state" id="state" placeholder="Enter State" required>
                <br>
                
                <label for="">Default Address:</label> 
                <br>
                <select name="def" id="">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <br>
                <br>
                <input type="submit"class ="submit" name="submit" value="Continue">
            </form>
        </div>
    



       
            
        

        
     </div>
</main>

    <div id="main-footer">
        <div id="main-footergrid">
            <h4>SUPPORT</h4>
            <button id ="buttongaid">
                <div>
                    <img id="icon" src="../img/phon.jfif" alt="">
                </div>
                <div>
                    <p>Phone <br> 01815059590</p> 
                </div>
               
                
            </button>
            <button id ="buttongaid">
                <div>
                    <img id="icon" src="../img/location.jfif" alt="">
                </div>
                <div>
                    <p>Company <br> <b style= "text-color:red;">Find Out Branches</b></p> 
                </div>
               
                
            </button>

             
        </div>
        <div id="main-footergrid">
            <h4>ABOUT US</h4>
        </div>
        <div id="main-footergrid">
            <h4>STAY CONNECTED</h4>
     </div>
   <!-- <div>
        <div><h1> Laundry Express >>> </h1></div>
        <button><a href="../Home/index.php">HOME</a></button>
        <button><a href="../Sign_Login/logout.php">Logout</a></button>

    </div>-->
    
    
</body>
</html>