<?php
// Run with php rps.php and follow the instructions.
$choices = array('rock', 'paper', 'scissors');
$userchoice = strtolower(readline("Choose rock, paper, or scissors: "));
if (!in_array($userchoice, $choices))
{
    echo "Please choose either rock, paper, or scissors.\n";
    exit();
}

// Generates a random choice for the computer from the pool of three.
$computerchoice = $choices[rand(0, 2)];

if ($userchoice == $computerchoice)
    echo "It's a tie!\n";
else if (($userchoice == 'rock' && $computerchoice == 'scissors')
		|| ($userchoice == 'paper' && $computerchoice == 'rock')
		|| ($userchoice == 'scissors' && $computerchoice == 'paper'))
    echo "Congratulations! You won! The computer chose $computerchoice.\n";
else
    echo "Sorry, you lost. The computer chose $computerchoice.\n";

/*
$choices = array('rock', 'paper', 'scissors', 'lizard', 'spock');
$userchoice = strtolower(readline("Choose rock, paper, scissors, lizard, or spock: "));
if (!in_array($userchoice, $choices))
{
	echo "Please choose either rock, paper, scissors, lizard, or spock.\n";
	exit();
}

$computerchoice = $choices[rand(0, 4)];

if ($userchoice == $computerchoice)
	echo "It's a tie!\n";
else if (($userchoice == 'rock' && $computerchoice == 'scissors')
		|| ($userchoice == 'rock' && $computerchoice == 'lizard')
		|| ($userchoice == 'paper' && $computerchoice == 'rock')
		|| ($userchoice == 'paper' && $computerchoice == 'spock')
		|| ($userchoice == 'scissors' && $computerchoice == 'paper')
		|| ($userchoice == 'scissors' && $computerchoice == 'lizard')
		|| ($userchoice == 'lizard' && $computerchoice == 'paper')
		|| ($userchoice == 'lizard' && $computerchoice == 'spock')
		|| ($userchoice == 'spock' && $computerchoice == 'rock')
		|| ($userchoice == 'spock' && $computerchoice == 'scissors'))
	echo "Congratulations! You won! The computer chose $computerchoice.\n";
else
	echo "Sorry, you lost. The computer chose $computerchoice.\n";
*/

