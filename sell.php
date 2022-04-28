<?php
    include 'partials/loginvalidator.php'
?>

<?php

    include 'includes/config.php';

    if(!isset($_SESSION['user_name'])){
        
        // i don't understand how to send this message to home.php
        $message[] = "Login to access 'selling' section";
        
        header("location: home.php");

        echo '<script> callLogin(); </script>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your House</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

    <!-- shows messages -->
    <?php require 'partials/message.php' ?>

    <!-- adds header -->
    <?php require 'partials/header.php' ?>


    <!-- selling section starts -->

    <section class="add-house">

        <h1 class="title"><span>Rent - Sell</span> products</h1>

        <form action="" method="post" enctyp="multipart/form-data">
            
        </form>

    </section>

    <!-- selling section ends -->

    <!-- include footer section -->
    <?php include 'partials/footer.php'?>
    
    <!-- local js file link -->
    <script src="js/script.js"></script>

</body>

</html>