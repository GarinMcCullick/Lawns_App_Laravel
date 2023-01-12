<?php

use App\Http\Controllers\CustPagesController;
use App\Http\Controllers\ServicerPagesController;

$username = CustPagesController::SessionUsername();
$rating = ServicerPagesController::GetRating();
$star = '<i id="empty-star-icon" class="far fa-star"></i>';
$filledStar = '<i id="filled-star-icon" class="fas fa-star"></i>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1a52a82c6c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawns.io</title>
</head>

<body>
    <section class="cust-landing-section">
        <div class="refferal-container">
            <h3 class="profile-title">
                <?php echo ucfirst($username);
                echo ' here are your reviews and rating!';
                ?>
            </h3>
            <div class="rating-box">
                <p>Rating</p>
                <?php
                if ($rating <= 0) {
                    echo $filledStar . $star . $star . $star . $star;
                } else if ($rating <= 1) {
                    echo $filledStar . $filledStar . $star . $star . $star;
                } else if ($rating <= 2) {
                    echo $filledStar . $filledStar . $filledStar . $star . $star;
                } else if ($rating <= 3) {
                    echo $filledStar . $filledStar . $filledStar . $star . $star;
                } else if ($rating >= 4 && $rating < 5) {
                    echo $filledStar . $filledStar . $filledStar . $filledStar . $star;
                } else {
                    echo $filledStar . $filledStar . $filledStar . $filledStar . $filledStar;
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>