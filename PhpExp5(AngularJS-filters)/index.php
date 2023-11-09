<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
</script>
<body ng-app="myApp">
    <div ng-controller="personCtrl1">
        <p>The name is {{ lastName | uppercase }}</p>
    </div>
    <div ng-controller="personCtrl1">
        <p>First name is{{firstName| lowercase}}</p>
    </div>
    <div ng-controller="personCtrl2">
        <p>Looping with objects:</p>
        <ul>
          <li ng-repeat="x in names | orderBy:'Regno'">
            {{ x.name + ', ' + x.Regno }}
          </li>
        </ul>
    </div>
    <div ng-controller="personCtrl3">
        <h1>Price: {{ price | currency }}</h1>
    </div>

<script>
 var app1= angular.module('myApp', []);
 app1.controller('personCtrl1', function($scope) {
    $scope.firstName = " Thotakura",
    $scope.lastName = "Shanmukha Sudha Kiran";
});

app1.controller('personCtrl2', function($scope) {
    $scope.names = [
        {name:'Yaswanth',Regno:'211FA04001'},
        {name:'Shanmukha',Regno:'211FA04003'},
        {name:'Ajay Bhaskar',Regno:'211FA04010'},
        {name:'Charan',Regno:'211FA04014'},
        {name:'Sriram',Regno:'211FA04016'},
        {name:'pavan',Regno:'211FA04017'},
        {name:'Krishna',Regno:'211FA04021'},
        {name:'prasanth',Regno:'211FA04025'},
        {name:'Manikanta',Regno:'211FA04027'}
        ];
});

app1.controller('personCtrl3', function($scope) {
    $scope.price = 58;
});
</script>

</body>
</html>
