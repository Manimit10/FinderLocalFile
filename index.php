<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/css/ol.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/build/ol.js"></script>
    <link href="style.css"  rel= "stylesheet" type="text/css">
    <title>Template</title>
</head>
<body>
<header style="background-image:linear-gradient(to right, white, #3657e9, white)">
    <div class="container-fluid ">
        <div class="row">        
            <div class="col-md-3  d-none d-md-block ">
                <img class = "img" src="Logos/logo1.png" alt="Logo" >
            </div>
            <div  class="col-md-6 ">
                <h1>Search All the countries</h1>
            </div>
            <div class="col-md-3  d-none d-md-block ">
                <img class = "img" src="Logos/logo2.png" alt="Logo" >
            </div>
        </div>     
    </div>
</header>


<?php
require_once "controllers/controller.php";
require_once "models/model.php";  

$mv = new controller();
$mv -> templateShow();

?>

<footer style="background-image:linear-gradient(to right, #3657e9, white, #3657e9)">
    <div class="container-fluid ">
        <div class="row">        
            <div class="col-md-3 offset-md-2 col-sm-3 offset-sm-2 col-6">
                <img class = "img" src="logos/images.jpg">
            </div>
            <div class="col-md-3 offset-md-2 col-sm-3 offset-sm-2 col-6">
               <img class = "img" src="logos/download.jpg">
            </div>
        </div>     
    </div>
<script type="text/javascript" src="script.js"></script>
</footer>
    
</body>
</html>