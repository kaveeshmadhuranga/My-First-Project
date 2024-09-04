<?php include "header.php";?>
<section id="login">
    <div class="container">
        <form id="login" method="post">
            <label for="userEmailLogin">Email: </label>
            <input type="email" name="userEmailLogin" id="userEmailLogin" maxlength="255">
            <br>
            <label for="userPasswordLogin">Password: </label>
            <input type="password" name="userPasswordLogin" id="userPasswordLogin" minlength="4">
            <br>
            <a href="register.php">Don't have an account? Register Now</a>
            <br>
            <button class="outline" type="button">Close</button>
            <button type="submit" name="userLogin">Login</button>
        </form>
    </div>
</section>
<?php include "footer.php";?>