<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $mobileNo= $_POST["mobilenum"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $confirmpass = $_POST["confirmpass"]; 

    
    
    echo '<pre>',print_r(phpinfo()),'</pre>';


    // $conn = new mysqli('localhost', 'root', '', 'dummyweb');
    // if ($conn->connect_error){
    //   die('Error connecting to the database!' . $conn->connect_error);
    // }else{
    //     $stmt = $conn->prepare("INSERT INTO userinfo(name, age, mobilenum, gender, email, password, confirmpass) values(?,?,?,?,?,?,?)");
    //     $stmt->bind_param("sssssss", $name, $age, $mobileNo, $gender, $email, $pass, $confirmpass);
    //     $stmt->execute();
    //     echo "Successfully Registered!";
    //     $stmt->close();
    //     $conn->close();
    //   }
    
?>

                

    




    

    