<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
</head>
<body>
    <div id="countdown" style="text-align: right; padding: 10px;"></div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Simulate a successful payment (in a real scenario, you would integrate a payment gateway here)
        $name = $_POST["name"];
        $cardNumber = $_POST["cardNumber"];
        $expiry = $_POST["expiry"];
        $cvv = $_POST["cvv"];
        $amount = $_POST["amount"];

        // Display payment details
        echo "<h1>Payment Successful</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Card Number: **** **** **** " . substr($cardNumber, -4) . "</p>";
        echo "<p>Expiry Date: $expiry</p>";
        echo "<p>CVV: ***</p>";
        echo "<p>Amount: $amount</p>";
    } else {
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber" required><br>

        <label for="expiry">Expiry Date:</label>
        <input type="text" id="expiry" name="expiry" required><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required><br>

        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required><br>

        <button type="submit">Make Payment</button>
    </form>
    
    <script>
        // Countdown timer for 10 seconds
        var countdown = 10;
        var countdownDisplay = document.getElementById('countdown');
        
        function updateCountdown() {
            countdownDisplay.innerText = 'Time remaining: ' + countdown + ' seconds';
            if (countdown > 0) {
                countdown--;
                setTimeout(updateCountdown, 1000); // Update every 1 second
            } else {
                countdownDisplay.innerText = 'Time expired';
                document.forms[0].style.display = "none"; // Hide the form after expiry
            }
        }
        
        // Start the countdown
        updateCountdown();
    </script>
    
    <?php
    }
    ?>
</body>
</html>