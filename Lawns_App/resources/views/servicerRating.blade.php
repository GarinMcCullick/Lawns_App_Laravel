<?php

use App\Http\Controllers\CustPagesController;
use App\Http\Controllers\ServicerPagesController;

$username = CustPagesController::SessionUsername();
$rating = ServicerPagesController::GetRating();
/********************************************************/
$star = '<i id="empty-star-icon" class="far fa-star"></i>';
$filledStar = '<i id="filled-star-icon" class="fas fa-star"></i>';
if ($rating <= 0) {
    $stars = $filledStar . $star . $star . $star . $star;
} else if ($rating <= 1) {
    $stars = $filledStar . $filledStar . $star . $star . $star;
} else if ($rating <= 2) {
    $stars = $filledStar . $filledStar . $filledStar . $star . $star;
} else if ($rating <= 3) {
    $stars = $filledStar . $filledStar . $filledStar . $star . $star;
} else if ($rating >= 4 && $rating < 5) {
    $stars = $filledStar . $filledStar . $filledStar . $filledStar . $star;
} else {
    $stars = $filledStar . $filledStar . $filledStar . $filledStar . $filledStar;
}
/*********************************************************/
if ($rating <= 0) {
    $servicerStars = $filledStar . $star . $star . $star . $star;
} else if ($rating <= 1) {
    $servicerStars = $filledStar . $filledStar . $star . $star . $star;
} else if ($rating <= 2) {
    $servicerStars = $filledStar . $filledStar . $filledStar . $star . $star;
} else if ($rating <= 3) {
    $servicerStars = $filledStar . $filledStar . $filledStar . $star . $star;
} else if ($rating >= 4 && $rating < 5) {
    $servicerStars = $filledStar . $filledStar . $filledStar . $filledStar . $star;
} else {
    $servicerStars = $filledStar . $filledStar . $filledStar . $filledStar . $filledStar;
}
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
    <section class="cust-review-section">
        <div class="refferal-container">
            <h3 class="profile-title">
                <?php echo ucfirst($username);
                echo " your average rating is:";
                echo "<p>" . $servicerStars . "</p>";
                ?>
            </h3>
            <?php
            for ($i = 0; $i < 10; $i++) {
                echo "<div class='rating-box'>
                <div>
                    
                         
                    <div class='review-pic'></div>
                <p>Karen</p>"
                    . $stars . "<p>He was very friendly and got the job done quickly!</p></div></div>";
            }; ?>




    </section>
</body>

</html>