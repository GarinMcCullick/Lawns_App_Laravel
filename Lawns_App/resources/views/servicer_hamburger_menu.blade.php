<!-- material icons CDN in the head section-->
<link href="/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--<script>
    function logoutJS() {
        <?php unset($_POST);

        ?>
    }
</script>-->
<ul class="menu">
    <li><a class="menuItem" href="./myLawns">My Lawns</a></li>
    <li><a class="menuItem" href="./find_a_yard">Find Yards</a></li>
    <li><a class="menuItem" href="./prev_yards">Previous Yards</a></li>
    <li><a class="menuItem" href="./servicerRating">Reviews</a></li>
    <li><a class="menuItem" href="./servicer_profile">Profile</a></li>
    <li><a class="menuItem" href="./servicer_settings">Settings</a></li>
    <li><a class="menuItem" href="/session/remove" onclick="logoutJS();">Logout</a></li>
    <!--this is the logout for now it just unsets form data from login... will need changed in future-->
</ul>
<button class="hamburger">
    <i class="menuIcon material-icons">menu</i>
    <i class="closeIcon material-icons">close</i>
</button>
<script>
    const menu = document.querySelector(".menu");
    const menuItems = document.querySelectorAll(".menuItem");
    const hamburger = document.querySelector(".hamburger");
    const closeIcon = document.querySelector(".closeIcon");
    const menuIcon = document.querySelector(".menuIcon");

    function toggleMenu() {
        if (menu.classList.contains("showMenu")) {
            menu.classList.remove("showMenu");
            closeIcon.style.display = "none";
            menuIcon.style.display = "block";
        } else {
            menu.classList.add("showMenu");
            closeIcon.style.display = "block";
            menuIcon.style.display = "none";
        }
    }

    hamburger.addEventListener("click", toggleMenu);

    menuItems.forEach(
        function(menuItem) {
            menuItem.addEventListener("click", toggleMenu);
        }
    )
</script>