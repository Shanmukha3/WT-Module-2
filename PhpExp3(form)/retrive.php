<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$servername = "localhost";
                $username = "root";
                $password = "root";
//               mysqli_query($conn,"Create database php1");
                $database='php1';
                $conn1 = mysqli_connect($servername, $username, $password,$database);
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $output=mysqli_query($conn1, "SELECT * FROM form WHERE user='$user' AND password='$pass'");
                if (mysqli_num_rows($output) > 0) {
                    echo("login sucessfully");
                }
                else
                    echo("wrong information so login failed");
            mysqli_close($conn1);


