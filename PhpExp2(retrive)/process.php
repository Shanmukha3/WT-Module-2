<!DOCTYPE html>
<html>
<head>
    <title>Form Data Processing</title>
</head>
<body>
    <h1>Form Data Processing</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Using $_POST to retrieve form data
        $first_name = $_POST["first_name"];
        $gender = $_POST["gender"];
        $birthdate = $_POST["birthdate"];
        
        // Displaying the submitted data
        echo "<h2>Using \$_POST:</h2>";
        echo "First Name: $first_name <br>";
        echo "Gender: $gender <br>";
        echo "Date of Birth: $birthdate <br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Using $_GET to retrieve form data
        $first_name = $_GET["first_name"];
        $gender = $_GET["gender"];
        $birthdate = $_GET["birthdate"];

        // Displaying the submitted data
        echo "<h2>Using \$_GET:</h2>";
        echo "First Name: $first_name <br>";
        echo "Gender: $gender <br>";
        echo "Date of Birth: $birthdate <br>";
    }
    

    ?>
</body>
</html>