/*
$choices = array('rock', 'gun', 'lightning', 'devil', 'dragon', 'water', 'air', 'paper', 'sponge', 'wolf', 'tree', 'human', 'snake', 'scissors', 'fire');
$userchoice = strtolower(readline("Choose rock, gun, lightning, devil, dragon, water, air, paper, sponge, wolf, tree, human, snake, scissors, or fire: "));
if (!in_array($userchoice, $choices))
{
	echo "Please choose either rock, gun, lightning, devil, dragon, water, air, paper, sponge, wolf, tree, human, snake, scissors, or fire.\n";
	exit();
}

$computerchoice = $choices[rand(0, 14)];

if ($userchoice == $computerchoice)
	echo "It's a tie!\n";
else if (($userchoice == 'gun' && $computerchoice == 'rock')
		|| ($userchoice == 'gun' && $computerchoice == 'fire')
		|| ($userchoice == 'gun' && $computerchoice == 'scissors')
		|| ($userchoice == 'gun' && $computerchoice == 'snake')
		|| ($userchoice == 'gun' && $computerchoice == 'human')
		|| ($userchoice == 'gun' && $computerchoice == 'tree')
		|| ($userchoice == 'gun' && $computerchoice == 'wolf')
		|| ($userchoice == 'rock' && $computerchoice == 'fire')
		|| ($userchoice == 'rock' && $computerchoice == 'scissors')
		|| ($userchoice == 'rock' && $computerchoice == 'snake')
		|| ($userchoice == 'rock' && $computerchoice == 'human')
		|| ($userchoice == 'rock' && $computerchoice == 'tree')
		|| ($userchoice == 'rock' && $computerchoice == 'wolf')
		|| ($userchoice == 'rock' && $computerchoice == 'sponge')
		|| ($userchoice == 'fire' && $computerchoice == 'scissors')
		|| ($userchoice == 'fire' && $computerchoice == 'snake')
		|| ($userchoice == 'fire' && $computerchoice == 'human')
		|| ($userchoice == 'fire' && $computerchoice == 'tree')
		|| ($userchoice == 'fire' && $computerchoice == 'wolf')
		|| ($userchoice == 'fire' && $computerchoice == 'sponge')
		|| ($userchoice == 'fire' && $computerchoice == 'paper')
		|| ($userchoice == 'scissors' && $computerchoice == 'snake')
		|| ($userchoice == 'scissors' && $computerchoice == 'human')
		|| ($userchoice == 'scissors' && $computerchoice == 'tree')
		|| ($userchoice == 'scissors' && $computerchoice == 'wolf')
		|| ($userchoice == 'scissors' && $computerchoice == 'sponge')
		|| ($userchoice == 'scissors' && $computerchoice == 'paper')
		|| ($userchoice == 'scissors' && $computerchoice == 'air')
		|| ($userchoice == 'snake' && $computerchoice == 'human')
		|| ($userchoice == 'snake' && $computerchoice == 'tree')
		|| ($userchoice == 'snake' && $computerchoice == 'wolf')
		|| ($userchoice == 'snake' && $computerchoice == 'sponge')
		|| ($userchoice == 'snake' && $computerchoice == 'paper')
		|| ($userchoice == 'snake' && $computerchoice == 'air')
		|| ($userchoice == 'snake' && $computerchoice == 'water')
		|| ($userchoice == 'human' && $computerchoice == 'tree')
		|| ($userchoice == 'human' && $computerchoice == 'wolf')
		|| ($userchoice == 'human' && $computerchoice == 'sponge')
		|| ($userchoice == 'human' && $computerchoice == 'paper')
		|| ($userchoice == 'human' && $computerchoice == 'air')
		|| ($userchoice == 'human' && $computerchoice == 'water')
		|| ($userchoice == 'human' && $computerchoice == 'dragon')
		|| ($userchoice == 'tree' && $computerchoice == 'wolf')
		|| ($userchoice == 'tree' && $computerchoice == 'sponge')
		|| ($userchoice == 'tree' && $computerchoice == 'paper')
		|| ($userchoice == 'tree' && $computerchoice == 'air')
		|| ($userchoice == 'tree' && $computerchoice == 'water')
		|| ($userchoice == 'tree' && $computerchoice == 'dragon')
		|| ($userchoice == 'tree' && $computerchoice == 'devil')
		|| ($userchoice == 'wolf' && $computerchoice == 'sponge')
		|| ($userchoice == 'wolf' && $computerchoice == 'paper')
		|| ($userchoice == 'wolf' && $computerchoice == 'air')
		|| ($userchoice == 'wolf' && $computerchoice == 'water')
		|| ($userchoice == 'wolf' && $computerchoice == 'dragon')
		|| ($userchoice == 'wolf' && $computerchoice == 'devil')
		|| ($userchoice == 'wolf' && $computerchoice == 'lightning')
		|| ($userchoice == 'sponge' && $computerchoice == 'paper')
		|| ($userchoice == 'sponge' && $computerchoice == 'air')
		|| ($userchoice == 'sponge' && $computerchoice == 'water')
		|| ($userchoice == 'sponge' && $computerchoice == 'dragon')
		|| ($userchoice == 'sponge' && $computerchoice == 'devil')
		|| ($userchoice == 'sponge' && $computerchoice == 'lightning')
		|| ($userchoice == 'sponge' && $computerchoice == 'gun')
		|| ($userchoice == 'paper' && $computerchoice == 'air')
		|| ($userchoice == 'paper' && $computerchoice == 'water')
		|| ($userchoice == 'paper' && $computerchoice == 'dragon')
		|| ($userchoice == 'paper' && $computerchoice == 'devil')
		|| ($userchoice == 'paper' && $computerchoice == 'lightning')
		|| ($userchoice == 'paper' && $computerchoice == 'gun')
		|| ($userchoice == 'paper' && $computerchoice == 'rock')
		|| ($userchoice == 'air' && $computerchoice == 'water')
		|| ($userchoice == 'air' && $computerchoice == 'dragon')
		|| ($userchoice == 'air' && $computerchoice == 'devil')
		|| ($userchoice == 'air' && $computerchoice == 'lightning')
		|| ($userchoice == 'air' && $computerchoice == 'gun')
		|| ($userchoice == 'air' && $computerchoice == 'rock')
		|| ($userchoice == 'air' && $computerchoice == 'fire')
		|| ($userchoice == 'water' && $computerchoice == 'dragon')
		|| ($userchoice == 'water' && $computerchoice == 'devil')
		|| ($userchoice == 'water' && $computerchoice == 'lightning')
		|| ($userchoice == 'water' && $computerchoice == 'gun')
		|| ($userchoice == 'water' && $computerchoice == 'rock')
		|| ($userchoice == 'water' && $computerchoice == 'fire')
		|| ($userchoice == 'water' && $computerchoice == 'scissors')
		|| ($userchoice == 'dragon' && $computerchoice == 'devil')
		|| ($userchoice == 'dragon' && $computerchoice == 'lightning')
		|| ($userchoice == 'dragon' && $computerchoice == 'gun')
		|| ($userchoice == 'dragon' && $computerchoice == 'rock')
		|| ($userchoice == 'dragon' && $computerchoice == 'fire')
		|| ($userchoice == 'dragon' && $computerchoice == 'scissors')
		|| ($userchoice == 'dragon' && $computerchoice == 'snake')
		|| ($userchoice == 'devil' && $computerchoice == 'lightning')
		|| ($userchoice == 'devil' && $computerchoice == 'gun')
		|| ($userchoice == 'devil' && $computerchoice == 'rock')
		|| ($userchoice == 'devil' && $computerchoice == 'fire')
		|| ($userchoice == 'devil' && $computerchoice == 'scissors')
		|| ($userchoice == 'devil' && $computerchoice == 'snake')
		|| ($userchoice == 'devil' && $computerchoice == 'human')
		|| ($userchoice == 'lightning' && $computerchoice == 'gun')
		|| ($userchoice == 'lightning' && $computerchoice == 'rock')
		|| ($userchoice == 'lightning' && $computerchoice == 'fire')
		|| ($userchoice == 'lightning' && $computerchoice == 'scissors')
		|| ($userchoice == 'lightning' && $computerchoice == 'snake')
		|| ($userchoice == 'lightning' && $computerchoice == 'human')
		|| ($userchoice == 'lightning' && $computerchoice == 'tree'))		
	echo "Congratulations! You won! The computer chose $computerchoice.\n";
else
	echo "Sorry, you lost. The computer chose $computerchoice.\n";
*/
?>
