<?php
    require './Core/Database.php';
    require './Models/BaseModel.php';
    require './Controllers/BaseController.php';
    $controllerName = ucfirst(strtolower(($_REQUEST['controller'] ?? 'Dashboard').'Controller'));
    $actionName = $_REQUEST['action'] ?? 'index';
    require "./Controllers/{$controllerName}.php";
    $controllerObject = new $controllerName;
    $controllerObject->$actionName();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Views/FrontEnd/Css/style.css">
</head>
<body>
    <div class="row container" id="main">
        <?php
            include './Views/frontend/layout/header.php';
        ?>
        <div  id="content">
        </div>
        
    </div>
</body>
<script>
    $("header").on("click", "a", function() {
        var hrf = $(this).attr("href");
        var lin = hrf.substring(1, hrf.length);
        $("#content").load(lin);
    });
</script>
</html>


