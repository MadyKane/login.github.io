<?php include_once 'header.php';?>
        <div class="login">
            <div class="form">
                <h2>Sign up</h2>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="name" placeholder="Full name">
                    <input type="text" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="password">
                    <input type="password" name="passwordrepeat" placeholder="repeat password">
                    <input type="text" name="uid" placeholder="username">
                    <button type="submit" name="submit">Create account</button>
                    <a href="#">Have an account? Login</a>
                </form>
            </div>
        </div>
    <?php include_once 'footer.php';?>