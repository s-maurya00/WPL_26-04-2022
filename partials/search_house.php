<?php

    function calcDays($regDate){
        $now = time();
        $your_date = strtotime($regDate);
        $datediff = $now - $your_date;

        $daysPassed = round($datediff / (60 * 60 * 24));
        if($daysPassed < 1){
            return 0;
        }
        else{
            return $daysPassed;
        }
    }

    if(isset($_POST['searchSubmit'])){

        if(isset($_POST['room-sell-type'])){
            $radio = mysqli_real_escape_string($conn, $_POST['room-sell-type']);
        }

        if(isset($_POST['city'])){
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        }

        if(isset($_POST['max-price'])){
            $max_price = mysqli_real_escape_string($conn, $_POST['max-price']);
        }

        if(isset($_POST['bhk'])){
            $bhk = mysqli_real_escape_string($conn, $_POST['bhk']);
        }
    
        if(isset($_POST['bedroom'])){
            $bedroom = mysqli_real_escape_string($conn, $_POST['bedroom']);
        }

        $select_house = mysqli_query($conn, "SELECT * FROM `houses` WHERE (room_sell_type = '$radio')") or die('query failed');

        if(mysqli_num_rows($select_house) > 0){

            while($fetch_houses = mysqli_fetch_assoc($select_house)){

                echo'
                <div class="box">
                    <div class="image-container">
                        <img src="uploads/'.$fetch_houses['images'].'" alt="">
                        <div class="info">
                            <h3>'.calcDays($fetch_houses['added_on']).' days ago</h3>
                            <h3>for '.$fetch_houses['room_sell_type'].'</h3>
                        </div>
                        <div class="icons">
                            <!-- <a href="#" class="fas fa-film">
                                <h3>1</h3>
                            </a>
                            <a href="#" class="fas fa-camera">
                                <h3>4</h3>
                            </a> -->
                        </div>
                    </div>
                    <div class="content">
                        <div class="price">
                            <h3>Rs.'.$fetch_houses['price_per_month'].'/mo</h3>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="mailto: '.$fetch_houses['email'].'" class="fas fa-envelope"></a>
                            <a href="tel: '.$fetch_houses['ph_no'].'" class="fas fa-phone tel"></a>
                        </div>
                        <div class="location">
                            <!-- <h3>Naval Colony</h3> -->
                            <p>'.$fetch_houses['house_address'].'</p>
                        </div>
                        <div class="details">
                            <h3> <i class="fas fa-expand"></i> '.$fetch_houses['floor_area'].' sqft </h3>
                            <h3> <i class="fas fa-bed"></i> '.$fetch_houses['bedrooms'].' rooms </h3>
                            <h3> <i class="fas fa-bath"></i> '.$fetch_houses['bathrooms'].' baths </h3>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn">request info</a>
                            <a href="#" class="btn">view details</a>
                        </div>
                    </div>
                </div>
                ';
            }
        }
        else{
            $message[] = 'No Such House Exists!';
        }
    }
?>