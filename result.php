<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>

<head>
	<meta charset=UTF-8" />
	
	<title>Quiz | Shonen Market</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<?php include('include/header.php'); ?>

	<div id="page-wrap">

		<h1>Quiz | Shonen Market</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
	
	</div>
    <?php include('include/footer.php'); ?>
</body>

</html>