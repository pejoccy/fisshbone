<?php

function formatPlayer(array $players, $style_format = '') {
    if (empty($players)) {
        return "No player profile.";
    }
    // set default format if no custom format
    if (empty($style_format)) {
        $style_format = "%s: %s<br>";
    }
    $profile = "";
    for($i = 0; $i < count($players); $i++) {
        $player_index = $i+1;
        $profile .= "<br>Info of player # {$player_index}<br>";
        array_walk($players[$i], function($value, $key) use (&$profile, $style_format) {
            $profile .= sprintf($style_format, $key, $value);
        });
    }
    return $profile;
}


