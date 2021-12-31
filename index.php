<?php
$score = 0;
$name = 'score';

setcookie($name, $score, time() + (86400 * 30) , "/");
//setcookie('username', $c_uname,  time() + (86400 * 30 * 6) , "/");
// echo $_COOKIE[$name];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL Quizes</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responcive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Link Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        }
        else {
            x.className = "topnav";
        }
    }

    </script>
</head>
<body>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    Nav Bar
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="select-game.php" >Play</a>
        <a href="add-quiz.php">Add Quiz</a>
        <a href="#about">About</a>
        <a href="#developer">Developer</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
    </div>
    
        
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
     Content
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="header">
        <h1 class="title">A/L QUIZ APP</h1>
        <hr class="title-underline">
    </div>


    <div class="main">
        <!-- <div class="btn-div"> -->
            <a href="add-quiz.php"><button class="btn btn-add">Add Quizes</button></a>
        <!-- </div> -->
        <!-- <div class="btn-div"> -->
            <a href="select-game.php"><button class="btn btn-start">Start Game</button></a>
        <!-- </div> -->
    </div>

    <div class="r-img">
        <img src="img/rocket.gif" alt="" class="rocket-img">
    </div>




<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Java Part
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <script src="script.js"></script>
        
</body>
</html>