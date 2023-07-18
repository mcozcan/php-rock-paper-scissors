<?php
// www.mcozcan.com
function getUserChoice()
{
    $validChoices = ['rock', 'paper', 'scissors'];

    while (true) {
        $choice = strtolower(readline("Enter your choice (rock/paper/scissors): "));

        if (in_array($choice, $validChoices)) {
            return $choice;
        }

        echo "Invalid choice. Please choose rock, paper, or scissors.\n";
    }
}

function getComputerChoice()
{
    $choices = ['rock', 'paper', 'scissors'];
    return $choices[array_rand($choices)];
}

function determineWinner($userChoice, $computerChoice)
{
    if ($userChoice === $computerChoice) {
        return 'It\'s a tie!';
    } elseif (
        ($userChoice === 'rock' && $computerChoice === 'scissors')
        || ($userChoice === 'paper' && $computerChoice === 'rock')
        || ($userChoice === 'scissors' && $computerChoice === 'paper')
    ) {
        return 'Congratulations! You win!';
    } else {
        return 'Oops! You lose!';
    }
}

function playGame()
{
    echo "\n--- Rock-Paper-Scissors Game ---\n";

    $userChoice = getUserChoice();
    $computerChoice = getComputerChoice();

    echo "\nYou chose: " . ucfirst($userChoice) . "\n";
    echo "Computer chose: " . ucfirst($computerChoice) . "\n";

    $result = determineWinner($userChoice, $computerChoice);
    echo $result . "\n";
}

// Play the game
playGame();
