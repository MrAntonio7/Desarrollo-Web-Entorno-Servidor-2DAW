<?php

$rand = rand(1,100);
if (isset($_POST["guess"])) {

    $userGuess = $_POST["guess"];

    if($userGuess > 100 || $userGuess < 0){
        echo "Please guess a number between 1 and 100";
    }

    elseif($userGuess > $rand){
        echo "too high";
    }

    elseif($userGuess < $rand){
        echo "too low";
    }

    else{
        echo "correct";
        }
}


?>

<form action="" method="POST">
Guess a number between 1 and 100 <input type="number" name="guess" />
<button name="test" > Enter
</button>
</form>