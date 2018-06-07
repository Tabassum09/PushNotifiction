    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username)){
            if(!empty($password)){
             $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "miniproject";
            //creating connection
            $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

            if(mysqli_connect_error()){
                die('connection error('.mysqli_connect_error().')'.mysqli_connect_error());
            }else{
                $sql="INSERT INTO user_information(username, password) values('$username','$password')";
                if($conn->query($sql)){
                    echo"new record is successfully inserted";
                }else
                    echo"error:" ".$sql.""<br>".$conn->error;
                }
            $conn->close(); 
            }
            else{
                 echo"please enter the password";
            die();
            }

        }
    else{
            echo"please enter the username";
            die();
        }

    ?>