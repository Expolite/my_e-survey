




<!-- Modal 2 -->
<form action="php/main_process.php" method="POST">
<div class="myModalEdit" id="usersEditModal<?php echo $tbl_user_id; ?>">
    <div class="modalEdit_container">
        <div class="modalEditUser_header">
            Header title
        </div>
        <div class="modalEditUser_body">
            <div class="userEdit_bodyLeft">
                <div class="userEdit_txtFields">
                    <input type="text" name="userUpdate_userID" value="<?php echo $tbl_user_id; ?>" style="display: none;">
                    ID Number: <br>
                    <input type="text" name="userUpdate_idNumber" value="<?php echo $tbl_user_idNumber; ?>" style="<?php if($_SESSION['dataEmpty_idNumber'] != '' || $_SESSION['duplicate_users_idNumber'] != ''){echo'border: 2px solid red;';} ?>" class="userEdit_txtbox" placeholder="Enter id number">
                    <?php echo $_SESSION['dataEmpty_idNumber']; ?>
                    <?php echo $_SESSION['duplicate_users_idNumber']; ?>
                </div>
                <div class="userEdit_txtFields">
                    First Name: <br>
                    <input type="text" name="userUpdate_fname" value="<?php echo $tbl_user_Fname; ?>" style="<?php if($_SESSION['dataEmpty_Fname'] != '' || $_SESSION['duplicate_users_name'] != ''){echo'border: 2px solid red;';} ?>" class="userEdit_txtbox" placeholder="Enter first name">
                    <?php echo $_SESSION['dataEmpty_Fname']; ?>
                    <?php echo $_SESSION['duplicate_users_name']; ?>
                </div>
                <div class="userEdit_txtFields">
                    Last Name: <br>
                    <input type="text" name="userUpdate_lname" value="<?php echo $tbl_user_Lname; ?>" style="<?php if($_SESSION['dataEmpty_Lname'] != '' || $_SESSION['duplicate_users_name'] != ''){echo'border: 2px solid red;';} ?>" class="userEdit_txtbox" placeholder="Enter last name">
                    <?php echo $_SESSION['dataEmpty_Lname']; ?>
                    <?php echo $_SESSION['duplicate_users_name']; ?>
                </div>
            </div>
            <div class="userEdit_bodyRight">
                <div class="userEdit_txtFields">
                    Email: <br>
                    <input type="email" name="userUpdate_email" value="<?php echo $tbl_user_email; ?>" style="<?php if($_SESSION['dataEmpty_email'] != '' || $_SESSION['duplicate_users_email'] != ''){echo'border: 2px solid red;';} ?>" class="userEdit_txtbox" placeholder="Enter email">
                    <?php echo $_SESSION['dataEmpty_email']; ?>
                    <?php echo $_SESSION['duplicate_users_email']; ?>
                </div>
                <div class="userEdit_txtFields">
                    Username: <br>
                    <input type="text" name="userUpdate_username" value="<?php echo $tbl_user_username; ?>" style="<?php if($_SESSION['dataEmpty_username'] != '' || $_SESSION['duplicate_users_username'] != ''){echo'border: 2px solid red;';} ?>" class="userEdit_txtbox" placeholder="Enter username">
                    <?php echo $_SESSION['dataEmpty_username']; ?>
                    <?php echo $_SESSION['duplicate_users_username']; ?>
                </div>
                <div class="userEdit_txtFields">
                    Change password: <br>
                    <input type="password" name="userUpdate_password" id="password<?php echo $tbl_user_id; ?>" class="userEdit_txtbox" placeholder="Change password">
                    <span id="v_pass<?php echo $tbl_user_id; ?>" onclick="tog_pass<?php echo $tbl_user_id; ?>()" style="position: absolute; top: 25px; right: 0; padding: 5px 10px; cursor: pointer;" class="fa-solid fa-eye"></span>
                    <span id="h_pass<?php echo $tbl_user_id; ?>" onclick="tog_pass<?php echo $tbl_user_id; ?>()" style="position: absolute; top: 25px; right: 0; padding: 5px 10px; cursor: pointer;" class="fa-solid fa-eye-slash"></span>
                </div>
            </div>
        </div>
        <div align="right" class="modalEditUser_footer">
            <button type="button" onclick="closeEditModal<?php echo $tbl_user_id; ?>()" class="btn btn-sm btn-outline-secondary">Cancel</button>
            <button type="submit" name="usersEdit_updateUser" class="btn btn-sm btn-outline-primary">Submit</button>
        </div>
    </div>
</div>
</form>






<script>
    // Show Password function
    v_pass<?php echo $tbl_user_id; ?>.style.display = "none";
    function tog_pass<?php echo $tbl_user_id; ?>() {
        // const x = document.querySelector(".pass");   // or use this if you want to use class
        var x<?php echo $tbl_user_id; ?> = document.getElementById("password<?php echo $tbl_user_id; ?>");
            if (x<?php echo $tbl_user_id; ?>.type === "password") {
                x<?php echo $tbl_user_id; ?>.type = "text"; // show password
                v_pass<?php echo $tbl_user_id; ?>.style.display = "block";
                h_pass<?php echo $tbl_user_id; ?>.style.display = "none";
            } else {
                x<?php echo $tbl_user_id; ?>.type = "password"; // hide password
                v_pass<?php echo $tbl_user_id; ?>.style.display = "none";
                h_pass<?php echo $tbl_user_id; ?>.style.display = "block";
        }
    }
</script>





















<script>
    // Open modal
    function openModalEdit<?php echo $tbl_user_id; ?>() {

        usersEditModal<?php echo $tbl_user_id; ?>.style.display = "block";   // Display modal
    }

    // Close modal
    function closeEditModal<?php echo $tbl_user_id; ?>() {
        
        usersEditModal<?php echo $tbl_user_id; ?>.style.display = "none";   // Close modal
    }
</script>