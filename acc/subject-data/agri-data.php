<?php
// include "dbcon.php";
    
//     // $select = "select" ;
//     $table = "quiz_tbl" ;
    
//     $sql = "SELECT * FROM quiz_tbl order by rand() LIMIT 1";
//     // echo $sql;
    
//     $result = $conn->query($sql);
    
    
//     if ($result->num_rows > 0) {
    
//     while($row = $result->fetch_assoc()) {
    
//     // echo " Quiz is : " . $row["quiz"];
//     // $name = $row["u_name"];
//     // $subject = $row["q_subject"];
//     // $quiz = $row["quiz"];
//     // $f_ans = $row["f_ans"];
//     // $s_ans = $row["s_ans"];
//     // $t_ans = $row["t_ans"];
//     // $fo_ans = $row["fo_ans"];
//     // $correct_ans = $row["correct_ans"];
//     // $s_note = $row["s_notes"];
//     // // echo"$quiz";
//     // // echo"<br>";
//     // // echo"<br>";
    
//     // }

//     // while($row = $result->fetch_assoc()){ 
//     //     $f_ans = $row["f_ans"];
//     //     echo"$f_ans";
//     //     echo"<br>";
//     }


// }



// AJAX

    include '../dbcon.php';
    $quiz_count = $_POST['commet_new_count'];


    $sql = "SELECT * FROM agri_quiz order by rand() LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){

            // echo '<body>';

            // echo '<div class="topnav" id="myTopnav">';
            // echo '<a href="index.php">Home</a>';
            // echo '<a href="select-game.php">Play</a>';
            // echo '<a href="add.php">Add Quiz</a>';
            // echo '<a href="#about">About</a>';
            // echo '<a href="#developer">Developer</a>';
            // echo '<a href="javascript:void(0);" class="icon" onclick="myFunction()">';
            // echo '<i class="fa fa-bars"></i>';
            // echo '</a>';
            // echo '</div>';

            // echo '<div class="score">';
            // echo '<h1 class="score-text" id="score">400 Points</h1>';
            // echo '</div>';
            // echo '<div id="all">';
            // echo' <div class="quiz-content" id="quiz-content">';
            echo' <div id="replase-quiz">';
            $sql = "SELECT * FROM agri_quiz order by rand() LIMIT 1";
            $result = mysqli_query($conn, $sql);
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
                $name = $row["u_name"];
                echo '<p class="user_name">';
                echo 'By ' . $name;
                echo'</p>';
                echo'</div>'; 
                echo'     </div>';
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
            }

            echo '<div class="quiz-ans">';
            echo '<button class="quiz-ans-btn up-btn" ' . $correct_1 . '>Answer 01</button>';
            echo '<button class="quiz-ans-btn up-btn" ' . $correct_2 . '>Answer 02</button>';
            echo '<button class="quiz-ans-btn up-btn" ' . $correct_3 . '>Answer 03</button>';
            echo '<button class="quiz-ans-btn up-btn" ' . $correct_4 . '>Answer 04</button>';
            echo '</div>'; 
            echo '</div>';
            echo'<div>';
            echo'<div>';

            // echo '<a href="over.php">';
            // echo '<div class="next-quiz">';
            // echo '    <button class="none-retry-btn" id="retry_btn">Retry</button>';
            // echo '</div>';
            // echo '</a>';
            // echo '<div class="next-quiz">';
            // echo '    <button class="none-next-quiz-btn" id="next_btn" >Next</button>';
            // echo '</div>';
            // echo '<div class="report-quiz">';
            // echo '    <button class="report-btn">Report</button>';
            // echo '</div>';
            // echo '</div>';  
            // echo '  </div>';

            // echo'</body>';
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        }
    } else{
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

        echo '<div class="quiz-ans">';
        echo '<button class="quiz-ans-btn up-btn" ' . $correct_1 . '>Answer 01</button>';
        echo '<button class="quiz-ans-btn up-btn" ' . $correct_2 . '>Answer 02</button>';
        echo '<button class="quiz-ans-btn up-btn" ' . $correct_3 . '>Answer 03</button>';
        echo '<button class="quiz-ans-btn up-btn" ' . $correct_4 . '>Answer 04</button>';
        echo '</div>'; 
        echo '</div>';
        echo'<div>';
        echo'<div>';
    }
    
    


?>

