
<?php
    include "main.php";

    // if Session is Set
    if(!isset($_SESSION['user_id'])) {
        // go back to Login page
        header("location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php include "header.php"; ?>

</head>
<body>
    <!--
        ###################################################################################################################
        #
        #
        #
        #
        #
        ###################################################################################################################
    -->
    

    <!-- SIDEBAR -->
    <div id="mySidenav" class="side_nav">
        <a href="javascript:void(0)" class="closebtn" id="close_btn" onclick="closeNav()">&times;</a>
        <a href="#" class="open_nav" id="open_sidebar" onclick="openNav()"> &#9776; </a>
        
        <!-- Labels -->
        <a href="home_page.php?dashboard" class="sd_itemList">Dashboard</a>
        <a href="home_page.php?users" class="sd_itemList">Users</a>
        <a href="home_page.php?settings" class="sd_itemList">Settings</a>

        <!-- Icons -->
        <a href="home_page.php?dashboard" class="sd_itemIcons" title="Dashboard">&#128507;</a>  <!-- Dashboard -->
        <a href="home_page.php?users" class="sd_itemIcons" title="Dashboard"> <i class="fa-solid fa-users-gear"></i> </a>  <!-- Users -->
        <a href="home_page.php?settings" class="sd_itemIcons" title="Settings"> <i class="fa-solid fa-gear"></i> </a> <!-- Settings -->
    </div>

    <!--
        #########################################
        #
        #
        #
        #
        #########################################
    -->

    <!-- BODY -->
    <div id="main_body">
        <!-- Navbar -->
        <nav class="myNavbar">
            <div onclick="window.location.href = 'home_page.php'" class="navTitle">Header Title</div>
            <div style="margin-top: 3px;">
                <!-- Option -->
                <label for="navbarCheckBox" id="navbar_option" onclick="navbarOption()">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </label>
                <input type="checkbox" id="navbarCheckBox" style="display: none;">
                <!-- contents -->
                <ul class="navbar_lu" id="navbarLu">
                    <li class="navbar_li" title="Profile"><a href="home_page.php?profile"> <i class="fa-solid fa-user"></i> <?php echo $userInfo_fname; ?> </a></li>
                    <li class="navbar_li"> <span class="extraSpace_navbar"></span> </li>
                    <li class="navbar_li"> 
                        <button type="button" class="navbarLogout" onclick="window.location.href = 'logout.php'">
                             <i class="fa-solid fa-right-from-bracket"></i> 
                             <!-- tooltip -->
                             <div class="tooltip_logout">
                                Logout
                             </div>
                        </button> 
                    </li>
                </ul>
            </div>
        </nav>





        <!-- CALL PAGES -->
        <?php 
        if(isset($_GET['settings'])) 
        {  // Settings
            include "settings.php";

        }elseif(isset($_GET['profile'])) 
        {  // Profile
            include "profile_info.php";

        }elseif(isset($_GET['users'])) 
        {  // Users
            include "users.php";

        }elseif(isset($_GET['dashboard'])) 
        {  // Dashboard
            include "dashboard.php";

        }
        ?>

    </div>


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

<script>
    // navbar option
    function navbarOption() {
        var checkBoxStatus = document.getElementById("navbarCheckBox");
        
        if(checkBoxStatus.checked) {
            // alert("True");
            navbarLu.style.display = "none";
        }else {
            // alert("False");
            navbarLu.style.display = "block";
        }
    }
</script>

<!-- Footer -->
<?php include "footer.php"; ?>

<footer>

</footer>
</html>