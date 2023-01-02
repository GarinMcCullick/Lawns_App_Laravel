<?php

use App\Http\Controllers\CustPagesController;

$username = CustPagesController::SessionUsername();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Lawns.io</title>
</head>

<body>
    <?php

    //form data being pulled from login to Index to cust_landing where in cust_landing i am putting Post data into session.
    ?>
    <section class="cust-landing-section">
        <div class="content-container">
            <div class="title-container">
                <h2 class="welcome-text">Welcome <?php echo ucfirst($username) ?></h2>
            </div>
            <div class="search-container">find a mower</div>
            <div class="user-container">
                <?php
                for ($i = 0; $i <= 15; $i++) {
                    echo "<div class='box'>
                <img></img>
                <p>Username</p>
                <p>here is a bio about me blah blah blah</p>
                <span>
                <button>Select</button>
                </span>
            </div>";
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>