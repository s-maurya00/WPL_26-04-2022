<?php

    session_start();

    include 'includes/config.php';

    if(isset($_POST['signupSubmit'])){

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
        $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

        if(mysqli_num_rows($select_users) > 0){
            $message[] = 'user already exist!';
        }else{
            if($pass != $cpass){
                $message[] = 'passwords did not match!';
            }else{
                mysqli_query($conn, "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$name', '$email', '$pass')") or die('query failed');
                $message[] = 'registered successfully';

            }
        }
    }

    if(isset($_POST['loginSubmit'])){
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
        
        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' and password = '$pass'") or die('query failed');
        
        if(mysqli_num_rows($select_users) > 0){

            $row = mysqli_fetch_assoc($select_users);

            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];

            $message[] = 'Login Successfull';

        }else{
            $message[] = 'Incorrect email or password';
        }
    }
?>

