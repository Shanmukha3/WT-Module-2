<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<!DOCTYPE html>
<html ng-app="stateSearchApp">
<head>
    <title>State Search Engine</title>
</head>
<body>
    <div ng-controller="StateSearchController">
        <h1>State Search Engine</h1>
        <input type="text" ng-model="searchQuery" placeholder="Search for a state..." ng-keyup="performSearch()" />
        <ul>
            <li ng-repeat="state in searchResults">{{ state.name }}</li>
        </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <script>
        var app = angular.module('stateSearchApp', []);

        app.controller('StateSearchController', function($scope) {
            // Sample data for demonstration (list of U.S. states)
            var states = [
                    { name: 'Andhra Pradesh' },
                    { name: 'Arunachal Pradesh' },
                    { name: 'Assam' },
                    { name: 'Bihar' },
                    { name: 'Chhattisgarh' },
                    { name: 'Goa' },
                    { name: 'Gujarat' },
                    { name: 'Haryana' },
                    { name: 'Himachal Pradesh' },
                    { name: 'Jharkhand' },
                    { name: 'Karnataka' },
                    { name: 'Kerala' },
                    { name: 'Madhya Pradesh' },
                    { name: 'Maharashtra' },
                    { name: 'Manipur' },
                    { name: 'Meghalaya' },
                    { name: 'Mizoram' },
                    { name: 'Nagaland' },
                    { name: 'Odisha' },
                    { name: 'Punjab' },
                    { name: 'Rajasthan' },
                    { name: 'Sikkim' },
                    { name: 'Tamil Nadu' },
                    { name: 'Telangana' },
                    { name: 'Tripura' },
                    { name: 'Uttar Pradesh' },
                    { name: 'Uttarakhand' },
                    { name: 'West Bengal' },
                    { name: 'Andaman and Nicobar Islands' },
                    { name: 'Chandigarh' },
                    { name: 'Dadra and Nagar Haveli and Daman and Diu' },
                    { name: 'Lakshadweep' },
                    { name: 'Delhi' },
                    { name: 'Puducherry' },
    ];

            $scope.searchQuery = ''; // Initialize the search query
            $scope.searchResults = [];

            $scope.performSearch = function() {
                // Filter states based on search query
                $scope.searchResults = states.filter(function(state) {
                    return state.name.toLowerCase().includes($scope.searchQuery.toLowerCase());
                });
            };
        });

    </script>
</body>
</html>
