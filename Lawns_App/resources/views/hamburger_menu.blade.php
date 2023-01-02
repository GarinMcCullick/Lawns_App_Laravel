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
    <li><a class="menuItem" href="./landing">Home</a></li>
    <li><a class="menuItem" href="./profile">Profile</a></li>
    <li><a class="menuItem" href="./settings">Settings</a></li>
    <li><a class="menuItem" href="./refer_a_friend">Referalls</a></li>
    <li><a class="menuItem" href="./wallet">My Wallet</a></li>
    <li><a class="menuItem" href="./orders">My Orders</a></li>
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