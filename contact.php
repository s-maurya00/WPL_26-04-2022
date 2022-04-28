<?php
    include 'partials/loginvalidator.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="icons-container">

            <div class="icons">
                <img src="images/icon-1.png" alt="">
                <h3>phone number</h3>
                <p>+123-456-7890</p>
                <p>+123-456-7890</p>
            </div>

            <div class="icons">
                <img src="images/icon-2.png" alt="">
                <h3>email address</h3>
                <p>meoww@gmail.com</p>
                <p>Meowwman@gmail.com</p>
            </div>

            <div class="icons">
                <img src="images/icon-3.png" alt="">
                <h3>office address</h3>
                <p>Kanjumarg, Mumbai - 400078</p>
            </div>

        </div>

        <div class="row">

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="number" placeholder="number">
                </div>
                <div class="inputBox">
                    <input type="email" placeholder="email">
                    <input type="text" placeholder="subject">
                </div>
                <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15077.567683763555!2d72.92523417634652!3d19.134314292870098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c788a68363c1%3A0x84a156fa456a87e!2sKanjurmarg%20East%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1651001146186!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- included login page -->
    <?php require 'partials/login.php'?>

    <!-- included signup page -->
    <?php require 'partials/signup.php'?>

    <!-- included footer section -->
    <?php include 'partials/footer.php'?>

    <!-- local js file link -->
    <script src="js/script.js"></script>
</body>

</html>