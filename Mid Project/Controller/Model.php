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
        function readData()
        {
            $data = file_get_contents('../Data/data.json');
            $data = json_decode($data, true);
            return $data;
        }

        function readFoodData1()
        {
            $foodData = file_get_contents('../Data/food1.json');
            $foodData = json_decode($foodData, true);
            return $foodData;
        }

        function readFoodData2()
        {
            $foodData = file_get_contents('../Data/food2.json');
            $foodData = json_decode($foodData, true);
            return $foodData;
        }

        function readFoodData3()
        {
            $foodData = file_get_contents('../Data/food3.json');
            $foodData = json_decode($foodData, true);
            return $foodData;
        }
    
        function storeData($data)
        {
            $current_data = file_get_contents('../Data/data.json');
            $array_data = json_decode($current_data, true);
    
            $array_data[] = $data;
            $final_data = json_encode($array_data);
            return $final_data;
        }
    ?>
</body>
</html>