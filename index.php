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
    <title>Kingstudy</title>
    <link rel="stylesheet" href="./Views/FrontEnd/Css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

 <?php
             include './Views/frontend/layout/header.php';
        ?>

        <?php
            // include './Views/frontend/layout/card-wraper.php';
        ?>
        <div id="table" class="table-student">
        </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9b6f37e4bf.js" crossorigin="anonymous"></script>
</body>

</html>
<script>
    // $("header").on("click", "a", function() {
    //     var hrf = $(this).attr("href");
    //     var lin = hrf.substring(1, hrf.length);
    //     $("#table").load(lin);
    // });
</script>
<script>
    $(document).ready(function(){
    $(".load-content").click(function(e){
        e.preventDefault(); // Prevent default behavior of <a> tag

        var file = $(this).data("file"); // Get the data-file attribute value

        // Load the specified file into the div with id 'table'
        $("#table").empty().load(file, function(response, status, xhr) {
            if (status == "error") {
                console.error('Error:', xhr.status, xhr.statusText);
            }
        });
    });
});


</script>


<script>
    
function showMobileSidebar() {
    const mobileSidebar = document.querySelector('.sidebar')
    const mobileScreen = document.querySelector('.screenhide')
    mobileSidebar.style.display = "block";
    mobileScreen.style.display = "block";
}

function hideMobileSidebar() {
    const mobileSidebar = document.querySelector('.sidebar')
    const mobileScreen = document.querySelector('.screenhide')

    mobileSidebar.style.display = "none";
    mobileScreen.style.display = "none";

}
</script>
</html>


