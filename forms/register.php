<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        #content {
            margin-left: auto;
            margin-right: auto;
            width: 30vw;
            margin-top: 25vh;
        }

        h1 {
            text-align: center;
        }

        body {
            font-family: Arial;
            background-color: cyan;
        }
    </style>
    <div id="content">
    <?php
        require __DIR__ . '/regulateInput.php';
        $name = $username = $gender = $email = $password = "";
        print_r($_POST);
        print($_POST["gender"]);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = regulate_input($_POST["name"]);
            $age = (int)regulate_input($_POST["age"]);
            $gender = regulate_input($_POST["gender"]);
            $username = regulate_input($_POST["username"]);
            $email = regulate_input($_POST["email"]);
            $password1 = regulate_input($_POST["password1"]);
            $password2 = regulate_input($_POST["password2"]);
            #Perdorimi i funksionit explode
            $name = explode(' ', $name);
            @$firstName = $name[0];
            @$lastName = $name[1];
            @$firstName = trim($firstName);
            @$lastName = trim($lastName);
            $successful = TRUE;
            $errors = "";
            #Kontrollohet emri
            if(strpos($_POST["name"], ' ') === false)
            {
                $errors .= "Please write your full name, seperated by a space<br/>";
                $successful = FALSE;
            }
            if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
                $errors .= "Only letters and space are allowed in the name.";
                $successful = FALSE;
            }
            #Kontrollohet mosha
            if(intval($age) < 18 || intval($age) > 100)
            {
                $errors .= "Age should be a number larger than 18 and less than 100<br/>";
                $successful = FALSE;
            }
            #Kontrollohet gjinia
            if($gender !== "Male" && $gender !== "Female")
            {
                $errors .= "Gender should be only Male or Female<br/>";
                $successful = FALSE;
            }
            #Kontrollohet emaili
            #Perdoret regex
            $email_regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
            if(!preg_match($email_regex, $email))
            {
                $errors .= "Please write the email in the correct format user@domain.com<br/>";
                $successful = FALSE;
            }
            if(strlen($username) == 0)
            {
                $errors .= "Username is required. Please fill out the username.";
                $successful = FALSE;
            }
            #Nese ka sukses, perdoret printf
            if($successful)
            {
                echo "<h1>Registration was successful</h1><br/>";
                printf("Welcome %s<br/>You will receive a confirmation email at %s<br/>",$username,$email);
                echo "<br/>";
            }
            else
            {
                global $registrationMessage;
                $registrationMessage = "<h1>Registration was not successful</h1><br/>";
                echo $registrationMessage;
                echo $errors . "<br/>";
            }
            $input = array("firstName"=>$firstName,"lastName"=>$lastName,"age"=>$age, "gender"=>$gender, "username"=>$username,"email"=>$email);
            #Perdorimi i unazes foreach me varg asociativ
            foreach($input as $x => $xval)
            {
                echo $x . ":  " . $xval . "<br/>";
            }
          }

          
    
    if($successful)
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db='RealEstate';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        if(! $conn )
        {
        die('Could not connect: ' . mysqli_connect_error());
        }
        echo 'Connected successfully';
        $sql = 'INSERT INTO User(username,name,surname,age,email,gender,hashPassword)
                VALUES("'.$username.'","'.$firstName.'","'.$lastName.'",'.$age.',"'.$email.'","'.substr($gender,0,1).'",MD5("'.$password1.'"))';
        echo $sql . "<br/>";
        $retval = mysqli_query( $conn, $sql );
        if(!$retval)
        {
        die('Could not enter data: ' . mysqli_connect_error());
        
        }
        mysqli_close($conn);
    }
?>
    </div>
</body>
</html>