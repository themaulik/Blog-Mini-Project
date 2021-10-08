<?php 

    $con = mysqli_connect('localhost','root','','mydb');
    if($con){
        echo "connection successfull";
    }else{
        echo "not connect to DB";
    }

    mysqli_select_db($con, 'userinfo');

    $name =$_POST['name'];
    $surname =$_POST['surname'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $message =$_POST['message'];

    $query = "insert into userinfo (name, surname, email, phone, message) values('$name', '$surname', '$email', '$phone', '$message')";
    mysqli_query($con, $query);

    
    echo "<h2>Contact Us:</h2> <br>";
    echo "First Name: " .$name;
    echo "<br>";
    echo "Last Name: " .$surname;
    echo "<br>";
    echo "Email: " .$email;
    echo "<br>";
    echo "Phone No: " .$phone;
    echo "<br>";
    echo "Message: " .$message;
    
?>