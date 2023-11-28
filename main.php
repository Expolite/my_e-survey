

<?php 

session_start();

// Connection 
include "connect.php";




// Display Errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Timezone
date_default_timezone_set('Asia/Manila');









// Title Tab
if(isset($_GET['settings'])) 
{  // Settings
    define("TITLE_TAB", 'Settings');
}
elseif(isset($_GET['profile'])) 
{  // Profile
    define("TITLE_TAB", 'Profile');
}
elseif(isset($_GET['users'])) 
{  // Users
    define("TITLE_TAB", 'Users');
}
elseif(isset($_GET['dashboard'])) 
{  // Dashboard
    define("TITLE_TAB", 'Dashboard');
}
else
{
    define("TITLE_TAB", 'E-Survey');
}





// Get user details
if(isset($_SESSION['user_id'])) {
    $sql_userInfo = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
    $res_userInfo = mysqli_query($conn, $sql_userInfo);

    if (mysqli_num_rows($res_userInfo) > 0) {
        // output data of each row
        while($row_userInfo = mysqli_fetch_assoc($res_userInfo)) {
            $userInfo_fname = $row_userInfo['f_name'];
            $userInfo_username = $row_userInfo['username'];
            $userInfo_email = $row_userInfo['user_email'];
        }
    } else {
        $userInfo_fname = "";
    }
}


?>