
<?php 
include "../main.php";




// Login

if(isset($_POST['txtbox_username']) || isset($_POST['txtbox_user_pass'])) {

    isset($_POST['txtbox_username']);
    isset($_POST['txtbox_user_pass']);

    // trim data
    $get_username = trim($_POST['txtbox_username']);
    $get_userpass = trim($_POST['txtbox_user_pass']);

    // Confirm string if zero 0
    if(strlen($get_username) === 0) {
        echo '<script> alert("INVALID: Username cannot be empty."); </script>';
    }elseif(strlen($get_userpass) === 0) {
        echo '<script> alert("INVALID: Password cannot be empty."); </script>';
    }else {
        // all goood.

        // Login process
        $sql = "SELECT * FROM users WHERE username='$get_username' AND user_pass='".md5($get_userpass)."'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            // the user name must be unique
            $row = mysqli_fetch_assoc($result);
            if($row['user_pass'] === md5($get_userpass)){
                $_SESSION['user_id'] = $row['id'];

                // goto Homepage
                $_SESSION['welcome_greet'] = "1";
                header("location: ../home_page.php");
            }else {
                $_SESSION['loginAlert'] = "incorrectPass";
                header("location: ../login.php");
                // Debugging
                // echo '<script> alert("Incorrect Password"); history.go(-1); </script>';
            }
        }else {
            $_SESSION['loginAlert'] = "incorrectPass";
            header("location: ../login.php");
            // Dubgugging
            // echo '<script> alert("Incorrect Username"); history.go(-1); </script>';
        }

        // Debugging
        echo "<br><br><br>";
        echo $get_username."<br>";
        echo $get_userpass."<br>";
        echo md5($get_userpass)."<br>";
    }


}



/* 
##########################################################################################################
#
#
#
#
#
#
#
#
#
#
##########################################################################################################
*/

if(isset($_POST['update_profile_info'])) {

    isset($_POST['username']);
    isset($_POST['user_email']);
    isset($_POST['user_pass']);

    $user_username = trim($_POST['username']);
    $user_email = trim($_POST['user_email']);
    $user_pass = trim($_POST['user_pass']);

    $query_username = "";
    $query_email = "";
    $query_pass = "";

    // Query ================================
    // Username
    if(strlen($user_username) === 0) {
        $query_username = "";
    }else {
        $query_username = "username = '".$user_username."'";
    }

    // Email
    if(strlen($user_email) === 0) {
        $query_email = "";
    }else {
        $query_email = ",user_email = '".$user_email."'";
    }

    // Password
    if(strlen($user_pass) === 0) {
        $query_pass = "";
    }else {
        $query_pass = ", user_pass = '".md5($user_pass)."'";
    }



    // Update only the field with data
    if($query_email == "" || $query_pass == "" && $query_username == "") {
        // do nothing
        // Notification
        $_SESSION['notif_status'] = "red";
        $_SESSION['notif_title'] = "No Changes";
        $_SESSION['notif_description'] = "Text fields are empty.";

        header("location: ../home_page.php?profile");

    } else {

        // Update data ================================
        $sql = "UPDATE users SET ".$query_username." ".$query_email." ".$query_pass." WHERE id = '".$_SESSION['user_id']."'";

        if (mysqli_query($conn, $sql)) {
            // Notification
            $_SESSION['notif_status'] = "green";
            $_SESSION['notif_title'] = "Successfully";
            $_SESSION['notif_description'] = "Changes applied.";

            header("location: ../home_page.php?profile");
        } else {
            // echo "Error updating record: " . mysqli_error($conn);
            // Notification
            $_SESSION['notif_status'] = "red";
            $_SESSION['notif_title'] = "Error updating";
            $_SESSION['notif_description'] = mysqli_error($conn);

            header("location: ../home_page.php?profile");
        }
    }
}



