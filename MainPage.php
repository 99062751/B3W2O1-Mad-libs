<?php 
    include "ControlePage.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B3W2O1 - Mad libs</title>
    <link rel="stylesheet" href="Forms.css">
</head>
<body>
<h1 id="title">Mad Libs</h1>
    <div class="CenterDiv">

        <div class="links_style">
            <ul>
                <li><a href="MainPage.php?page=paniek">Er heerst paniek..</a></li>
                <li><a href="MainPage.php?page=onkunde">Onkunde</a></li>
            </ul>
        </div>
        <?php 
       
            if($_GET['page'] == "onkunde"){
                if(empty($error) && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
                    include "ResultPageOnkunde.php";
                } else{
                    include "FormOnkunde.php";
                }                
            } else{
                if(empty($error) && $_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST["submit"])){
                    include "ResultPagePaniek.php";
                } else{
                    include "FormPaniek.php";
                }  
            }
        ?> 
    
    <footer>Deze website is gemaakt door: Sumant Jakhari  ©2021</footer>
    </div>

</body>
</html>    
