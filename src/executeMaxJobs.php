<?php

function executeMaxJobs(array $tasks, $time_allowed) {
    $jobs_done = 0;
    if (empty($tasks)) {
        return $jobs_done;
    }
    asort($tasks);   // optimize job 
    $remaining_time = $time_allowed;
    foreach ($tasks as $job_time) {
        $remaining_time -= $job_time;
        if ($remaining_time < 0) {
            return $jobs_done;
        }
        $jobs_done++;
    }
}
