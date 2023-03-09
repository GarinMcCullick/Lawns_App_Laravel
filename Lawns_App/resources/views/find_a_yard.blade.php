<?php

use App\Http\Controllers\CustPagesController;
use App\Http\Controllers\ServicerPagesController;

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
    $populate = ServicerPagesController::PopulateFindAYard();
    //var_dump($populate);
    //form data being pulled from login to Index to cust_landing where in cust_landing i am putting Post data into session.
    $star = '<i class="far fa-star"></i>';
    $filledStar = '<i class="fas fa-star"></i>';
    ?>
    <section class="cust-landing-section">
        <div class="content-container">
            <div class="title-container">
                <h2 class="welcome-text">Let's Find Some Yards <?php echo ucfirst($username) ?></h2>
            </div>
            <div class="search-container">find a customer</div>
            <div class="user-container">
                <?php
                foreach ($populate as $key) {
                    echo "<div class='box'>";
                    echo "<img></img>";
                    echo "<p>" . ucfirst($key['username']) . "<br>";
                    echo "Customer Rating" . "<br>";
                    if ($key['custRating'] <= 0) {
                        echo $filledStar . $star . $star . $star . $star;
                    } else if ($key['custRating'] <= 1) {
                        echo $filledStar . $filledStar . $star . $star . $star;
                    } else if ($key['custRating'] <= 2) {
                        echo $filledStar . $filledStar . $filledStar . $star . $star;
                    } else if ($key['custRating'] <= 3) {
                        echo $filledStar . $filledStar . $filledStar . $star . $star;
                    } else if ($key['custRating'] >= 4 && $key['custRating'] < 5) {
                        echo $filledStar . $filledStar . $filledStar . $filledStar . $star;
                    } else {
                        echo $filledStar . $filledStar . $filledStar . $filledStar . $filledStar;
                    }
                    echo '<p>';
                    echo $key['custBio'];
                    echo '</p>
                    
            <span>
            <button>More Info</button>
            </span>
        </div>';
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>