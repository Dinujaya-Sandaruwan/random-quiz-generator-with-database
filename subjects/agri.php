
<!-- <?php
    $value = $_COOKIE[$name];
?> -->

<?php 
    include '../acc/dbcon.php'; 

    // $point = 0;
    // $point = $point + 50;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL Quizes</title>
    <!-- <link rel="stylesheet" href="script.css"> -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/responcive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Link Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
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


        // AJAX Script
// ------------------------------------------------------------------------------------------------

        $(document).ready(function() {
            var quiz_count = 1;
            $("#next_btn").click(function(){
                quiz_count = quiz_count + 2
                $("#replase-quiz").load("../acc/subject-data/agri-data.php", {
                    commet_new_count: quiz_count
                });
            });
        });

        points = 0;

        console.log(points);

        function remove_btn(){
            var none_btn01 = document.getElementById("incorrect01");
            var none_btn02 = document.getElementById("incorrect02");
            var none_btn03 = document.getElementById("incorrect03");
            var none_btn04 = document.getElementById("incorrect04");
            var correct_btn = document.getElementById("correct");
            if (none_btn01 !== null) {none_btn01.style.display = "none"};
            if (none_btn02 !== null) {none_btn02.style.display = "none"};
            if (none_btn03 !== null) {none_btn03.style.display = "none"};
            if (none_btn04 !== null) {none_btn04.style.display = "none"};
            correct_btn.style.display = "none"

            var next_btn = document.getElementById("next_btn");
            next_btn.style.display = "none";

            points = points + 50;
            // return points 

            // const points = points + point_count;
            // console.log(points)
            var points_text = document.getElementById("score");
            points_text.innerHTML = "Points " + points;

        }


