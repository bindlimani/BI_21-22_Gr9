<?php
    require __DIR__ . '/regulateInput.php';
    print_r($_POST);
    $email = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
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

        $sql = "SELECT userID,username FROM User WHERE hashPassword = MD5('".$_POST["password"]."') AND email='$email';";
        $result = $conn->query($sql);
        $cookie_value = "";
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["userID"]. ", username: " . $row["username"] . "<br>";
            $cookie_value = $row["username"];
        }
        $cookie_name = "username";
        #Cookie
        setcookie($cookie_name,$cookie_value,time()+3600);
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
          } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
            echo "<h1>Hello " . $_COOKIE[$cookie_name] . "!</h1>";
          }
    } 
    else {
        echo "0 results";
    }
?>