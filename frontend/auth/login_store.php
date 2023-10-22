<?php
    include('../../include/db.php');
    if(isset($_POST['submit'])) {
        $email      = $_POST['email'];
        $password   = $_POST['password'];


        $sql = "select *from register_2 where email = '$email'";
            $result = $comm->query($sql);
            if ($result->num_rows == 0) {
                echo "in Email";
                header('location:login.php?isEmail=1'); die;
            }

        $sql = "select*from register_2 where password ='$password'";
        $result = $comm->query($sql);
        if($result->num_rows == 0) {
            echo "in Password";
            header('location:login.php?isPassword=1'); die;
        }

        $sql = "select*from `register_2` where email = '$email' && password = '$password' ";
        $result = $comm->query($sql);

        if ($result->num_rows > 0 ) {
            echo "Login Success";
            $user1 = $result->fetch_assoc ();

            session_start();
            $_SESSION['userData'] = $user1;
            
            header('location:../../backend/layout/dashboard.php');

        } else {
        echo "Login Failed";
        }
    } else {
        echo " form Login Failed";
    }
?>
