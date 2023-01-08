<?php

use App\Http\Controllers\ServicerPagesController;

$username = ServicerPagesController::sessionServicerUsername();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1a52a82c6c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/styles.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="yards-body">
    <script>
        function deleteFunction() {
            alert('Are you sure you want to delete this yard? This will permanatly delete this yard from your yards index!');
        }
    </script>
    <h1 class="yards-h1">My Yards</h1>
    <div id="style-15" class="yards-container">
        <?php for ($x = 0; $x <= 30; $x++) {
            echo '<div class="row">
            <div class="column1">dates</div>
            <div class="column2">yard address / name / description</div>
            <div class="column4"><i id="map-icon" class="far fa-map"></i></div>
            <div class="column3"><i id="x-icon" class="fas fa-times" onclick="deleteFunction()"></i></div>
        </div>
        <hr class="yards-hr">';
        }
        ?>
    </div>

</body>

</html>