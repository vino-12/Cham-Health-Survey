<?php




// get value from input field 

		$q10 = $_SESSION['question-10'];
		$val10 = $q10['answer'];
		echo $val10;
		
		//$_SESSION["answer-1"];
		//print_r($answer1);

	

// Question-4.php need to calculate one value 'answer' out of multiple checkboxes name='answer1'/'answer2'... 

    $q4 = $_SESSION['question-4'];
    $val = $q4['name'];
    $pattern = "/answer[1-11]/";
    echo preg_match_all($pattern, $val);



?>