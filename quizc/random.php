/* 
            $ques_list = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid'") or die('Error-question-list-98');
            $ques_list_count = mysqli_num_rows($ques_list);

            $question_numbers=range(1,$ques_list_count);
            shuffle($question_numbers);
            //print_r($numbers);

            $ques_no_arr=$question_numbers;

            for ($i = 0; $i < $ques_list_count; $i++) {
                $first = $question_numbers[$i];
                break;
            }
*/