// ------------------------------------------------------------------------------------------------
        // window.onload = function (){
        //     // var score = "<?=$value?>";
        //     var score = 0
        //     document.getElementById("score").innerHTML = score;
        // }
        // function next_fun(){
        //     var score = score + 100;
        // }
        
        // var score_text = document.getElementById('score-text');
        // score_text.innerHTML = "score";
        // document.getElementById("score").innerHTML = "yourTextHere";


        // $correct_4 = "onclick=incorrect_btn04() id='incorrect04'";
        function correct_btn(){
            var correct_btn = document.getElementById("correct");
            correct_btn.className = "correct-btn";
            // incorrect_btn01.disabled = true;
            // incorrect_btn02.disabled = true;
            // incorrect_btn03.disabled = true;
            var none_btn01 = document.getElementById("incorrect01");
            var none_btn02 = document.getElementById("incorrect02");
            var none_btn03 = document.getElementById("incorrect03");
            var none_btn04 = document.getElementById("incorrect04");
            var correct_btn = document.getElementById("correct");
            if (none_btn01 !== null) {none_btn01.disabled = true};
            if (none_btn02 !== null) {none_btn02.disabled = true};
            if (none_btn03 !== null) {none_btn03.disabled = true};
            if (none_btn04 !== null) {none_btn04.disabled = true};
            
            var next_btn = document.getElementById("next_btn");
            next_btn.style.display = "inline";
            // if (retry_btn.style.display !== "none"){retry_btn.style.display = "none"};
     
        }

        // function incorrect_btn(){
        //     // let correct_btn = document.getElementById("correct").disabled = true;
        //     let incorrect_btn01 = document.getElementById("incorrect01");
        //     let incorrect_btn02 = document.getElementById("incorrect02");
        //     let incorrect_btn03 = document.getElementById("incorrect03");
        //     incorrect_btn.className = "incorrect-btn";
        //     let retry_btn = document.getElementById("retry_btn")
        //     retry_btn.style.display = "inline"
        //     next_btn.style.display = "none"
        
        
        //     // var quiz_content = document.getElementById("quiz-content")
        //     // var points = document.getElementById("score-text")
        //     // quiz_content.style.display = "none"
        //     // points.style.display = "none"
        
        //     // var over_content = document.getElementById("over-content")
        //     // over_content.style.display = "flex"
        //     // // points.style.display = "flex"
        
        // }

        // if(retry_btn.id == "retry_btn"){
        //     console.log("saman");
        // }
        // else{
        //     console.log("not saman");
        // }

        function retry_btn(){
            var all_quiz_content = document.getElementById("all");
            var old_points = document.getElementById("score_text");
            var over_content = document.getElementById("over-content");
            all_quiz_content.style.display = "none";
            old_points.style.display = "none";   
            over_content.style.display = "flex";     
            
            var point_num = document.getElementById("point-num")
            point_num.innerHTML = points    
        }

        
        function incorrect_btn01(){
            var correct_btn = document.getElementById("correct");
            var incorrect_btn01 = document.getElementById("incorrect01");
            incorrect_btn01.className = "incorrect-btn";
            correct_btn.className = "correct-btn";
            correct_btn.disabled = true;

            var incorrect_btn02 = document.getElementById("incorrect02");
            var incorrect_btn03 = document.getElementById("incorrect03");
            var incorrect_btn04 = document.getElementById("incorrect04");
            if (incorrect_btn02 !== null) {incorrect_btn02.disabled = true;}
            if (incorrect_btn03 !== null) {incorrect_btn03.disabled = true;}
            if (incorrect_btn04 !== null) {incorrect_btn04.disabled = true;}    
            
            let retry_btn = document.getElementById("retry_btn")
            retry_btn.style.display = "inline"
            next_btn.style.display = "none"
        }
        function incorrect_btn02(){
            var correct_btn = document.getElementById("correct");
            var incorrect_btn02 = document.getElementById("incorrect02");
            incorrect_btn02.className = "incorrect-btn";
            correct_btn.className = "correct-btn";
            correct_btn.disabled = true;

            var incorrect_btn01 = document.getElementById("incorrect01");
            var incorrect_btn03 = document.getElementById("incorrect03");
            var incorrect_btn04 = document.getElementById("incorrect04");
            if (incorrect_btn01 !== null) {incorrect_btn01.disabled = true;}
            if (incorrect_btn03 !== null) {incorrect_btn03.disabled = true;}
            if (incorrect_btn04 !== null) {incorrect_btn04.disabled = true;}

            let retry_btn = document.getElementById("retry_btn")
            retry_btn.style.display = "inline"
            next_btn.style.display = "none"
        }
        function incorrect_btn03(){
            var correct_btn = document.getElementById("correct");
            var incorrect_btn03 = document.getElementById("incorrect03");
            incorrect_btn03.className = "incorrect-btn";
            correct_btn.className = "correct-btn";
            correct_btn.disabled = true;

            var incorrect_btn01 = document.getElementById("incorrect01");
            var incorrect_btn02 = document.getElementById("incorrect02");
            var incorrect_btn04 = document.getElementById("incorrect04");
            if (incorrect_btn01 !== null) {incorrect_btn01.disabled = true;}
            if (incorrect_btn02 !== null) {incorrect_btn02.disabled = true;}
            if (incorrect_btn04 !== null) {incorrect_btn04.disabled = true;}

            let retry_btn = document.getElementById("retry_btn")
            retry_btn.style.display = "inline"
            next_btn.style.display = "none"
        }        
        function incorrect_btn04(){
            var correct_btn = document.getElementById("correct");
            var incorrect_btn04 = document.getElementById("incorrect04");
            incorrect_btn04.className = "incorrect-btn";
            correct_btn.className = "correct-btn";
            correct_btn.disabled = true;

            var incorrect_btn01 = document.getElementById("incorrect01");
            var incorrect_btn02 = document.getElementById("incorrect02");
            var incorrect_btn03 = document.getElementById("incorrect03");
            if (incorrect_btn01 !== null) {incorrect_btn01.disabled = true;}
            if (incorrect_btn02 !== null) {incorrect_btn02.disabled = true;}
            if (incorrect_btn03 !== null) {incorrect_btn03.disabled = true;}

            let retry_btn = document.getElementById("retry_btn")
            retry_btn.style.display = "inline"
            next_btn.style.display = "none"
        }

        </script>


