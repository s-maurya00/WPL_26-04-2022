<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive real estate website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- local js file link -->
    <script src="js/script.js"></script>


</head>

<body>

    <?php include 'partials/header.php'?>


    <!-- home section starts  -->

    <section class="home" id="home">

        <form action="">

            <h3>find your perfect home</h3>

            <div class="buttons-container">
                <a href="#" class="btn">for rent</a>
                <a href="#" class="btn">for sell</a>
            </div>

            <div class="inputBox">
                <input type="search" name="" placeholder="neighborhood" id="">
                <input type="search" name="" placeholder="city" id="">
                <select name="" id="">
                    <option value="" disabled hidden selected>minimum price</option>
                    <option value="$5000">$5000</option>
                    <option value="$10000">$10000</option>
                    <option value="$15000">$15000</option>
                    <option value="$20000">$20000</option>
                    <option value="$25000">$25000</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>maximum price</option>
                    <option value="$30000">$30000</option>
                    <option value="$35000">$35000</option>
                    <option value="$40000">$40000</option>
                    <option value="$45000">$45000</option>
                    <option value="$50000">$50000</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>property status</option>
                    <option value="Ready To Move">Ready To Move</option>
                    <option value="under construction">under construction</option>
                    <option value="furnished">furnished</option>
                    <option value="semi-furnished">semi-furnished</option>
                    <option value="unfurnished">unfurnished</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>property type</option>
                    <option value="flat">flat</option>
                    <option value="house">house</option>
                    <option value="shop">shop</option>
                    <option value="warehouse">warehouse</option>
                    <option value="land">land</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>BHK</option>
                    <option value="1 BHK">1 BHK</option>
                    <option value="2 BHK">2 BHK</option>
                    <option value="3 BHK">3 BHK</option>
                    <option value="4 BHK">4 BHK</option>
                    <option value="5 BHK">5 BHK</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>aminities</option>
                    <option value="parking space">parking space</option>
                    <option value="swimming pool">swimming pool</option>
                    <option value="playground">playground</option>
                    <option value="security">security</option>
                    <option value="all">all</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>bedrooms</option>
                    <option value="1 bedroom">1 bedroom</option>
                    <option value="2 bedroom">2 bedroom</option>
                    <option value="3 bedroom">3 bedroom</option>
                    <option value="4 bedroom">4 bedroom</option>
                    <option value="5 bedroom">5 bedroom</option>
                </select>
                <select name="" id="">
                    <option value="" disabled hidden selected>bathrooms</option>
                    <option value="1 bathroom">1 bathroom</option>
                    <option value="2 bathroom">2 bathroom</option>
                    <option value="3 bathroom">3 bedroom</option>
                    <option value="4 bathroom">4 bathroom</option>
                    <option value="5 bathroom">5 bathroom</option>
                </select>
            </div>

            <input type="submit" value="search property" class="btn">

        </form>

    </section>

    <!-- home section ends -->


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


    <?php include 'partials/footer.php'?>


</body>

</html>