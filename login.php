
<?php
    include "main.php";

    // if Session is Set
    if(isset($_SESSION['user_id'])) {
        // goto Home page
        header("location: home_page.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php include "header.php"; ?>

<style>
body {
    background-image:
        linear-gradient(
            rgba(0, 0, 0, 0.5), 
            rgba(0, 0, 0, 0.5)
        ),
        url("img/login_bg.jpeg");

    padding-top: 70px;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

.center-loginContainer
{
    margin: 0 auto;
    max-width: 500px;
    border: 1px solid black;
    border-radius: 3px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.4); 
}
.center-loginContainer h3 {
    color: white;
    margin-top: 10px;
    margin-bottom: 20px;
}
.center-loginContainer button {
    width: 100%; 
    margin-bottom: 10px;
    padding: 7px;
    border: 1px solid white;
    border-radius: 4px;
    background: rgba(0, 0, 0, 0.8);
    color: white;
}

/* Error msg =================================== */
.errorMsg_login {
    border: 1px solid #FF1818;
    border-radius: 4px;
    padding: 5px 10px;
    color: #FF1818;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #FFC1C1;
    margin-bottom: 10px;
    display: none;
}

.loginAlert {
    border: 1px solid #FF1818;
    border-radius: 4px;
    padding: 10px;
    color: #FF1818;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #FFC1C1;
    margin-bottom: 10px;
    /* display: none; */
}
</style>

</head>
<body id="bodyStyle">
    <!--
        ###################################################################################################################
        #
        #
        #
        #
        #
        ###################################################################################################################
    -->
    
    <div style="color: white; text-align: center; margin-bottom: 20px;">
        <h1>Title Here</h1>
    </div>

    <form id="myLoginForm" action="php/main_process.php" method="POST" class="center-loginContainer">
        <h3 style="text-align: center;">LOGIN</h3>
        <!-- Error msg -->
        <div class="errorMsg_login" id="alertMsg_login">
            <b>Invalid:</b> Username only allowed letters, numbers, and following characters: <span style="color: black;">_ - .</span> <br> No spaces.
        </div>
        <div class="errorMsg_login" id="alertMsg_loginPass">
            <b>Invalid:</b> Password not allowed the following characters: <span style="color: black;">' "</span> <br> No spaces.
        </div>
        <!-- Incorrect username or password -->
        <?php if(isset($_SESSION['loginAlert'])) { if($_SESSION['loginAlert'] === "incorrectPass") {
            ?><div class="loginAlert">
                Incorrect Username or Password.
            </div>
        <?php }} ?>





        <!-- Username -->
        <div style="position: relative;">
            <input type="text" name="txtbox_username" id="txtboxUsername" class="form-control shadow-none" placeholder="Username" style="padding-left: 35px;" autofocus>
            <!-- icon -->
            <span style="color: #272727; position: absolute; left: 0; top: 0; padding: 5px 10px;"><i class="fa-solid fa-user"></i></span>
        </div>

        <br>

        <!-- Password -->
        <div style="position: relative;">
            <input type="password" name="txtbox_user_pass" id="password" class="form-control shadow-none" placeholder="Password" style="padding-left: 35px; padding-right: 35px;">
            <!-- icon -->
            <span style="color: #272727; position: absolute; left: 0; top: 0; padding: 5px 10px;"><i class="fa-solid fa-lock"></i></span>
            <!-- eye icon / show password btn -->
            <span id="v_pass" onclick="tog_pass()"  style="color: #272727; position: absolute; right: 0; top: 2px; padding: 5px 10px; cursor: pointer;"><i class="fa-solid fa-eye"></i></span>
            <span id="h_pass" onclick="tog_pass()"  style="color: #272727; position: absolute; right: 0; top: 2px; padding: 5px 10px; cursor: pointer;"><i class="fa-solid fa-eye-slash"></i></span>
        </div>

        <br>

        <!-- Login Button -->
        <button type="button" id="btnSubmit" name="btnSubmitLogin" onclick="checkUsername()">Login</button>

        <!-- <button type="button" id="btnSubmit2" name="btn_submit" style="display: none;">Login btn</button> -->

    </form>


    <!-- <div style="color: white;">
        <?php //echo md5("111"); ?>
    </div> -->


    <!--
        ###################################################################################################################
        #
        #
        #
        #
        #
        ###################################################################################################################
    -->
</body>



<!-- Clear Sessions -->
<?php 
$_SESSION['loginAlert'] = "";
?>



<script>
    // Show & Hide Password
    v_pass.style.display = "none";
    function tog_pass() {
        var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text"; // show password
                v_pass.style.display = "block";
                h_pass.style.display = "none";
            } else {
                x.type = "password"; // hide password
                v_pass.style.display = "none";
                h_pass.style.display = "block";
        }
    }





    // do not Display alert msg - Username
    function allowedCharUsername(inputString) {
        var regex = /^[a-zA-Z0-9_.-]+$/;
        return regex.test(inputString);
    }
    function allowedCharUserPass(inputString) {
        var regex = /^['"]+$/;
        return regex.test(inputString);
    }

    function checkUsername() {
        var username = document.getElementById("txtboxUsername").value;
        var userPass = document.getElementById("password").value;

        // for Username
        if (allowedCharUsername(username)) 
        {
            alertMsg_login.style.display =  "none";

            // for Password
            if (allowedCharUserPass(userPass)) {
                // Invalid
                alertMsg_loginPass.style.display = "block";

            } else if(userPass.trim().length === 0) {
                // Invalid
                alertMsg_loginPass.style.display = "block";

            }else {
                alertMsg_loginPass.style.display =  "none";
                // Submit form
                document.getElementById("myLoginForm").submit();
            }
        } 
        else 
        {
            // Invalid
            alertMsg_login.style.display = "block";
        }
    }



    // [username] Press Enter to submit
    var inputUsername = document.getElementById("txtboxUsername");
    inputUsername.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            // validate first
            checkUsername();
        }
    });

    // [password] Press Enter to submit
    var inputPassword = document.getElementById("password");
    inputPassword.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            // validate first
            checkUsername();
        }
    });
</script>

<!-- Footer -->
<?php include "footer.php"; ?>

<footer>

</footer>
</html>