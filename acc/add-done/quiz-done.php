<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/responcive.css">
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

    <style>
        div.over-content{
            display: flex;
        }
    </style>


</head>
<body>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    Nav Bar
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="topnav" id="myTopnav">
        <a href="../../index.php">Home</a>
        <a href="../../select-game.php">Play</a>
        <a href="../../add-quiz.php">Add Quiz</a>
        <a href="#about">About</a>
        <a href="#developer">Developer</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
    </div>

    <!-- <?php include 'nav.php'; ?> -->

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    Content
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<a href="../../add-quiz-form/add.php">
    <div class="over-content">
        <h1 class="quiz-done-title">Your Quiz has been added sucessfully</h1>


            <button class="play-again">ADD MORE</button> 
    </div>

</a>
</body>
</html>