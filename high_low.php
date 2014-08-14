<?php

$answer = mt_rand(1,100);

$number_of_guesses = 0;

fwrite (STDOUT, "Welcome to the HIGHER OR LOWER game.\n");

do{
	fwrite (STDOUT, "Guess a number.  ");

	$guess = trim(fgets(STDIN));

	$number_of_guesses++;

	if($guess== $answer){
	fwrite (STDOUT, "GOOD GUESS! HIP HIP HOORAY!!!! Rock on.\n");
	}
	
	elseif ($guess > $answer){
	fwrite(STDOUT, "$guess is too HIGH. guess again.  \n");
	}

	else{
	fwrite (STDOUT, "$guess is too LOW. guess again  \n");
	}
}

while ($guess != $answer);

	if($guess > 1){
	fwrite(STDOUT, "It took you $number_of_guesses guesses to figure it out.  \n");
	}

	else (fwrite(STDOUT, "It took you $number_of_guesses guess to figure it out.  \n"));
	

	?>