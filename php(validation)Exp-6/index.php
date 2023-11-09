<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="navigation.css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
    <title>Sign Up and Sign In</title>
</head>
<body>
    <div class="container" ng-app="myApp" ng-controller="UserController">
        <div class="form-container">
            <h1>Sign Up</h1>
            <form ng-submit="submitForm()" id="myForm" action="signupDB.php" method="post">
                <input type="text" name="username" placeholder="Username" ng-model="name" ng-model-options="{ updateOn: 'default blur', debounce: { default: 300, blur: 0 } }" ng-change="validateName()" required><br>
                <span style="color: red;" ng-show="error1">{{error1}}</span><br>
                <input type="password" name="password" placeholder="Password" ng-model="password" ng-model-options="{ updateOn: 'default blur', debounce: { default: 300, blur: 0 } }" ng-change="validatePassword()" required><br>
                <span style="color: red;" ng-show="error2">{{error2}}</span><br>
                <input type="email" name="email" placeholder="Email" ng-model="email" ng-model-options="{ updateOn: 'default blur', debounce: { default: 300, blur: 0 } }" ng-change="validateEmail()" required><br>
                <span style="color: red;" ng-show="error3">{{error3}}</span><br>
                <button type="submit" id="sub">Sign Up</button><br>
                already have an account? <a href="signin.html">Login</a>
            </form>
        </div>
    </div>
    <script src="signup.js"></script>
</body>
</html>

