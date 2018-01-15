<?php

include './src/executeMaxJobs.php';
include './src/printProfiles.php';

// Task 1
$time = 12;
$A = [7, 6, 5, 3, 4, 2, 1];

// Task 2
$players[] = [
 "Name" => "Ronaldo", 
 "Age" => 31, 
 "Country" => "Portugal",
 "Team" => "Real Madrid",
];
$players[] = [
 "Name" => "Messi", 
 "Age" => 27, 
 "Country" => "Argentina",
 "Team" => "Barcelona"
];
$players[] = [
 "Name" => "Neymar", 
 "Age" => 24, 
 "Country" => "Brazil",
 "Team" => "Barcelona"
];
$players[] = [
 "Name" => "Rooney", 
 "Age" => 30, 
 "Country" => "England",
 "Team" => "Man United"
];


// ==== SOLUTIONS ====
print("<p>== WORK DONE ==<br>" . executeMaxJobs($A, $time));
print("<p>== PLAYER PROFILE INFO ==<br>" . formatPlayer($players));