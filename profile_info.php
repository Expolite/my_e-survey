

<style>
    /* 
    #############################################################################################
    #
    #
    #
    #
    #
    #############################################################################################
    */
    .profile_container {
        margin-top: 20px;
        padding: 10px;
        font-size: 15px;
    }

    .txt_fields {
        width: 100%;
        max-width: 300px;
        min-width: 200px;
        margin-bottom: 10px;
        margin-right: 10px;
    }
    .txt_fields input {
        width: 100%;
        max-width: 300px;
        min-width: 200px;
        padding: 0 5px;
    }

    .flex_contents {
        display: flex;
        flex-direction: row;
    }

    @media only screen and (max-width: 700px) {
        .flex_contents {
            flex-direction: column;
        }
    }



    /*
    ############################################################################################
    #
    #
    # NOTIFICATION
    #
    #
    ############################################################################################
    */

    .notif_popup_container {
			position: relative;
		}

		#notifPopup {
			/* display: none; */
			top: -150px;
			opacity: 0;
			transition: all .5s ease;
		}

		.notif_popup_contents {
			border: 1px solid black;
			background-color: white;
			border-radius: 5px;
			width: 100%;
			max-width: 300px;
			display: flex;
			flex-direction: row;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);

			position: absolute;
			right: 10px;
		}

		.notif_popup_icon {
			font-size: 30px;
			padding: 5px 10px;
		}

		.notif_pop_desc {
			padding-top: 5px;
			padding-left: 5px;
			padding-bottom: 5px;
			width: 100%;
			color: black;

			position: relative;
		}

		.close_notif_popup {
			padding: 9px 7px;
			font-size: 25px;
			font-weight: bold;
			font-family: arial;
			cursor: pointer;
			color: #838383;
			position: absolute;
			top: 0;
			right: 0;
		}
		.close_notif_popup:hover {
			color: black;
		}

		#notif_loading_bar {
			background-color: blue;
			padding: 1px;
			width: 100%;
			transition: all 3s ease;

			position: absolute;
			left: 0;
			bottom: 0;
		}

    /*
    ############################################################################################
    #
    #
    # // NOTIFICATION
    #
    #
    ############################################################################################
    */
</style>


<?php 
isset($_SESSION['notif_status']);
isset($_SESSION['notif_description']);
isset($_SESSION['notif_title']);
?>



<!--
##########################################################################################################
#
#
#
#
#
#
#
##########################################################################################################
-->

<!-- Notification popup -->
<div align="right" id="notifPopup" class="notif_popup_container">
    <div class="notif_popup_contents">
        <?php // Red
        if($_SESSION['notif_status'] == "red") {
            ?>
            <div class="notif_popup_icon" style="color: red;">
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <?php
        }
        ?>
        <?php // Green
        if($_SESSION['notif_status'] == "green") {
            ?>
            <div class="notif_popup_icon" style="color: green;">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <?php
        }
        ?>
        <div align="left" class="notif_pop_desc">
            <!-- <div class="close_notif_popup"> &times; </div> Close btn -->
            <b> <?php echo $_SESSION['notif_title']; ?> </b> <br> <!-- title -->
            <small> <?php echo $_SESSION['notif_description']; ?> </small>  <!-- description -->
        </div>
        <div id="notif_loading_bar"></div>
    </div>
</div>
<!-- // Notification popup -->




<div class="page_title">
    Profile
</div>



<form action="php/main_process.php" method="POST" class="profile_container">
    <div class="flex_contents">
        <div class="txt_fields">
            Username: <br>
            <input type="text" name="username" value="<?php echo $userInfo_username; ?>" placeholder="Enter username">
        </div>

        <div class="txt_fields">
            Email: <br>
            <input type="email" name="user_email" value="<?php echo $userInfo_email; ?>" placeholder="Enter email">
        </div>

        <div class="txt_fields">
            Change Password: <br>
            <div style="position: relative; widh: 100%;">
                <input type="password" name="user_pass" id="password" placeholder="Enter new password">
                <span id="v_pass" onclick="tog_pass()" style="position: absolute; top: 0; right: 0; padding: 5px 10px; cursor: pointer;" class="fa-solid fa-eye"></span>
                <span id="h_pass" onclick="tog_pass()" style="position: absolute; top: 0; right: 0; padding: 5px 10px; cursor: pointer;" class="fa-solid fa-eye-slash"></span>
            </div>
        </div>
    </div>

    <div align="left" style="margin-top: 20px;">
        <button type="submit" name="update_profile_info" class="btn btn-primary" style="padding: 0 20px;">Submit</button>
    </div>
</form>

<button type="button" id="toggle_notif" onclick="openNotif()" style="display: none;"> Toggle Notif </button>







<!--
##########################################################################################################
#
#
#
#
#
#
#
##########################################################################################################
-->


<script>
    // Show Password
    v_pass.style.display = "none";
    function tog_pass() {
        // const x = document.querySelector(".pass");   // or use this if you want to use class
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


    /* 
    ########################################################################
    #
    #
    #
    #
    ########################################################################
    */


    // Trigger notif btn
    <?php 
    if($_SESSION['notif_status'] == 'green' || $_SESSION['notif_status'] == 'red') {
        ?>
        setTimeout(myFunction, 500); // execute in .5 second

        function myFunction() {
            document.getElementById("toggle_notif").click();
        }
        <?php
    }

    // clear sessions
    $_SESSION['notif_status'] = "";
    ?>


    // Notification
    function openNotif() {
        // popup notification
        notifPopup.style.top = "0px";
        notifPopup.style.opacity = "1";

        // load loading bar
        notif_loading_bar.style.width = "0%";

        // face notification away
        setTimeout(fadeNotif, 3000);
        function fadeNotif() {
            notifPopup.style.top = "-150px";
            notifPopup.style.opacity = "0";
            notif_loading_bar.style.width = "100%";
        }
    }

    /* 
    ########################################################################
    #
    #
    #
    #
    ########################################################################
    */
</script>


<br>
<br>