<?php include_once 'header.php';?>
        <div class="login">
            <div class="form">
                <h2>Login</h2>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="name" placeholder="Email / username">
                    <input type="password" name="password" placeholder="password">
                    <button type="submit" name="submit">Login</button>
                    <span>forgot password?</span>
                    <a href="#">New here ? Sign up</a>
                </form>
            </div>
        </div>
    <?php include_once 'footer.php';?>