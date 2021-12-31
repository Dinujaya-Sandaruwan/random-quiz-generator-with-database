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

    <!-- <style>
        @media screen and (max-width : 1132px) {
            div.footer{
                display: none;
            }    
        }
    </style> -->
</head>
<body>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    Nav Bar
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="topnav" id="myTopnav">
        <a href="index.php">Home</a>
        <a href="select-game.php">Play</a>
        <a href="add-quiz.php" class="active">Add Quiz</a>
        <a href="#about">About</a>
        <a href="#developer">Developer</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
    </div>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    Content
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div class="select-title-div">
        <h1 class="select-title">Select Your Subject</h1>
    </div>

    <div class="select-subjests-div">
        <a href="add-quiz-form/et-form.php">
        <div class="select-one-subject">
            <img src="img/icons/et.png" alt="" class="select-subject-icon">
          <button class="subject-btn">Engineering Technology</button>
        </div></a>
        <a href="add-quiz-form/sft-form.php">
        <div class="select-one-subject">
            <img src="img/icons/sft.png" alt="" class="select-subject-icon">
            <button class="subject-btn">Science for Technology </button>
        </div> </a>
        <a href="add-quiz-form/it-form.php">
        <div class="select-one-subject">
            <img src="img/icons/it.png" alt="" class="select-subject-icon">
            <button class="subject-btn">Information Technology</button>
        </div> </a>
        <a href="add-quiz-form/media-form.php">
        <div class="select-one-subject">
            <img src="img/icons/media.png" alt="" class="select-subject-icon">
            <button class="subject-btn">Media Studies</button>
        </div> </a>
        <a href="add-quiz-form/agri-form.php">
        <div class="select-one-subject">
            <img src="img/icons/agri.png" alt="" class="select-subject-icon">
            <button class="subject-btn">Agri Science</button>
        </div> </a>
        <a href="add-quiz-form/bst-form.php">
        <div class="select-one-subject">
            <img src="img/icons/bst.png" alt="" class="select-subject-icon">
            <button class="subject-btn">Bio Technology</button>
        </div> </a>
    </div>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Java Part
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<script src="script.js"></script>
        
</body>
</html>