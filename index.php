<?php
    require 'includes/login_validator.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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

    <!-- home section starts  -->
    <section class="home" id="home">

        <form action="" method="POST">

            <h3>find your perfect home</h3>

            <div class="buttons-container">
                <div class="button-container-1">
                    <input type="radio" id="rent" name="room-sell-type" class="rad-btn" value="rent" required>
                    <label for="rent">On rent</label>
                </div>

                <div class="button-container-1">
                    <input type="radio" id="sell" name="room-sell-type" class="rad-btn" value="sell">
                    <label for="sell">On sell</label>
                </div>
            </div>

            <div class="inputBox">

                <input type="search" name="city" placeholder="city" id="city">

                <input type="search" name="max-price" placeholder="maximum price" id="max-price">

                <!-- <select name="prop-status" id="prop-status">
                    <option value="" disabled hidden selected>property status</option>
                    <option value="Ready To Move">Ready To Move</option>
                    <option value="under construction">under construction</option>
                    <option value="furnished">furnished</option>
                    <option value="semi-furnished">semi-furnished</option>
                    <option value="unfurnished">unfurnished</option>
                </select>

                <select name="prop-type" id="prop-type">
                    <option value="" disabled hidden selected>property type</option>
                    <option value="flat">flat</option>
                    <option value="house">house</option>
                    <option value="shop">shop</option>
                    <option value="warehouse">warehouse</option>
                    <option value="land">land</option>
                </select> -->

                <select name="bhk" id="bhk">
                    <option value="" disabled hidden selected>BHK</option>
                    <option value="1">1 BHK</option>
                    <option value="2">2 BHK</option>
                    <option value="3">3 BHK</option>
                    <option value="4">4 BHK</option>
                    <option value="5">5 BHK</option>
                </select>

                <!-- <select name="" id="">
                    <option value="" disabled hidden selected>aminities</option>
                    <option value="parking space">parking space</option>
                    <option value="swimming pool">swimming pool</option>
                    <option value="playground">playground</option>
                    <option value="security">security</option>
                    <option value="all">all</option>
                </select> -->

                <select name="bedroom" id="bedroom">
                    <option value="" disabled hidden selected>bedrooms</option>
                    <option value="1 bedroom">1 bedroom</option>
                    <option value="2 bedroom">2 bedroom</option>
                    <option value="3 bedroom">3 bedroom</option>
                    <option value="4 bedroom">4 bedroom</option>
                    <option value="5 bedroom">5 bedroom</option>
                </select>

                <!-- <select name="" id="">
                    <option value="" disabled hidden selected>bathrooms</option>
                    <option value="1 bathroom">1 bathroom</option>
                    <option value="2 bathroom">2 bathroom</option>
                    <option value="3 bathroom">3 bedroom</option>
                    <option value="4 bathroom">4 bathroom</option>
                    <option value="5 bathroom">5 bathroom</option>
                </select> -->

            </div>

            <input type="submit" name="searchSubmit" value="search property" class="btn">

        </form>

    </section>
    <!-- home section ends -->

    <!-- included login page -->
    <?php require 'partials/login.php'?>

    <!-- included signup page -->
    <?php require 'partials/signup.php'?>

    <section class="featured" id="featured">

        <div class="box-container">
    
            <?php require 'partials/search_house.php' ?>

        </div>

    </section>

    <!-- services section -->
    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/s-1.png" alt="">
                <h3>buying home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga
                    ad? Perspiciatis, autem officiis?</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/s-2.png" alt="">
                <h3>renting home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga
                    ad? Perspiciatis, autem officiis?</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/s-3.png" alt="">
                <h3>selling home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga
                    ad? Perspiciatis, autem officiis?</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>


    <!-- included footer section -->
    <?php require 'partials/footer.php'?>

    <!-- local js file link -->
    <script src="js/script.js"></script>
</body>

</html>