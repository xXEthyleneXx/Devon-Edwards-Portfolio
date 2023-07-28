let NAV_STATUS = true;

function update_navigation() {
    let nav = document.getElementById("navigation");
    if (NAV_STATUS == true) {
        nav.style.width = "0px";
        NAV_STATUS = false;
    } else {
        nav.style.width = "200px";
        NAV_STATUS = true;
    }
}