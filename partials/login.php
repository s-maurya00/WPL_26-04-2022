<?php
    echo '<!-- login form starts -->

        <div class="login-form-container">

            <div id="close-login-btn" class="fas fa-times"></div>

            <form action="login.php" name="onlySignin" method="post">
                <h3>sign in</h3>

                <span>username</span>
                <input type="text" name="username-or-email" class="box" placeholder="username or email" id="">

                <span>password</span>
                <input type="password" name="password" class="box" placeholder="enter your password" id="">

                <div class="checkbox">
                    <input type="checkbox" name="remember-me" id="remember-me">
                    <!-- if user checks remeber me, save cookie -->
                    <label for="remember-me"> remember me</label>
                </div>

                <input type="submit" name="loginSubmit" value="sign in" class="btn">

                <p>forget password ? <a href="#">click here</a></p>

                <p>don\'t have an account ? <button id="callSignUp" style="background: none!important; font-size: 100%;"> <a
                            href="#">create one</a></button></p>
            </form>

        </div>

        <!-- login form ends -->';
?>