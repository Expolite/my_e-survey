

<style>
    .users_container {
        border-bottom: 1px solid black;
        padding: 10px;
    }





    /* Modal ========================================================================== */

    /* The Modal (background) */
    .myModalClassname {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal_content {
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 100%;
        max-width: 800px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.4);
    }

    .modal_header {
        border-bottom: 1px solid #888;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .modal_body {
        padding: 10px;
        font-size: 15px;
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .modal_body_left {
        width: 50%;
    }

    .modal_body_right {
        width: 50%;
    }

    @media only screen and (max-width: 700px) {
        .modal_body {
            flex-direction: column;
        }
        .modal_body_left {
            width: 100%;
        }

        .modal_body_right {
            width: 100%;
        }
    }

    .txt_fields {
        width: 100%;
        max-width: 300px;
        padding-bottom: 10px;
        position: relative;
    }

    .modal_txtbox {
        padding: 0 5px;
        width: 100%;
        max-width: 300px;
    }

    .modal_footer {
        border-top: 1px solid #888;
        padding: 10px;
        font-size: 15px;
    }


    /* 
    ###############################################################################
    #
    #
    # MODAL 2
    #
    #
    ###############################################################################
    */

    /* The Modal (background) */
    .myModalEdit {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    }

    .modalEdit_container {
        background-color: #fefefe;
        margin: auto;
        border: 1px solid #888;
        width: 100%;
        max-width: 800px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.4);
    }

    .modalEditUser_header {
        border-bottom: 1px solid #888;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .modalEditUser_body {
        padding: 10px;
        font-size: 15px;
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .userEdit_bodyLeft {
        width: 50%;
    }
    .userEdit_bodyRight {
        width: 50%;
    }

    .userEdit_txtFields {
        width: 100%;
        max-width: 300px;
        margin-bottom: 10px;
        position: relative;
    }
    .userEdit_txtbox {
        padding: 1px 5px;
        width: 100%;
        max-width: 300px;
    }

    .modalEditUser_footer {
        border-top: 1px solid #888;
        padding: 10px;
        font-size: 15px;
    }

    @media only screen and (max-width: 700px) {
        .modalEditUser_body {
            flex-direction: column;
        }
        .userEdit_bodyLeft {
            width: 100%;
        }

        .userEdit_bodyRight {
            width: 100%;
        }
    }

    .userEdit_errorMsg {
        color: red;
        position: absolute;
        top: 0;
        right: 0;
    }


    /* 
    ###############################################################################
    #
    #
    #
    #
    #
    ###############################################################################
    */

    .notif_container {
        position: relative;
    }

    .notif_contents {
        border: 1px solid black;
        border-radius: 5px;
        width: 100%;
        max-width: 300px;
        display: flex;
        background-color: white;
        /* Horizontal   Vertical    Blur  Color*/
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
            
        position: absolute;
    }

    #myNotif {
        top: -100px;
        right: 10px;
        transition: all .5s ease;
    }

    .notif_icon {
        font-size: 30px;
        padding: 5px 10px;
    }

    .notif_body {
        width: 100%;
    }

    .notif_title {
        font-weight: bold;
        font-size: 18px;
    }

    .notif_desc {
        font-size: 15px;
    }

    #notif_bar {
        padding: 1px;
        width: 100%;
        background-color: blue;

        position: absolute;
        left: 0;
        bottom: 0;

        transition: all 4s linear;
    }

    /* 
    ###############################################################################
    #
    #
    #
    #
    #
    ###############################################################################
    */

    .tbl_container {
        margin-top: 20px;
        overflow-x: auto;
    }

    .tbl_search {
        max-width: 150px;
        padding: 1px 5px;
        font-size: 15px;
    }

    .tbl_sorting {
        /* border: 1px solid black; */
        padding: 0 5px;
        cursor: pointer;
        float: right;
    }

    .tbl_users {
        border-collapse: collapse
    }

    .tbl_users th, td {
        border: 1px solid black;
        padding: 1px 10px;
        cursor: default;
    }

    .tbl_users thead {
        background-color: #00A1DC;
    }

    .tbl_users tbody tr:hover {
        background-color: #CBCBCB;
    }

    .tbl_chckBox {
        width: 30px;
        text-align: center;
    }
    .tbl_chckBox input {
        cursor: pointer;
        height: 14px;
        width: 14px;
        margin-top: 6px;
    }

    .tbl_users .tbl_edit_btn {
        font-size: 15px;
        background-color: blue;
        color: white;
        padding: 1px 5px;
        cursor: pointer;
    }


    #checkAll_checkbox_icon {
        cursor: pointer;
    }

    #uncheckAll_checkbox_icon {
        cursor: pointer;
    }


    /*
    ===============================================================================================
    =
    =
    = Modal - delete button confirmation
    =
    =
    ===============================================================================================
    */
    /* The Modal (background) */
    .modal_confirmDel_container {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal_confirmDel_contents {
        background-color: #fefefe;
        margin: auto;
        padding-top: 35px;
        padding-bottom: 25px;
        border: 1px solid #888;
        width: 100%;
        max-width: 500px;
    }

    @font-face {
        font-family: "PromptRegular";
        src: url("assets/fonts/Prompt/Prompt-Regular.ttf");
    }

    .modal_icon_confirm_del i {
        font-size: 120px;
    }

    .modal_label_confirm_del {
        margin-top: 30px;
        font-size: 30px;
        font-family: "PromptRegular";
    }









</style>



<?php 
// Sessions sets
if(!isset($_SESSION['users_toggle_modal'])) {
    $_SESSION['users_toggle_modal'] = "";
}
if(!isset($_SESSION['users_notif_status'])) {
    $_SESSION['users_notif_status'] = "";
}
if(!isset($_SESSION['users_notif_title'])) {
    $_SESSION['users_notif_title'] = "";
}
if(!isset($_SESSION['users_notif_desc'])) {
    $_SESSION['users_notif_desc'] = "";
}





// empty fields
if(!isset($_SESSION['users_empty_idNum'])) {
    $_SESSION['users_empty_idNum'] = "";
}
if(!isset($_SESSION['users_empty_fname'])) {
    $_SESSION['users_empty_fname'] = "";
}
if(!isset($_SESSION['users_empty_lname'])) {
    $_SESSION['users_empty_lname'] = "";
}
if(!isset($_SESSION['users_empty_email'])) {
    $_SESSION['users_empty_email'] = "";
}
if(!isset($_SESSION['users_empty_username'])) {
    $_SESSION['users_empty_username'] = "";
}
if(!isset($_SESSION['users_empty_password'])) {
    $_SESSION['users_empty_password'] = "";
}




// data duplication
if(!isset($_SESSION['users_duplication_idNumber'])) {
    $_SESSION['users_duplication_idNumber'] = "";
}
if(!isset($_SESSION['users_duplication_name'])) {
    $_SESSION['users_duplication_name'] = "";
}
if(!isset($_SESSION['users_duplication_email'])) {
    $_SESSION['users_duplication_email'] = "";
}
if(!isset($_SESSION['users_duplication_username'])) {
    $_SESSION['users_duplication_username'] = "";
}


// Notif
if(!isset($_SESSION['open_notif'])) {
    $_SESSION['open_notif'] = "";
}
if(!isset($_SESSION['notif_status'])) {
    $_SESSION['notif_status'] = "";
}
if(!isset($_SESSION['notif_title'])) {
    $_SESSION['notif_title'] = "";
}
if(!isset($_SESSION['notif_desc'])) {
    $_SESSION['notif_desc'] = "";
}


// Edit users
if(!isset($_SESSION['openModal_userEdit_userID'])) {
    $_SESSION['openModal_userEdit_userID'] = "";
}

if(!isset($_SESSION['openModal_userEdit'])) {
    $_SESSION['openModal_userEdit'] = "";
}


// data didn't exist
if(!isset($_SESSION['dataEmpty_idNumber'])) {
    $_SESSION['dataEmpty_idNumber'] = "";
}
if(!isset($_SESSION['dataEmpty_Fname'])) {
    $_SESSION['dataEmpty_Fname'] = "";
}
if(!isset($_SESSION['dataEmpty_Lname'])) {
    $_SESSION['dataEmpty_Lname'] = "";
}
if(!isset($_SESSION['dataEmpty_email'])) {
    $_SESSION['dataEmpty_email'] = "";
}
if(!isset($_SESSION['dataEmpty_username'])) {
    $_SESSION['dataEmpty_username'] = "";
}


// Duplication
if(!isset($_SESSION['duplicate_users_idNumber'])) {
    $_SESSION['duplicate_users_idNumber'] = "";
}
if(!isset($_SESSION['duplicate_users_name'])) {
    $_SESSION['duplicate_users_name'] = "";
}
if(!isset($_SESSION['duplicate_users_email'])) {
    $_SESSION['duplicate_users_email'] = "";
}
if(!isset($_SESSION['duplicate_users_username'])) {
    $_SESSION['duplicate_users_username'] = "";
}


?>







<!-- Notification popup -->
<div class="notif_container">
    <div class="notif_contents" id="myNotif">
        <?php 
        
        if($_SESSION['notif_status'] == "green") {   // Green
            ?>
            <div class="notif_icon" id="notif_icon_userDel" style="color: green;"> <!-- icon -->
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <?php
        }elseif($_SESSION['notif_status'] == "red") {   // Red
            ?>
            <div class="notif_icon" id="notif_icon_userDel" style="color: red;"> <!-- icon -->
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <?php
        }else {
            ?>
            <!-- alert for deleting users -->
            <div id="notif_icon_userDel"></div>
            <?php 
        }
        ?>



        <div class="notif_body">
            <div class="notif_title">
                <!-- alert for deleting users -->
                <div id="notif_title_userDel"> <?php echo $_SESSION['notif_title']; ?> </div>
            </div>
            <div class="notif_desc">
                <!-- alert for deleting users -->
                <div id="notif_desc_userDel"> <?php echo $_SESSION['notif_desc']; ?> </div>
            </div>
        </div>
        <div id="notif_bar"></div>
    </div>
</div>


<?php 
$_SESSION['notif_status'] = "";
$_SESSION['notif_title'] = "";
$_SESSION['notif_desc'] = "";

?>



<div class="page_title">
    Users
</div>


<div class="users_container">



    <!-- Table -->
    <div class="tbl_container">
        <table class="tbl_users">
            <thead>
                <tr>
                    <th colspan="5" style="padding: 5px;">
                        <div align="right">
                            <button type="button" onclick="window.location.href = 'home_page.php?users';" class="btn btn-sm btn-secondary"> <i class="fa-solid fa-rotate"></i> Refresh </button>
                            <button type="button" id="btnOpenModal" class="btn btn-sm btn-success"> <i class="fa-solid fa-user-plus"></i> Add User</button>
                            <button type="button" class="btn btn-sm btn-danger" onclick="openModalConfirmDel()">Delete</button>
                        </div>
                    </th>
                </tr>
                <!-- search bar -->
                <tr>
                    <td></td>
                    <td> 
                        <!-- id number - search -->
                        <form action="home_page.php?users" method="POST">
                            <input type="text" name="tbl_search_idnumber" class="tbl_search" placeholder="Search...">
                            <input type="submit" style="display: none;">
                        </form> 
                    </td>
                    <td> 
                        <!-- name - search -->
                        <form action="home_page.php?users" method="POST">
                            <input type="text" name="tbl_search_name" class="tbl_search" placeholder="Search...">
                            <input type="submit" style="display: none;">
                        </form> 
                    </td>
                    <td> 
                        <!-- email - search -->
                        <form action="home_page.php?users" method="POST">
                            <input type="text" name="tbl_search_email" class="tbl_search" placeholder="Search...">
                            <input type="submit" style="display: none;">
                        </form> 
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th class="tbl_chckBox"> 
                        <div id="checkAll_checkbox_icon" onclick="checkAll_users()" title="Check all"> <i class="fa-regular fa-square"></i> </div> 
                        <div id="uncheckAll_checkbox_icon" onclick="uncheckAll_users()" title="Uncheck all"> <i class="fa-solid fa-square-check"></i> </div> 
                    </th>
                    <th>
                        ID Number 
                        <span class="tbl_sorting" style="<?php if(isset($_GET['users']) && isset($_GET['sortIDnum'])){echo 'display: none;';} ?>" id="sort_allSort_idNum" onclick="sort_allSort_idNumber()"> <i class="fa-solid fa-sort"></i> </span>
                        <span class="tbl_sorting" style="<?php if(isset($_GET['sortIDnum']) && $_GET['sortIDnum'] == "up"){echo 'display: block;';}else{echo'display: none;';} ?>" id="sort_upSort_idNum" onclick="sort_upSort_idNumber()"> <i class="fa-solid fa-sort-up"></i> </span>
                        <span class="tbl_sorting" style="<?php if(isset($_GET['sortIDnum']) && $_GET['sortIDnum'] == "down"){echo 'display: block;';}else{echo'display: none;';} ?>" id="sort_downSort_idNum" onclick="sort_downSort_idNumber()"> <i class="fa-solid fa-sort-down"></i> </span>
                    </th>
                    <th>
                        Name
                        <span class="tbl_sorting" style="<?php if(isset($_GET['users']) && isset($_GET['sortName'])){echo 'display: none;';} ?>" id="sort_allSort_name" onclick="sort_allSort_Name()"> <i class="fa-solid fa-sort"></i> </span>
                        <span class="tbl_sorting" style="<?php if(isset($_GET['sortName']) && $_GET['sortName'] == "up"){echo 'display: block;';}else{echo'display: none;';} ?>" id="sort_upSort_name" onclick="sort_upSort_Name()"> <i class="fa-solid fa-sort-up"></i> </span>
                        <span class="tbl_sorting" style="<?php if(isset($_GET['sortName']) && $_GET['sortName'] == "down"){echo 'display: block;';}else{echo'display: none;';} ?>" id="sort_downSort_name" onclick="sort_downSort_Name()"> <i class="fa-solid fa-sort-down"></i> </span>
                    </th>
                    <th>
                        Email
                        <span class="tbl_sorting" style="<?php if(isset($_GET['users']) && isset($_GET['sortEmail'])){echo 'display: none;';} ?>" id="sort_allSort_email" onclick="sort_allSort_Email()"> <i class="fa-solid fa-sort"></i> </span>
                        <span class="tbl_sorting" style="<?php if(isset($_GET['sortEmail']) && $_GET['sortEmail'] == "up"){echo 'display: block;';}else{echo'display: none;';} ?>" id="sort_upSort_email" onclick="sort_upSort_Email()"> <i class="fa-solid fa-sort-up"></i> </span>
                        <span class="tbl_sorting" style="<?php if(isset($_GET['sortEmail']) && $_GET['sortEmail'] == "down"){echo 'display: block;';}else{echo'display: none;';} ?>" id="sort_downSort_email" onclick="sort_downSort_Email()"> <i class="fa-solid fa-sort-down"></i> </span>
                    </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php  

                

                // sort ID NUMBER
                if(isset($_GET['sortIDnum']) && $_GET['sortIDnum'] == "up") {     // ASC sort - ID Number
                    // searching -> id number
                    if(isset($_POST['tbl_search_idnumber'])) {
                        if($_POST['tbl_search_idnumber'] != "") {
                            $_SESSION['users_search_idnumber'] = "AND id_number LIKE '%".$_POST['tbl_search_idnumber']."%'";
                        }else {
                            $_SESSION['users_search_idnumber'] = "";
                        }
                    }

                    $sql_tbl_users = "SELECT * FROM users WHERE id != '".$_SESSION['user_id']."' ".$_SESSION['users_search_idnumber']." ORDER BY id_number ASC";
                    $res_tbl_users = mysqli_query($conn, $sql_tbl_users);

                }elseif(isset($_GET['sortIDnum']) && $_GET['sortIDnum'] == "down") {     // ASC sort - ID Number
                    // searching -> id number
                    if(isset($_POST['tbl_search_idnumber'])) {
                        if($_POST['tbl_search_idnumber'] != "") {
                            $_SESSION['users_search_idnumber'] = "AND id_number LIKE '%".$_POST['tbl_search_idnumber']."%'";
                        }else {
                            $_SESSION['users_search_idnumber'] = "";
                        }
                    }

                    $sql_tbl_users = "SELECT * FROM users WHERE id != '".$_SESSION['user_id']."' ".$_SESSION['users_search_idnumber']." ORDER BY id_number DESC";
                    $res_tbl_users = mysqli_query($conn, $sql_tbl_users);
                
                // sort NAME
                }elseif(isset($_GET['sortName']) && $_GET['sortName'] == "up") {     // ASC sort - NAME
                    // searching -> name
                    if(isset($_POST['tbl_search_name'])) {
                        if($_POST['tbl_search_name'] != "") {
                            $_SESSION['users_search_name'] = "AND f_name LIKE '%".$_POST['tbl_search_name']."%'";
                        }else {
                            $_SESSION['users_search_name'] = "";
                        }
                    }

                    $sql_tbl_users = "SELECT * FROM users WHERE id != '".$_SESSION['user_id']."' ".$_SESSION['users_search_name']." ORDER BY f_name ASC";
                    $res_tbl_users = mysqli_query($conn, $sql_tbl_users);

                }elseif(isset($_GET['sortName']) && $_GET['sortName'] == "down") {     // ASC sort - NAME
                    // searching -> name
                    if(isset($_POST['tbl_search_name'])) {
                        if($_POST['tbl_search_name'] != "") {
                            $_SESSION['users_search_name'] = "AND f_name LIKE '%".$_POST['tbl_search_name']."%'";
                        }else {
                            $_SESSION['users_search_name'] = "";
                        }
                    }

                    $sql_tbl_users = "SELECT * FROM users WHERE id != '".$_SESSION['user_id']."' ".$_SESSION['users_search_name']." ORDER BY f_name DESC";
                    $res_tbl_users = mysqli_query($conn, $sql_tbl_users);

                // sort EMAIL
                }elseif(isset($_GET['sortEmail']) && $_GET['sortEmail'] == "up") {     // ASC sort - EMAIL
                    // searching -> email
                    if(isset($_POST['tbl_search_email'])) {
                        if($_POST['tbl_search_email'] != "") {
                            $_SESSION['users_search_email'] = "AND user_email LIKE '%".$_POST['tbl_search_email']."%'";
                        }else {
                            $_SESSION['users_search_email'] = "";
                        }
                    }

                    $sql_tbl_users = "SELECT * FROM users WHERE id != '".$_SESSION['user_id']."' ".$_SESSION['users_search_email']." ORDER BY user_email ASC";
                    $res_tbl_users = mysqli_query($conn, $sql_tbl_users);

                }elseif(isset($_GET['sortEmail']) && $_GET['sortEmail'] == "down") {     // ASC sort - EMAIL
                    // searching -> email
                    if(isset($_POST['tbl_search_email'])) {
                        if($_POST['tbl_search_email'] != "") {
                            $_SESSION['users_search_email'] = "AND user_email LIKE '%".$_POST['tbl_search_email']."%'";
                        }else {
                            $_SESSION['users_search_email'] = "";
                        }
                    }

                    $sql_tbl_users = "SELECT * FROM users WHERE id != '".$_SESSION['user_id']."' ".$_SESSION['users_search_email']." ORDER BY user_email DESC";
                    $res_tbl_users = mysqli_query($conn, $sql_tbl_users);

                }else {     // Default sort

                    // searching -> id number
                    if(isset($_POST['tbl_search_idnumber']) && $_POST['tbl_search_idnumber']) {
                        $_SESSION['users_search_idnumber'] = "AND id_number LIKE '%".$_POST['tbl_search_idnumber']."%'";
                    }else {
                        $_SESSION['users_search_idnumber'] = "";
                    }

                    // searching -> name
                    if(isset($_POST['tbl_search_name']) && $_POST['tbl_search_name']) {
                        $_SESSION['users_search_name'] = "AND f_name LIKE '%".$_POST['tbl_search_name']."%' OR l_name LIKE '%".$_POST['tbl_search_name']."%'";
                    }else {
                        $_SESSION['users_search_name'] = "";
                    }   
                    
                    // searching -> email
                    if(isset($_POST['tbl_search_email']) && $_POST['tbl_search_email']) {
                        $_SESSION['users_search_email'] = "AND user_email LIKE '%".$_POST['tbl_search_email']."%'";
                    }else {
                        $_SESSION['users_search_email'] = "";
                    }   


                    $sql_tbl_users = "SELECT * FROM users WHERE id != '".$_SESSION['user_id']."' ".$_SESSION['users_search_idnumber']." ".$_SESSION['users_search_name']." ".$_SESSION['users_search_email']." ";
                    $res_tbl_users = mysqli_query($conn, $sql_tbl_users);
                }




                // Clear session
                // if(isset($_GET['users'])) {
                //     $_SESSION['users_search_idnumber'] = "";
                // }




                if (mysqli_num_rows($res_tbl_users) > 0) {
                    // output data of each row
                    while($row_tbl_users = mysqli_fetch_assoc($res_tbl_users)) {
                        $tbl_user_id = $row_tbl_users['id'];
                        $tbl_user_idNumber = $row_tbl_users['id_number'];
                        $tbl_user_Fname = $row_tbl_users['f_name'];
                        $tbl_user_Lname = $row_tbl_users['l_name'];
                        $tbl_user_email = $row_tbl_users['user_email'];
                        $tbl_user_username = $row_tbl_users['username'];

                        ?>
                        <tr>
                            <td class="tbl_chckBox"> 
                                <input type="checkbox" name="users_list[]" class="deleteCheckbox" value="<?php echo $tbl_user_id; ?>"> 
                                <!-- <input type="text" name="users_id[]" value="<?php //echo $tbl_user_id; ?>" style="display: none;"> -->
                            </td>
                            <td> <?php echo $tbl_user_idNumber; ?> </td>
                            <td> <?php echo $tbl_user_Fname." ".$tbl_user_Lname; ?> </td>
                            <td> <?php echo $tbl_user_email; ?> </td>
                            <td> <span id="userEdit_openModal<?php echo $tbl_user_id; ?>" onclick="openModalEdit<?php echo $tbl_user_id; ?>()" class="tbl_edit_btn">Update</span> </td>
                        </tr>
                        <?php 
                        // Modal 2 - Edit 
                        include "users_editModal.php";
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">No Records</td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
</div>






<!-- Modal - Confirm Deletion -->
<div class="modal_confirmDel_container" id="modal_container_confirm_del">
    <div align="center" class="modal_confirmDel_contents">
        <div class="modal_icon_confirm_del text-warning">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>
        <p class="modal_label_confirm_del">
            Are you sure?
        </p>

        <button type="button" onclick="closeModalConfirmDel()" class="btn btn-secondary">CANCEL</button>
        <button type="button" id="delConfirm" class="btn btn-primary">YES</button>
    </div>
</div>



<!-- deletion result here -->
<div id="deleteConfirmed"></div>












<!-- Notification button -->
<button type="button" id="notifButoon" onclick="openNotif()" class="btn btn-sm btn-primary" style="padding: 2px 20px; display: none;">Notif</button>











<!-- The Modal -->
<div id="myModal" class="myModalClassname">

	<!-- Modal content -->
	<form action="php/main_process.php" method="POST" class="modal_content">
        <!-- header -->
        <div class="modal_header">
            Create new user
        </div>
        <!-- body -->
		<div class="modal_body">
            <div class="modal_body_left">
                <div class="txt_fields">
                    ID Number: <br>
                    <input type="text" name="addUser_IDnumber" class="modal_txtbox" style="<?php if($_SESSION['users_empty_idNum'] === 1){echo 'border: 2px solid red;';} ?>" placeholder="Enter id number">
                    <div align="right" style="<?php if($_SESSION['users_empty_idNum'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Please fill the blank.</small> </div>
                    <div align="right" style="<?php if($_SESSION['users_duplication_idNumber'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Already taken!</small> </div>
                </div>
                <div class="txt_fields">
                    First Name: <br>
                    <input type="text" name="addUser_fname" class="modal_txtbox" style="<?php if($_SESSION['users_empty_fname'] === 1){echo 'border: 2px solid red;';} ?>" placeholder="Enter first name">
                    <div align="right" style="<?php if($_SESSION['users_empty_fname'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Please fill the blank.</small> </div>
                    <div align="right" style="<?php if($_SESSION['users_duplication_name'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Already taken!</small> </div>
                </div>
                <div class="txt_fields">
                    Last Name: <br>
                    <input type="text" name="addUser_lname" class="modal_txtbox" style="<?php if($_SESSION['users_empty_lname'] === 1){echo 'border: 2px solid red;';} ?>" placeholder="Enter last name">
                    <div align="right" style="<?php if($_SESSION['users_empty_lname'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Please fill the blank.</small> </div>
                    <div align="right" style="<?php if($_SESSION['users_duplication_name'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Already taken!</small> </div>
                </div>
            </div>
            <div class="modal_body_right">
                <div class="txt_fields">
                    Email: <br>
                    <input type="email" name="addUser_email" class="modal_txtbox" style="<?php if($_SESSION['users_empty_email'] === 1){echo 'border: 2px solid red;';} ?>" placeholder="Enter email">
                    <div align="right" style="<?php if($_SESSION['users_empty_email'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Please fill the blank.</small> </div>
                    <div align="right" style="<?php if($_SESSION['users_duplication_email'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Already taken!</small> </div>
                </div>
                <div class="txt_fields">
                    Username: <br>
                    <input type="text" name="addUser_username" class="modal_txtbox" style="<?php if($_SESSION['users_empty_username'] === 1){echo 'border: 2px solid red;';} ?>" placeholder="Enter username">
                    <div align="right" style="<?php if($_SESSION['users_empty_username'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Please fill the blank.</small> </div>
                    <div align="right" style="<?php if($_SESSION['users_duplication_username'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Already taken!</small> </div>
                </div>
                <div class="txt_fields">
                    Password: <br>
                    <input type="text" id="generatedPass" name="addUser_password" class="modal_txtbox" style="<?php if($_SESSION['users_empty_password'] === 1){echo 'border: 2px solid red;';} ?>" placeholder="Enter password">
                    <div align="right" style="<?php if($_SESSION['users_empty_password'] == 1) {echo'display: block;';}else{echo'display:none;';} ?> position: absolute; top: 0; right: 0;"> <small style="color: red;"> <i class="fa-solid fa-circle-exclamation"></i> Please fill the blank.</small> </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div align="right" class="modal_footer">
            <button type="button" class="btn btn-sm btn-outline-secondary closeBtnModal">Cancel</button>
            <button type="submit" name="users_btn_addUser" class="btn btn-sm btn-outline-primary">Submit</button>
        </div>
    </form>

</div>




















<script>
    // MODAL ==================================================================================================
    //
    //
    //
    //
    // ========================================================================================================

    // Get the modal
    var my_modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("btnOpenModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeBtnModal")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        // Generate Unique Password
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var id = '';
        for (var i = 0; i < 6; i++) {
            var randomIndex = Math.floor(Math.random() * characters.length);
            id += characters[randomIndex];

            document.getElementById("generatedPass").value = id;
        } 
        // END -- Generate Unique Password

        // Open modal
        my_modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        my_modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == my_modal) {
            my_modal.style.display = "none";
        }
    }



    // Notification =============================================================================================
    //
    //
    //
    //
    //
    //

    // click modal button
    <?php 
    if($_SESSION['users_toggle_modal'] == 1) {
        ?>
        // modal
        setTimeout(executeModalBtn, 500);   // execute after .5 second.

        function executeModalBtn() {  

            // click modal button
            document.getElementById("btnOpenModal").click(); // modal
        }
        <?php
    }
    ?>



<?php 
    if($_SESSION['open_notif'] == 1) {
        ?>
        // Click notification button if session is called.
        setTimeout(myFunction, 1000);   // execute in 1 second

        function myFunction() {
            document.getElementById("notifButoon").click();   // click notif btn
        }
        <?php
    }
    ?>



    // Notification function
    function openNotif() {

        myNotif.style.top = "10px";  // bring down the notif


        // progress bar
        setTimeout(startProgressBar, 900);   // execute in .8 second.
        function startProgressBar() {
            notif_bar.style.width = "0%";  // progress bar minimize
        }

        setTimeout(bringNotifUp, 5000);   // execute in 1 second.
        function bringNotifUp() {
            myNotif.style.top = "-100px";  // bring up the notif
            notif_bar.style.width = "100%";  // progress bar maximize
        }
    }





    // Press `Esc` key to close modal - edit users ============================================================
    //
    //
    //
    //
    // ========================================================================================================




    // Press `Esc` key to close modal on editing users
    $(document).on(
        'keydown',
        function(event) {
            if(event.key == "Escape") {
                // Edit modal ====
                const editModal = document.getElementsByClassName("myModalEdit");
                // Close all modal
                for (let i = 0; i < editModal.length; i++) {
                    editModal[i].style.display = "none";
                }
                // Add user modal ====
                const AddUserModal = document.getElementsByClassName("myModalClassname");
                // Close modal
                AddUserModal[0].style.display = "none";

                // Close modal - confirm password
                // modal_confirmDel_container
                const confirmDelModal = document.getElementsByClassName("modal_confirmDel_container");
                confirmDelModal[0].style.display = "none";
            }
        }
    );

    // ========================================================================================================================
    //
    //
    //
    //
    //
    // Open modal when there's error updating user ============================================================================
    <?php 
    if($_SESSION['openModal_userEdit'] === 1) {
        ?>
        setTimeout(myFunction, 500);

        function myFunction() {
            // open modal by ID
            document.getElementById("userEdit_openModal<?php echo $_SESSION['openModal_userEdit_userID']; ?>").click();
        }
        <?php 
    }
    ?>

    /*
    ====================================================================
    #
    #
    #
    #
    #
    ====================================================================
    */


    // Check all checkbox users =============
    uncheckAll_checkbox_icon.style.display = "none";
    function checkAll_users() {
        checkAll_checkbox_icon.style.display = "none";          // Hide Check icon
        uncheckAll_checkbox_icon.style.display = "block";       // Display uncheck icon

        // Check all checkbox
        var ele=document.getElementsByName('users_list[]');  
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=true;  
        }
    }

    function uncheckAll_users() {
        checkAll_checkbox_icon.style.display = "block";         // Display check icon
        uncheckAll_checkbox_icon.style.display = "none";        // Hide uncheck icon

        // Check all uncheckbox
        var ele=document.getElementsByName('users_list[]');  
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=false;  
                
        }
    }

    /*
    ====================================================================
    #
    #
    #
    #
    #
    ====================================================================
    */

    // Modal Confirm to Delete
    // Open Modal
    function openModalConfirmDel() {

        modal_container_confirm_del.style.display = "block";
    }

    // Close Modal
    function closeModalConfirmDel() {

        modal_container_confirm_del.style.display = "none";
    }

    /*
    ====================================================================
    #
    #
    #
    #
    #
    ====================================================================
    */


    // Delete selected users function =======================================================
    $(document).ready(function() {
        $("#delConfirm").on("click", function() {   // Yes button from Confirm deletion
            var selectedItems = [];

            // Get values of selected checkboxes
            $(".deleteCheckbox:checked").each(function() {      // checkbox with value of users ID
                selectedItems.push($(this).val());
            });

            // Check if any item is selected
            if (selectedItems.length > 0) {
                // Send AJAX request to delete.php
                $.ajax({
                    type: "POST",
                    url: "php/main_process.php",
                    data: { selectedUserDel: selectedItems },
                    success: function(response) {
                        // Handle the response from the server
                        console.log(response);
                        $("#deleteConfirmed").html(response);
                    },
                    error: function(error) {
                        console.error("AJAX request failed:", error);
                        alert("AJAX request failed...");
                    }
                });
            } else {
                // alert("Please select at least one item to delete.");
                modal_container_confirm_del.style.display = "none";
                openNotif();
                document.getElementById("notif_icon_userDel").innerHTML = '<div class="notif_icon" style="color: red;"> <i class="fa-solid fa-circle-xmark"></i> </div>';
                document.getElementById("notif_title_userDel").innerHTML = "Invalid";
                document.getElementById("notif_desc_userDel").innerHTML = "Please select at least one to delete.";
            }
        });
    });

    /*
    ====================================================================
    #
    #
    #
    #
    #
    ====================================================================
    */
    // SORTING KEYS
    // ID Number
    // sort_upSort_idNum.style.display = "none";       // default hidden
    // sort_downSort_idNum.style.display = "none";     // default hidden
    function sort_allSort_idNumber() {     // sorting
        sort_allSort_idNum.style.display = "none";
        sort_upSort_idNum.style.display = "block";

        window.location.href = 'home_page.php?users&sortIDnum=up';   // sort ASC - turn arrow UP
    }

    function sort_upSort_idNumber() {      // sort up
        sort_upSort_idNum.style.display = "none";
        sort_downSort_idNum.style.display = "block";

        window.location.href = 'home_page.php?users&sortIDnum=down';   // sort DESC - turn arrow DOWN
    }

    function sort_downSort_idNumber() {      // sort down
        sort_allSort_idNum.style.display = "block";
        sort_downSort_idNum.style.display = "none";

        window.location.href = 'home_page.php?users';   // sort ALL - turn arrow ALL
    }




    // Name
    // sort_upSort_name.style.display = "none";       // default hidden
    // sort_downSort_name.style.display = "none";     // default hidden
    function sort_allSort_Name() {     // sorting
        sort_allSort_name.style.display = "none";
        sort_upSort_name.style.display = "block";

        window.location.href = 'home_page.php?users&sortName=up';   // sort ASC - turn arrow UP
    }

    function sort_upSort_Name() {      // sort up
        sort_upSort_name.style.display = "none";
        sort_downSort_name.style.display = "block";

        window.location.href = 'home_page.php?users&sortName=down';   // sort ASC - turn arrow UP
    }

    function sort_downSort_Name() {      // sort down
        sort_allSort_name.style.display = "block";
        sort_downSort_name.style.display = "none";

        window.location.href = 'home_page.php?users';   // sort ALL - turn arrow ALL
    }



    // Email
    // sort_upSort_email.style.display = "none";       // default hidden
    // sort_downSort_email.style.display = "none";     // default hidden
    function sort_allSort_Email() {     // sorting
        sort_allSort_email.style.display = "none";
        sort_upSort_email.style.display = "block";

        window.location.href = 'home_page.php?users&sortEmail=up';   // sort ASC - turn arrow UP
    }

    function sort_upSort_Email() {      // sort up
        sort_upSort_email.style.display = "none";
        sort_downSort_email.style.display = "block";

        window.location.href = 'home_page.php?users&sortEmail=down';   // sort ASC - turn arrow UP
    }

    function sort_downSort_Email() {      // sort down
        sort_allSort_email.style.display = "block";
        sort_downSort_email.style.display = "none";

        window.location.href = 'home_page.php?users';   // sort ALL - turn arrow ALL
    }
 
