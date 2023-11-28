// Sidebar example source
https://www.w3schools.com/howto/howto_js_sidenav.asp


// Sidebar
- expand:  250px
- minimize:  50px



COLOR ===================================
red - #FF1818 > #FFC1C1
black - sidebar > #111
grey line > #E6E6E6 > #CBCBCB
grey notif - #838383





Roles ===================================
1 - admin
2 - IT Department
3 - Principal
4 - Staff






Notification SESSIONS ===========================
    $_SESSION['toggleNotif'] = "1";
    $_SESSION['notif_title'] = "Success";
    $_SESSION['notif_desc'] = "New user created!";




DATABASE ==============================
users:
id
date_log
date_created
username
user_pass
user_email
f_name
l_name
user_role
pfp



tbl_departments
- id
- names
- descriptions
- pictures
- rate
- ip_address
- created
- date_log


tbl_user_voteds
- id
- departments_id
- user_id
- date_log



tbl_user_viewed
- id
- departments_id
- user_id
- date_log





