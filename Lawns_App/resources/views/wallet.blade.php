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
    <section class="cust-landing-section">
        <div class="refferal-container">
            <h3 class="profile-title">My Wallet</h3>
            <div class="cards-section">
                <!--div needs refactored for dynamic # of cards.-->
                <div class="wallet-card">card 1</div>
                <div class="wallet-card">card 2</div>
                <div class="wallet-card">card 3</div>
            </div>
            <div class="wallet-create-card-container">
                <h3 class="profile-title">Add New Card</h3>
                <form id="create-card-form">
                    <span class="wallet-field-group">
                        <span>
                            <label for="card-number">Card Number:</label>
                            <input id="card-number" placeholder="xxxx-xxxx-xxxx-xxxx">
                        </span>
                        <span>
                            <label for="card-name">Name on Card:</label>
                            <input id="card-name" placeholder="Name as shown on card">
                        </span>
                    </span>

                    <span class="wallet-field-group">
                        <span>
                            <label for="card-exp">Card Expiration:</label>
                            <input id="card-exp" placeholder="exp date ex: 10/08">
                        </span>

                        <span>
                            <label for="card-cvv">cvv#:</label>
                            <input id="card-cvv" placeholder="3 digit cvv#">
                        </span>
                    </span>
                    <input id="submit" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
</body>

</html>