</script>






<?php 
// Clear sessions
$_SESSION['users_toggle_modal'] = "";
$_SESSION['users_notif_status'] = "";
$_SESSION['users_empty_idNum'] = "";
$_SESSION['users_empty_fname'] = "";
$_SESSION['users_empty_lname'] = "";
$_SESSION['users_empty_email'] = "";
$_SESSION['users_empty_username'] = "";
$_SESSION['users_empty_password'] = "";

$_SESSION['users_duplication_idNumber'] = "";
$_SESSION['users_duplication_name'] = "";
$_SESSION['users_duplication_email'] = "";
$_SESSION['users_duplication_username'] = "";


// Notif 
$_SESSION['open_notif'] = "";

$_SESSION['openModal_userEdit'] = "";
$_SESSION['openModal_userEdit_userID'] = "";

$_SESSION['dataEmpty_idNumber'] = "";
$_SESSION['dataEmpty_Fname'] = "";
$_SESSION['dataEmpty_Lname'] = "";
$_SESSION['dataEmpty_email'] = "";
$_SESSION['dataEmpty_username'] = "";


// Duplication
$_SESSION['duplicate_users_idNumber'] = "";
$_SESSION['duplicate_users_name'] = "";
$_SESSION['duplicate_users_email'] = "";
$_SESSION['duplicate_users_username'] = "";


?>