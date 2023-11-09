<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Personal Information Form</h1>
    <form action="process.php" method="get">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="male" value="Male"> <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="Female"> <label for="female">Female</label><br><br>

        <label for="birthdate">Date of Birth:</label>
        <input type="date" name="birthdate" id="birthdate" required><br><br>

        <input type="submit" value="Submit">
    </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
