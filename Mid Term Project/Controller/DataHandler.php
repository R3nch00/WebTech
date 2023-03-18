<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VhojonBilash</title>
</head>
<body>
    <?php 

        include 'Model.php';
        
        function loadData()
        {
            return readData();
        }

        function loadFoodData1()
        {
            return readFoodData1();
        }

        function loadFoodData2()
        {
            return readFoodData2();
        }

        function loadFoodData3()
        {
            return readFoodData3();
        }

        function addData($data)
        {
            $final_data = storeData($data);
            if(file_put_contents('../Data/data.json', $final_data))
            {
                header("location:../View/Registration.php");
            }
        }

        function OverWriteData($data)
        {
            $newdata = json_encode($data);
            file_put_contents('../Data/data.json',$newdata);
        }

        function customerInfo($data)
        {
            $all_data = readData();
            foreach($all_data as $row)
            {
                if($row['username'] == $data)
                {
                    $get_data = array(
                        'name' => $row['name'],
                        'email' => $row['email'],
                        'username' => $row['username'],
                        'pass' => $_POST["pass"],
                        'gender' => $row['gender'],
                        'mobile' => $row['mobile'],
                    );
                    return $get_data;
                }
            }
        }
    ?>
</body>
</html>