</head>
<body>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    Nav Bar
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <div class="topnav" id="myTopnav">
        <a href="../index.php">Home</a>
        <a href="../select-game.php">Play</a>
        <a href="../add.php">Add Quiz</a>
        <a href="#about">About</a>
        <a href="#developer">Developer</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
    </div>

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    Content
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

<div class="score" id="score_text">
        <h1 class="score-text" id="score">Points 0</h1>
        </div>

<div id="all">
<?php
// while($row = $result->fetch_assoc()){

echo' <div class="quiz-content" id="quiz-content">';
echo'<div class="main-quiz">';
echo' <div id="replase-quiz">';
$sql = "SELECT * FROM agri_quiz order by rand() LIMIT 1";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0){
while($row = mysqli_fetch_assoc($result)){
    echo'     <div class="quiz-p">';
    echo'         <p class="quiz-text">';
    echo'             <!-- some quiz -->';
    $quiz = $row["quiz"];
    echo $quiz;
    echo'         </p><ol class="quiz-ans-txt">';
    echo'             <li>';
    echo'                 <!-- some text -->';
    $f_ans = $row["f_ans"];
    echo $f_ans;
    echo'             </li>';
    echo'             <li>';
    echo'                 <!-- some text -->';
    $s_ans = $row["s_ans"];
    echo $s_ans;
    echo'             </li>';
    echo'             <li>';
    echo'                 <!-- some text -->';
    $t_ans = $row["t_ans"];
    echo $t_ans;
    echo'             </li>';
    echo'             <li>';
    echo'                 <!-- some text -->';
    $fo_ans = $row["fo_ans"];
    echo $fo_ans;
    echo'             </li>';
    echo'         </ol>';
    echo'     </div>';
    echo'<div>';
    $name = $row["u_name"];
    echo '<p class="user_name">';
    echo 'By ' . $name;
    echo'</p>';
    echo'</div>';
    echo '</div/>';



    if ($row["correct_ans"] == 1) {
        // echo"correct anser is 01";
        $correct_1 = "onclick=correct_btn() id='correct'";

        $correct_2 = "onclick=incorrect_btn02() id='incorrect02'";
        $correct_3 = "onclick=incorrect_btn03() id='incorrect03'";
        $correct_4 = "onclick=incorrect_btn04() id='incorrect04'";

    } elseif ($row["correct_ans"] ==2) {
        // echo"correct anser is 02";
        $correct_2 = "onclick=correct_btn() id='correct'";

        $correct_1 = "onclick=incorrect_btn01() id='incorrect01'";
        $correct_3 = "onclick=incorrect_btn03() id='incorrect03'";
        $correct_4 = "onclick=incorrect_btn04() id='incorrect04'";

    } elseif ($row["correct_ans"] == 3) {
        // echo"correct anser is 03";
        $correct_3 = "onclick=correct_btn() id='correct'";

        $correct_1 = "onclick=incorrect_btn01() id='incorrect01'";
        $correct_2 = "onclick=incorrect_btn02() id='incorrect02'";
        $correct_4 = "onclick=incorrect_btn04() id='incorrect04'";

    } elseif ($row["correct_ans"] == 4) {
        // echo"correct anser is 04";
        $correct_4 = "onclick=correct_btn() id='correct'";

        $correct_1 = "onclick=incorrect_btn01() id='incorrect01'";
        $correct_2 = "onclick=incorrect_btn02() id='incorrect02'";
        $correct_3 = "onclick=incorrect_btn03() id='incorrect03'";
        
    }



    // echo $correct ;

    // echo' <div class="quiz-ans">';
    // echo' <button class="quiz-ans-btn "' . $correct . 'id="correct">Answer 01</button>';
    // echo' <button class="quiz-ans-btn " onclick=incorrect_btn() id="incorrect">Answer 02</button>';
    // echo' <button class="quiz-ans-btn " >Answer 03</button>';
    // echo' <button class="quiz-ans-btn " >Answer 04</button>';
    // echo' </div> ';

    // echo $row["correct_ans"];



    
}}
else{
    echo'     <div class="quiz-p">';
    echo'         <p class="quiz-text">';
    echo'             <!-- some quiz -->';
    // $quiz = $row["quiz"];
    echo 'මේ මොහොතේදී මෙහි කිසිඳු ප්‍රශ්නයක් නොමැත. ඔබට මෙම විශය සම්බන්ද දැනුමක් ඇත්නම්, ඒ සඳහා ඔබට කල හැක්කේ කුමක්ද ?';
    echo'         </p><ol class="quiz-ans-txt">';
    echo'             <li>';
    echo'                 <!-- some text -->';
    // $f_ans = $row["f_ans"];
    echo 'අදාල පුද්ගලයින් දැනුවත් කිරීම';
    echo'             </li>';
    echo'             <li>';
    echo'                 <!-- some text -->';
    // $s_ans = $row["s_ans"];
    echo 'ප්‍රශ්න සාදා පද්ධතියට ඇතුලත් කිරීම';
    echo'             </li>';
    echo'             <li>';
    echo'                 <!-- some text -->';
    // $t_ans = $row["t_ans"];
    echo 'දැක්කෙ නෑ වගේ සිටීම';
    echo'             </li>';
    echo'             <li>';
    echo'                 <!-- some text -->';
    // $fo_ans = $row["fo_ans"];
    echo 'කවුරුන් හෝ ප්‍රශ්න ඇතුලත් කරන තුරු බලා සිටීම';
    echo'             </li>';
    echo'         </ol>';
    echo'     </div>';
    echo'<div>';
    // $name = $row["u_name"];
    echo '<p class="user_name">';
    echo 'By Dinujaya Sandaruwan';
    echo'</p>';
    echo'</div>';
    echo '</div/>';

    $correct_2 = "onclick=correct_btn() id='correct'";

    $correct_1 = "onclick=incorrect_btn01() id='incorrect01'";
    $correct_3 = "onclick=incorrect_btn03() id='incorrect03'";
    $correct_4 = "onclick=incorrect_btn04() id='incorrect04'";
}
?>


  <div class="quiz-ans">
      <button class="quiz-ans-btn " <?php echo $correct_1 ?>>Answer 01</button>
      <button class="quiz-ans-btn " <?php echo $correct_2 ?>>Answer 02</button>
      <button class="quiz-ans-btn " <?php echo $correct_3 ?>>Answer 03</button>
      <button class="quiz-ans-btn " <?php echo $correct_4 ?>>Answer 04</button>
  </div> 
