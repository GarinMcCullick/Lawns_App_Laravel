<?php

use App\Http\Controllers\CustPagesController;

$username = CustPagesController::SessionUsername();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1a52a82c6c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Lawns.io</title>
</head>

<body>
    <?php
    $populate = CustPagesController::PopulateLanding();
    //var_dump($populate);
    //form data being pulled from login to Index to cust_landing where in cust_landing i am putting Post data into session.
    $star = '<i id="empty-star-icon" class="far fa-star"></i>';
    $filledStar = '<i id="filled-star-icon" class="fas fa-star"></i>';
    ?>
    <section class="cust-landing-section">
        <div class="content-container">
            <div class="title-container">
                <h2 class="welcome-text">Welcome <?php echo ucfirst($username) ?></h2>
            </div>
            <div class="search-container">find a mower</div>
            <div class="user-container">
                <?php
                foreach ($populate as $key) {
                    echo "<div class='box'>";
                    echo "<img></img>";
                    echo "<p>" . ucfirst($key['username']) . "<br>";
                    echo "Servicer Rating" . "<br>";
                    if ($key['servicerRating'] <= 0) {
                        echo $filledStar . $star . $star . $star . $star;
                    } else if ($key['servicerRating'] <= 1) {
                        echo $filledStar . $filledStar . $star . $star . $star;
                    } else if ($key['servicerRating'] <= 2) {
                        echo $filledStar . $filledStar . $filledStar . $star . $star;
                    } else if ($key['servicerRating'] <= 3) {
                        echo $filledStar . $filledStar . $filledStar . $star . $star;
                    } else if ($key['servicerRating'] >= 4 && $key['servicerRating'] < 5) {
                        echo $filledStar . $filledStar . $filledStar . $filledStar . $star;
                    } else {
                        echo $filledStar . $filledStar . $filledStar . $filledStar . $filledStar;
                    }
                    echo '<p>';
                    echo $key['servicerBio'];
                    echo '</p>';
                    echo '      
            <span>
            <button>Select</button>
            </span>
        </div>';
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>