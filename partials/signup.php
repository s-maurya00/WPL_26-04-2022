<?php
    echo '
        <!-- signup form starts -->

        <div class="signup-form-container">

            <div id="close-signup-btn" class="fas fa-times"></div>

            <form action="register.php" name="onlySignup" method="post">
                <h3>sign Up</h3>

                <span>username</span>
                <input type="text" name="username" class="box" placeholder="enter a username" id="">

                <span>email</span>
                <input type="email" name="email" class="box" placeholder="enter your email" id="">

                <span>password</span>
                <input type="password" name="password" class="box" placeholder="enter your password" id="" required>

                <span>confirm password</span>
                <input type="password" name="cpassword" class="box" placeholder="confirm password" id="" required>

                <div>
                    <!-- I want to display the messege -->
                    <span id="signupError"></span>
                </div>

                <input type="submit" name="signupSubmit" value="sign up" class="btn" onclick="valiPass()">
            </form>

        </div>

        <!-- signup form ends -->';
?>