/* 
##########################################################################################################
#
#
#
#
#
#
#
#
#
#
##########################################################################################################
*/

 
// Add User
if(isset($_POST['users_btn_addUser'])) {

    isset($_POST['addUser_IDnumber']);
    isset($_POST['addUser_fname']);
    isset($_POST['addUser_lname']);
    isset($_POST['addUser_email']);
    isset($_POST['addUser_username']);
    isset($_POST['addUser_password']);

    
    $txt_idNumber = trim($_POST['addUser_IDnumber']);
    $txt_Fname = trim($_POST['addUser_fname']);
    $txt_Lname = trim($_POST['addUser_lname']);
    $txt_email = trim($_POST['addUser_email']);
    $txt_username = trim($_POST['addUser_username']);
    $txt_password = trim($_POST['addUser_password']);


    // Define tmp errors
    $error_tmp_all = "";

    $error_idNumber = "";
    $error_fname = "";
    $error_lname = "";
    $error_email = "";
    $error_username = "";
    $error_password = "";

    
    // Declare sessions
    $_SESSION['users_empty_idNum'] = "";
    $_SESSION['users_empty_fname'] = "";
    $_SESSION['users_empty_lname'] = "";
    $_SESSION['users_empty_email'] = "";
    $_SESSION['users_empty_username'] = "";
    $_SESSION['users_empty_password'] = "";


    $_SESSION['users_toggle_modal'] = '';
    $_SESSION['users_notif_status'] = '';
    $_SESSION['users_notif_title'] = '';
    $_SESSION['users_notif_desc'] = '';

    $_SESSION['users_duplication_idNumber'] = '';
    $_SESSION['users_duplication_name'] = '';
    $_SESSION['users_duplication_email'] = '';
    $_SESSION['users_duplication_username'] = '';


    // Check data really exist
    if(strlen($txt_idNumber) === 0) {   // ID Number
        $error_idNumber = 1;
        $error_tmp_all = 1;
        $_SESSION['users_empty_idNum'] = 1;
    }

    if(strlen($txt_Fname) === 0) {   // First name
        $error_fname = 1;
        $error_tmp_all = 1;
        $_SESSION['users_empty_fname'] = 1;
    }

    if(strlen($txt_Lname) === 0) {   // Last name
        $error_lname = 1;
        $error_tmp_all = 1;
        $_SESSION['users_empty_lname'] = 1;
    }

    if(strlen($txt_email) === 0) {   // Email
        $error_email = 1;
        $error_tmp_all = 1;
        $_SESSION['users_empty_email'] = 1;
    }

    if(strlen($txt_username) === 0) {   // Username
        $error_username = 1;
        $error_tmp_all = 1;
        $_SESSION['users_empty_username'] = 1;
    }

    if(strlen($txt_password) === 0) {   // Password
        $error_password = 1;
        $error_tmp_all = 1;
        $_SESSION['users_empty_password'] = 1;
    }





    // Prevent duplication =================================================================
    // ID NUMBER
    $sql_check_idNUm = "SELECT id_number FROM users WHERE id_number = '".$txt_idNumber."'";
    $res_check_idNUm = mysqli_query($conn, $sql_check_idNUm);
    
    if (mysqli_num_rows($res_check_idNUm) > 0) {
        $error_tmp_all = 1;

        $_SESSION['users_duplication_idNumber'] = 1;
        $_SESSION['users_toggle_modal'] = 1;

        echo '<script> history.go(-1); </script>';
    }
    //
    // Name
    $sql_check_name = "SELECT f_name, l_name FROM users WHERE f_name = '".$txt_Fname."' AND l_name = '".$txt_Lname."'";
    $res_check_name = mysqli_query($conn, $sql_check_name);
    
    if (mysqli_num_rows($res_check_name) > 0) {
        $error_tmp_all = 1;

        $_SESSION['users_duplication_name'] = 1;
        $_SESSION['users_toggle_modal'] = 1;

        echo '<script> history.go(-1); </script>';
    }
    //
    // Email
    $sql_check_email = "SELECT user_email FROM users WHERE user_email = '".$txt_email."'";
    $res_check_email = mysqli_query($conn, $sql_check_email);
    
    if (mysqli_num_rows($res_check_email) > 0) {
        $error_tmp_all = 1;

        $_SESSION['users_duplication_email'] = 1;
        $_SESSION['users_toggle_modal'] = 1;

        echo '<script> history.go(-1); </script>';
    }
    //
    // Username
    $sql_check_username = "SELECT username FROM users WHERE username = '".$txt_username."'";
    $res_check_username = mysqli_query($conn, $sql_check_username);
    
    if (mysqli_num_rows($res_check_username) > 0) {
        $error_tmp_all = 1;
        
        $_SESSION['users_duplication_username'] = 1;
        $_SESSION['users_toggle_modal'] = 1;

        echo '<script> history.go(-1); </script>';
    }




    // Do not proceed if there's error found.
    if($error_tmp_all === 1) {
        // toggle modal
        $_SESSION['users_toggle_modal'] = 1;
        echo '<script> history.go(-1); </script>';

    } else {

        // Insert data
        $sql_addUser = "INSERT INTO users (id_number, f_name, l_name, user_email, username, user_pass, date_created, user_role)
                VALUES ('".$txt_idNumber."', '".$txt_Fname."', '".$txt_Lname."', '".$txt_email."', '".$txt_username."', '".md5($txt_password)."', '".date('Y-m-d H:i:s')."', '2')";
        
        if (mysqli_query($conn, $sql_addUser)) {
            // New record created
            $_SESSION['open_notif'] = 1;
            $_SESSION['notif_status'] = "green";
            $_SESSION['notif_title'] = "Successfully";
            $_SESSION['notif_desc'] = "New user created.";

            header("location: ../home_page.php?users");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

/* 
##########################################################################################################
#
#
#
#
#
#
#
#
#
#
##########################################################################################################
*/  

if(isset($_POST['usersEdit_updateUser'])) {

    // Sets
    isset($_POST['userUpdate_userID']);
    isset($_POST['userUpdate_idNumber']);
    isset($_POST['userUpdate_fname']);
    isset($_POST['userUpdate_lname']);
    isset($_POST['userUpdate_email']);
    isset($_POST['userUpdate_username']);
    isset($_POST['userUpdate_password']);


    // Get data
    $update_userID = trim($_POST['userUpdate_userID']);
    $update_idNumber = trim($_POST['userUpdate_idNumber']);
    $update_Fname = trim($_POST['userUpdate_fname']);
    $update_Lname = trim($_POST['userUpdate_lname']);
    $update_email = trim($_POST['userUpdate_email']);
    $update_username = trim($_POST['userUpdate_username']);
    $update_password = trim($_POST['userUpdate_password']);


    // Declaration
    $errorReturn_addUser = "";
    $_SESSION['openModal_userEdit'] = "";
    // $_SESSION['openModal_userEdit_userID'] = "";

    $_SESSION['dataEmpty_idNumber'] = "";
    $_SESSION['dataEmpty_Fname'] = "";
    $_SESSION['dataEmpty_Lname'] = "";
    $_SESSION['dataEmpty_email'] = "";
    $_SESSION['dataEmpty_username'] = "";

    $_SESSION['duplicate_users_idNumber'] = "";
    $_SESSION['duplicate_users_name'] = "";
    $_SESSION['duplicate_users_email'] = "";
    $_SESSION['duplicate_users_username'] = "";




    // Check if data is exist
    if(strlen($update_idNumber) === 0) {   // ID Number
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['dataEmpty_idNumber'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> PLease fill the blank. </small>';

        echo '<script> history.go(-1); </script>';
    }

    if(strlen($update_Fname) === 0) {   // First Name
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['dataEmpty_Fname'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> PLease fill the blank. </small>';

        echo '<script> history.go(-1); </script>';
    }

    if(strlen($update_Lname) === 0) {   // Last Name
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['dataEmpty_Lname'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> PLease fill the blank. </small>';

        echo '<script> history.go(-1); </script>';
    }

    if(strlen($update_email) === 0) {   // Email
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['dataEmpty_email'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> PLease fill the blank. </small>';

        echo '<script> history.go(-1); </script>';
    }

    if(strlen($update_username) === 0) {   // Username
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['dataEmpty_username'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> PLease fill the blank. </small>';

        echo '<script> history.go(-1); </script>';
    }




    // Prevent data buplication 
    // ID Number
    $sql_check_idNum = "SELECT id_number FROM users WHERE id_number = '".$update_idNumber."' AND id != '".$update_userID."'";
    $res_check_idNum = mysqli_query($conn, $sql_check_idNum);
    
    if (mysqli_num_rows($res_check_idNum) > 0) {
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['duplicate_users_idNumber'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> This already taken. </small>';;

        echo '<script> history.go(-1); </script>';
    }

    // Name
    $sql_check_name = "SELECT f_name, l_name FROM users WHERE f_name = '".$update_Fname."' AND l_name = '".$update_Lname."' AND id != '".$update_userID."'";
    $res_check_name = mysqli_query($conn, $sql_check_name);
    
    if (mysqli_num_rows($res_check_name) > 0) {
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['duplicate_users_name'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> This already taken. </small>';;

        echo '<script> history.go(-1); </script>';
    }

    // Email
    $sql_check_email = "SELECT user_email FROM users WHERE user_email = '".$update_email."' AND id != '".$update_userID."'";
    $res_check_email = mysqli_query($conn, $sql_check_email);
    
    if (mysqli_num_rows($res_check_email) > 0) {
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['duplicate_users_email'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> This already taken. </small>';;

        echo '<script> history.go(-1); </script>';
    }

    // Username
    $sql_check_username = "SELECT username FROM users WHERE username = '".$update_username."' AND id != '".$update_userID."'";
    $res_check_username = mysqli_query($conn, $sql_check_username);
    
    if (mysqli_num_rows($res_check_username) > 0) {
        $errorReturn_addUser = 1;
        $_SESSION['openModal_userEdit'] = 1;
        $_SESSION['openModal_userEdit_userID'] = $update_userID;
        $_SESSION['duplicate_users_username'] = '<small class="userEdit_errorMsg"> <i class="fa-solid fa-circle-exclamation"></i> This already taken. </small>';;

        echo '<script> history.go(-1); </script>';
    }



    // Query ================================
    $sqlQuery_updateUsers_password = "";

    // Password
    if(strlen($update_password) === 0) {
        $sqlQuery_updateUsers_password = "";
    }else {
        $sqlQuery_updateUsers_password = ", user_pass = '".md5($update_password)."'";
    }





    // Proceed if no error found
    if($errorReturn_addUser == 1) {

        echo '<script> history.go(-1); </script>';
    } else {
        // UPDATE DATA
        $sql_users_update = "UPDATE users SET id_number = '".$update_idNumber."', f_name = '".$update_Fname."', l_name = '".$update_Lname."', user_email = '".$update_email."', username = '".$update_username."' ".$sqlQuery_updateUsers_password." WHERE id = '".$update_userID."'";

        if (mysqli_query($conn, $sql_users_update)) {
            // Notification
            $_SESSION['open_notif'] = 1;
            $_SESSION['notif_status'] = "green";
            $_SESSION['notif_title'] = "Successfully";
            $_SESSION['notif_desc'] = "Changes applied.";

            echo '<script> history.go(-1); </script>';
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }






}

/* 
##########################################################################################################
#
#
#
#
#
#
#
#
#
#
##########################################################################################################
*/ 

if(isset($_POST['selectedUserDel'])) {

    $users_deletion_userID = $_POST['selectedUserDel'];

    // temporary 
    $tmp_userDeletion_stats = "";

    foreach($users_deletion_userID as $deleteID) {
        $delete = "DELETE FROM users WHERE id = '".$deleteID."'";
        mysqli_query($conn, $delete);

        $tmp_userDeletion_stats = "1";
    }


    // Refresh page first
    ?>
    <script>
    window.location.href = 'home_page.php?users';
    </script>
    <?php 


    // Notification
    $_SESSION['open_notif'] = 1;
    $_SESSION['notif_status'] = "green";
    $_SESSION['notif_title'] = "Successfully";
    $_SESSION['notif_desc'] = "Selected user deleted.";


    // click notification button to open
    ?>
    <script>
    window.location.href = 'home_page.php?users';
    setTimeout(executeNotifDelUser, 500);

    function executeNotifDelUser() {
        document.getElementById("notifButoon").click();
    }
    </script>
    <?php 

    // use this to see result if id able to get.
    // echo "Deleted items: " . implode(", ", $users_deletion_userID);

}


/* 
##########################################################################################################
#
#
#
#
#
#
#
#
#
#
##########################################################################################################
*/

if(isset($_POST['search_btn'])) {

    isset($_POST['search_key']);

    $search_key = trim($_POST['search_key']);
    
    
    // Prevent accepting empty data
    if(strlen($search_key) === 0) {
        // Notification
        $_SESSION['open_notif'] = 1;
        $_SESSION['notif_status'] = "green";
        $_SESSION['notif_title'] = "Successfully";
        $_SESSION['notif_desc'] = "Selected user deleted.";
    } else {
        echo $search_key;
    }

    echo $search_key;
}
?>