</div>
    <div class="all-quiz">
          <!-- <a href="over.php"> -->
        <div class="next-quiz">
            <button class="none-retry-btn" id="retry_btn" onclick=retry_btn()>Retry</button>
        </div>
        <!-- </a> -->
        <!-- <a href="subject-temp.php"> -->
        <div class="next-quiz">
            <!-- <button class="none-next-quiz-btn" id="next_btn" onclick=next_fun() >Next</button> -->
            <button class="none-next-quiz-btn" id="next_btn" onclick=remove_btn() >Next</button>
        </div>
    </div>
  <!-- </a> -->
  <!-- <div class="report-quiz">
      <form class="report-form" action="report.php">
        <?php $quiz_id = $row["quiz"];
        echo'<input type="hidden" name="report" value =' . $quiz_id . '>'; ?>
        <button class="report-btn" type="submit">Report</button>
      </form>
      
  </div> -->
 </div>

    </div>
</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Over
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <a href="../select-game.php">
        <div class="over-content" id="over-content">
            <div class="end-point">
                <h1 class="y-points">Final Points</h1>
                <h1 class="point-num" id="point-num">400</h1>
            </div>

            <img src="../img/icons/crown.svg" alt="" class="crown-img">


                <button class="play-again">Retry</button> 
        </div>     
    </a>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
            Java Part
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<!-- <script language="JavaScript" src="script.js"></script> -->



</body>
</html>
