<?php
    include 'includes/login_validator.php';
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

<?php
    include 'includes/add_house.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell</title>

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

        <h3 class="heading"><span>Rent - Sell</span> Homes</h3>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="buttons-container">
                <div class="button-container-1">
                    <input type="radio" id="rent" name="room-sell-type" class="rad-btn" value="rent" required>
                    <label for="rent">for rent</label>
                </div>

                <div class="button-container-1">
                    <input type="radio" id="sell" name="room-sell-type" class="rad-btn" value="sell">
                    <label for="sell">for sell</label>
                </div>
            </div>

            <div class="inputBox">

                <input type="textbox" name="house-address" id="house-address" placeholder="House Address">

                <input type="number" name="price" id="house-price" placeholder="House Price (in Rs. / month)">

                <input type="number" name="floor-area" id="floor-area" placeholder="Floor area (Sq.ft.)">

                <input type="email" name="email" id="contact-email" placeholder="your email id" required>

                <input type="tel" name="ph-no" id="ph-no" placeholder="eg. 1234567890" pattern="[0-9]{5}[0-9]{5}"
                    required>

                <select name="bedrooms" id="bedrooms">
                    <option value="" disabled hidden selected>bedrooms</option>
                    <option value="1">1 bedroom</option>
                    <option value="2">2 bedrooms</option>
                    <option value="3">3 bedrooms</option>
                    <option value="4">4 bedrooms</option>
                    <option value="5">5 bedrooms</option>
                </select>

                <select name="bathrooms" id="bathrooms">
                    <option value="" disabled hidden selected>bathrooms</option>
                    <option value="1">1 bathroom</option>
                    <option value="2">2 bathrooms</option>
                    <option value="3">3 bathrooms</option>
                    <option value="4">4 bathrooms</option>
                    <option value="5">5 bathrooms</option>
                </select>

                <h2>Upload House image</h2>

                <input type="file" accept="image/jpg, image/jpeg" class="box" required name="house-image"
                    id="house-image" title="Upload image">

            </div>

            <input type="submit" name="add-house" value="add house" class="btn">

        </form>

    </section>
    <!-- selling section ends -->

    <!-- included login page -->
    <?php require 'partials/login.php'?>

    <!-- included signup page -->
    <?php require 'partials/signup.php'?>

    <!-- include footer section -->
    <?php include 'partials/footer.php'?>

    <!-- local js file link -->
    <script src="js/script.js"></script>

    <!-- for disabling login/signup on seller's webpage -->
    <script>
        document.getElementById("login-btn").setAttribute("onclick", "null");
    </script>

</body>

</html>