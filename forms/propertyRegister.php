<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(E_ALL & ~E_NOTICE);
        require __DIR__ . '/regulateInput.php';
        require __DIR__ . '/classes.php';
        session_start();
        $address = $propertyArea = $rooms = $bathrooms = $imageURL = $propertyType = $saleType = $price = $ownershipDocument = "";
        print_r($_POST);
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $address = trim($_POST["address"]);
            $propertyArea = regulate_input($_POST["propertyArea"]);
            $rooms = regulate_input($_POST["rooms"]);
            $bathrooms = regulate_input($_POST["bathrooms"]);
            $imageURL = trim($_POST["imageURL"]);
            $propertyType = regulate_input($_POST["propertyType"]);
            $saleType = regulate_input($_POST["saleType"]);
            $price = regulate_input($_POST["price"]);
        }
        #Checking the input
        $number_regex = "/^\\d+$/";
        $success = TRUE;
        $errors = "";
        $propertyObject = "";
        if(!preg_match($number_regex,$propertyArea))
        {
            $success = FALSE;
            $errors .= "Property area should contain only numbers";
        }
        if(!preg_match($number_regex,$rooms))
        {
            $success = FALSE;
            $errors .= "Number of rooms should contain only numbers";
        }
        if(!preg_match($number_regex,$bathrooms))
        {
            $success = FALSE;
            $errors .= "Number of bathrooms should contain only numbers";
        }
        if(!preg_match($number_regex,$price))
        {
            $success = FALSE;
            $errors .= "Price should contain only numbers";
        }
        if($propertyType !== "house" AND $propertyArea !== "flat")
        {
            $success = FALSE;
            $errors .= "Property Type can only be house or flat";
        }
        if($saleType !== "Sale" AND $saleType !== "Rent")
        {
            $success = FALSE;
            $errors .= "Sale Type can only be Sale or Rent";
        }

        if($success)
        {
            print("Address: " . $address . "<br/>");
            print("Property area:  " . $propertyArea . "<br/>");
            print("rooms: " . $rooms . "<br/>");
            print("bathrooms: " . $bathrooms . "<br/>");
            print("imageURL: " . $propertyType . "<br/>");
            print("saleType: " . $saleType . "<br/>");
            print("price:" . $price . "<br/>");
            
            $propertyObject = new Property($address,$propertyArea,$rooms,$bathrooms,$imageURL,$saleType,$price);
        }
            #check rooms bathrooms url propertytype saletype
            #add price
            #if house show options for house and add attributes else if flat add other attributes goes to houseRegister or flatRegister
            #add classes property, house and flat
        #upload ownership document (read maybe)
        #generate listing as file
        #Cookies as userid and sessions
        #error handling
        #sign in form
        #show listing in main php from table with simple query

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "RealEstate";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO Property(address, propertyArea, agentUsername, agentID, rooms, bathrooms, imageURL, saleType, Price)
        VALUES ('$address',$propertyArea,'g_hoxha1','1',$rooms,$bathrooms,'$imageURL','$saleType',$price)";
        
        

        if ($conn->query($sql) === TRUE) {
        global $last_id;
        $last_id = $conn->insert_id;

        echo "New record created successfully. Last inserted ID is: " . $last_id;
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if($propertyType === 'house')
        {

        }
        elseif($propertyType === 'flat')
        {

        }
        $conn->close();
    ?>

    <?php
        if($propertyType === 'house')
        {
            $gardenArea = regulate_input($_POST["gardenArea"]);
            $numOfFloors = regulate_input($_POST["numOfFloors"]);
            $hasGarage = regulate_input($_POST["hasGarage"]);
            if(!preg_match($number_regex,$gardenArea))
            {
                $success = FALSE;
                $errors .= "Garden area should contain only numbers";
            }
            if(!preg_match($number_regex,$numOfFloors))
            {
                $success = FALSE;
                $errors .= "Number of floors should contain only numbers";
            }
            if($hasGarage !== "on" AND !isset($hasGarage))
            {
                $success = FALSE;
                $errors .= "Has garage should only have on or off values";
            }
            if($hasGarage === 'on')
            {
                $hasGarage = 'Y';
            }
            else
            {
                $hasGarage = 'N';
            }

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "RealEstate";
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
    
            $sql = "INSERT INTO House(propertyID, gardenArea, numOfFloors, hasGarage)
            VALUES ($last_id,$gardenArea,$numOfFloors,'$hasGarage')";            
            
    
            if ($conn->query($sql) === TRUE) {
            global $last_id;
            $last_id = $conn->insert_id;
    
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            } else {
            echo "Error in House: " . $sql . "<br>" . $conn->error;
            }
        }
        elseif($propertyType === 'flat')
        {
            $floor = regulate_input($_POST["floor"]);
            $hasElevator = regulate_input($_POST["hasElevator"]);
            if(!preg_match($number_regex,$floor))
            {
                $success = FALSE;
                $errors .= "Floor should contain only numbers";
            }
            if($hasElevator === 'on')
            {
                $hasElevator = 'Y';
            }
            else
            {
                $hasElevator = 'N';
            }

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "RealEstate";
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
    
            $sql = "INSERT INTO Flat(propertyID, floor, hasElevator)
            VALUES ($last_id,$floor,'$hasElevator')";            
            
    
            if ($conn->query($sql) === TRUE) {
            global $last_id;
            $last_id = $conn->insert_id;
    
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            } else {
            echo "Error in House: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
</body>
</html>