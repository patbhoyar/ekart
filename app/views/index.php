<!DOCTYPE html>
<html>
    <head>
        <title>E-Kart</title>
<?php //echo HTML::style('css/main.css'); ?>
    <body ng-app="ekart">
    
<div id="mainContainer">
    <h1 id="title">E-Kart</h1>
    <hr>
    <div >
        <div ng-view=""></div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
<?php echo HTML::script('js/main.js'); ?>
<?php echo HTML::script('js/customerServices.js'); ?>
</body>
</html>
