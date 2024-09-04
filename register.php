<?php include "header.php";?>
<section id="register">
    <div class="container">
        <form id="register" method="post">
            <label for="userName">Name: </label>
            <input type="text" name="userName" id="userName">
            <br>
            <label for="userEmail">Email: </label>
            <input type="email" name="userEmail" id="userEmail" maxlength="255">
            <br>
            <label for="userPassword">Password: </label>
            <input type="password" name="userPassword" id="userPassword" minlength="4">
            <br>
            <label for="userPhoneNumber">Mobile Number: </label>
            <input type="tel" name="userPhoneNumber" id="userPhoneNumber" minlength="10" maxlength="10">
            <br>
            <label for="userAddress">Address: </label>
            <input type="text" name="userAddress" id="userAddress" minlength="5">
            <br>
            <a href="login.php">Already have an account? Login</a>
            <br>
            <button class="outline" type="button">Close</button>
            <button type="submit" name="userRegister">Register</button>
        </form>
    </div>
</section>
<?php include "footer.php";?>