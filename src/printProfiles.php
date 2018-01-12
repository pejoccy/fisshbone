<?php

function formatPlayer(array $players) {
    if (empty($players)) {
        return "No player profile";
    }
    $profile = "";
    foreach($players as $index => $player) {
        $header = "Info of player # {$index}";
        $profile .= $header . formatProfile($player);
    }
    return $profile;
}

function formatProfile(array $profiles, $profile_format) {
    // use default format if none is selected
    $format = "%s: %s\n";
    $formatted = "";
    if (!empty($profile_format)) {
        $format = $profile_format;
    }
    array_walk($profiles, function($value, $key) use (&$formatted, $format) {
        $formatted = printf($format, $key, $value);
    });
    return $formatted;
}


