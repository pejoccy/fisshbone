<?php

include './src/executeMaxJobs.php';
include './src/printProfiles.php';

$A = [7, 6, 5, 3, 4, 2, 1];


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
var_dump(formatPlayer($players)); exit;