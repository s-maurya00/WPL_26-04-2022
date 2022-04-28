<?php
    echo '
        <!-- signup form starts -->

        <div class="signup-form-container">

            <div id="close-signup-btn" class="fas fa-times"></div>

            <form action="" name="onlySignup" method="post">
                <h3>sign Up</h3>

                <span>name</span>
                <input type="text" name="name" class="box" placeholder="enter your name" id="">

                <span>email</span>
                <input type="email" name="email" class="box" placeholder="enter your email" id="">

                <span>password</span>
                <input type="password" name="password" class="box" placeholder="enter your password" id="" required>

                <span>confirm password</span>
                <input type="password" name="cpassword" class="box" placeholder="confirm password" id="" required>

                <input type="submit" name="signupSubmit" value="sign up" class="btn">

                <p>Already have an account ? <button id="callLogin" style="background: none!important; font-size: 100%;"> <a
                            href="#">login now</a></button></p>
            </form>

        </div>

        <!-- signup form ends -->';
?>