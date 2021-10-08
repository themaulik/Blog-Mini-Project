<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    //Connecting To DataBase --Started--
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "maulikdb";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            echo "connection success";
            
            $stmt = $conn->prepare("select * from user where email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0){
                $data = $stmt_result->fetch_assoc();
                if($data['password'] === $password){
                    echo "<h2>Login Succesfully</h2>";
                }
                else{
                    echo "<h2>wrong Password</h2>";
                }
            }
            else{
                echo "<h2>Invalid Email or Password</h2>";
            }
        }
    //Connecting To DB --Ended--

    //Validation on Form Filling --Started--    
        if(empty($email)){
            $email_error = "Please insert your Email";
        }
        if(empty($password)){
            $password_error = "Please insert your Password";
        }
    //Validation on Form Filling --Ended--

?>