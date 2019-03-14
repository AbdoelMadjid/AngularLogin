<!doctype html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Systems </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
    <link href="css/toaster.css" rel="stylesheet">
    <style>
        body {
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div data-ng-view="" id="ng-view" class="slide-animation"></div>
    </div>
    <toaster-container toaster-options="{'time-out': 4000}"></toaster-container>
    <!-- JavaScripts -->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/toaster.js"></script>
    <script src="files/angularjs/myapp.js"></script>
    <script src="files/angularjs/input.js"></script>
    <script src="files/angularjs/mydirectives.js"></script>
    <script src="files/angularjs/controls.js"></script>
</body>
</html>