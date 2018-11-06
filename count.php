<?php
// Expect integer
$rate = readline("\033[1;34m💵 Rate >>> \033[0m");
// Expected format 1h, 23h23m, 2h06m, 2(number of hours)
$hours = readline("\033[1;34m⏰ Hours >>> \033[0m");

if (strpos($hours, ':') > 0) { 
    $hours = explode(':', $hours);
} else {
    $hours = explode('h', $hours);
}

if (count($hours) > 1 && !empty($hours[1])) {
    $minutes = str_replace('m', '',  $hours[1]);
    $hours = $hours[0];
    $sum = round(($hours*$rate)+(($rate/60)*$minutes), 2);
} else {
    $sum = round($hours[0] * $rate, 2);
}

echo "\033[1;32m💰 Salary >>> \033[0;32m\${$sum}\033". PHP_EOL . PHP_EOL;
