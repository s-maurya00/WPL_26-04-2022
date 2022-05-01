<?php
    
    include 'config.php';

    if(isset($_POST['add-house'])){

        $radio = $_POST['room-sell-type'];
        
        $house_add = mysqli_real_escape_string($conn, $_POST['house-address']);

        $price = $_POST['price'];

        $floor = $_POST['floor-area'];

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        $ph_no = $_POST['ph-no'];
        
        $bedrooms = $_POST['bedrooms'];
        
        $bathrooms = $_POST['bathrooms'];
        
        $images = $_FILES['house-image']['name'];

        $image_tmp_name = $_FILES['house-image']['tmp_name'];

        $image_folder = 'uploads/'.$images;

        $image_size = $_FILES['house-image']['size'];
        
        $select_added_houses = mysqli_query($conn, "SELECT house_address FROM `houses` WHERE house_address = '$house_add'") or die($conn->error);

        if(mysqli_num_rows($select_added_houses) > 0){
            $message[] = 'House is already listed';
        }
        else{

            $add_house_query = mysqli_query($conn, "INSERT INTO `houses` (`room_sell_type`, `house_address`, `price_per_month`, `floor_area`, `email`, `ph_no`, `bedrooms`, `bathrooms`, `images`) VALUES ('$radio', '$house_add', '$price', '$floor', '$email', '$ph_no', '$bedrooms', '$bathrooms', '$images')") or die($conn->error);

            if($add_house_query){
                if($image_size > 2000000){
                    $message[] = 'Image size is too large';
                }
                else{
                    move_uploaded_file($image_tmp_name, $image_folder);
                    $message[] = 'House listed successfully!';
                }
            }
            else{
                $message[] = 'House could not be listed!';
            }
        }
    }
?>