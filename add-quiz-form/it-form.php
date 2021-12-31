<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL Quizes</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/responcive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Link Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <style>
        div.footer{
            display: none;
        }
    </style> -->
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
    <a href="../index.php">Home</a>
    <a href="../select-game.php" >Play</a>
    <a href="../add-quiz.php" class="active">Add Quiz</a>
    <a href="#about">About Us</a>
    <a href="#developer">Developer</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
</div>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 Content
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="add-main">
        <h1 class="add-title">Add Your Quiz</h1>
        <div class="add-quiz-form">

            <form class="quiz-form" action="../acc/add-data/it-add-data.php" >

                <div class="form-content">
                    <!-- Name -->
                    <label for="" class="add-inp-label">Enter Your Name</label>
                    <input type="text" class="add-input" name="name">
  

                <!-- Subject -->
                <!-- <label for="" class="add-inp-label">What is the Subject</label>
                <select class="add-input" name="subject">
                    <option value="1" >Engineering Technology</option>
                    <option value="2" >Science For Technology</option>
                    <option value="3" >Agri Science</option>
                    <option value="4" >Information and Communication Technology</option>
                    <option value="5" >Other Subjects</option>
                  </select> -->
                
                <!-- Quiz -->
                <label for="" class="add-inp-label">Enter Your Quiz</label>
                <textarea class="add-input" name="quiz"> </textarea>

                <!-- answers -->
                <label for="" class="add-inp-label">First answer</label>
                <input type="text" class="add-input" name="f_ans">
                <label for="" class="add-inp-label">Second answer</label>
                <input type="text" class="add-input" name="s_ans">
                <label for="" class="add-inp-label">Third answer</label>
                <input type="text" class="add-input" name="t_ans">
                <label for="" class="add-inp-label">Fouth answer</label>
                <input type="text" class="add-input" name="fo_ans">

                <!-- Correct Answer -->
                <label for="" class="add-inp-label">What is the Correct Answer</label>
                <select class="add-input" name="correct_ans">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>

                  </select>

                <!-- Special Note -->
                <label for="" class="add-inp-label">Did the quiz you entered earlier went wrong?</label>
                <textarea class="add-special" name="s_note"> </textarea>

                <!-- <input type="submit"> -->

                <button type="submit" class="add-quiz-submit">Submit Your Quiz</button>
                </div>

        </form>
        </div>
    </div>



<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Java Part
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<script src="script.js"></script>
        
</body>
</html>