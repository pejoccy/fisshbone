<?php

function executeMaxJobs(array $jobs, $time_allowed) {
    $jobs_done = 0;
    if (empty($jobs)) { 
        return $jobs_done;
    }
    $optimized_jobs = asort($jobs);
    $remaining_time = $time_allowed;
    foreach($optimized_jobs as $val) {
        $remaining_time -= $val;
        if ($remaining_time < 0) {
            return $jobs_done;
        }
        $jobs_done++;
    }
}

