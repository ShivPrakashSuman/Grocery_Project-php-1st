<?php
    include('../../include/db.php');
    if(isset($_POST['submit'])) {
        $fname      = $_POST['fname'];
        $lname      = $_POST['lname'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];

        if (empty($fname)) {
            echo "First Name Required"; die;
        } elseif (empty($lname)){
            echo "Last Name Required"; die;
        } elseif (empty($email)){
            echo "Email Name Required"; die;
        } elseif (empty($password)){
            echo "Password Name Required"; die;
        }

        $sql = "select*from register_2 where email = '$email' ";
        $result = $comm->query($sql);
        if($result->num_rows > 0) {
            echo "in Email";
            header('location:register.php?isEmail=1'); die;
        }
        
        $sql = "select*from register_2 where password = '$password' ";
        $result = $comm->query($sql);
        if ($result->num_rows > 0 ) {
            echo "in Password";
            header('location:register.php?isPassword=1'); die;
        } 
        $sql = "insert into register_2 (id,fname,lname,email,password) values (0,'$fname','$lname','$email','$password')";

        $result = $comm->query($sql);

        if ($result) {
            echo "Data Submit Successfull";
            header('location:register.php');
        } else {
            echo "Data Submit Failed"; 
        }

    } else {
        echo "Form Submit Failed";
    }
?>