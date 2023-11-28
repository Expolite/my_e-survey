




// Sidebar function ##########################################################################

// Hide all Label Icons items on SideBar
// var allClassName_SideBar_items = document.getElementsByClassName("sd_itemIcons");
// for (let i = 0; i < allClassName_SideBar_items.length; i++) {
//     const selected_items = document.getElementsByClassName('sd_itemIcons')[i];
//     selected_items.style.display = 'none';
// }



// hide open/menu bar button
// open_sidebar.style.display = "none";
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main_body").style.marginLeft = "200px";
    close_btn.style.display = "block";      // display CloseBtn
    open_sidebar.style.display = "none";    // hide OpenNav

    // Sidebar contens

    // Display all Label items on SideBar
    var allClassName_SideBar_items = document.getElementsByClassName("sd_itemList");
    for (let i = 0; i < allClassName_SideBar_items.length; i++) {
        const selected_items = document.getElementsByClassName('sd_itemList')[i];
        selected_items.style.display = 'block';
    }

    // Display all Label Icons items on SideBar
    var allClassName_SideBar_items = document.getElementsByClassName("sd_itemIcons");
    for (let i = 0; i < allClassName_SideBar_items.length; i++) {
        const selected_items = document.getElementsByClassName('sd_itemIcons')[i];
        selected_items.style.display = 'none';
    }
}
//
//
//
//
// Close
function closeNav() {
    document.getElementById("mySidenav").style.width = "50px";
    document.getElementById("main_body").style.marginLeft= "50px";
    close_btn.style.display = "none";       // hide CloseBtn
    open_sidebar.style.display = "block";   // display OpenNav

    // Sidebar contens

    // Hide all Label items on SideBar
    var allClassName_SideBar_items = document.getElementsByClassName("sd_itemList");
    for (let i = 0; i < allClassName_SideBar_items.length; i++) {
        const selected_items = document.getElementsByClassName('sd_itemList')[i];
        selected_items.style.display = 'none';
    }

    // Hide all Label Icons items on SideBar
    var allClassName_SideBar_items = document.getElementsByClassName("sd_itemIcons");
    for (let i = 0; i < allClassName_SideBar_items.length; i++) {
        const selected_items = document.getElementsByClassName('sd_itemIcons')[i];
        selected_items.style.display = 'block';
    }
}









