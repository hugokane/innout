<?php

Database::executeSQL('DELETE FROM working_hours');
Database::executeSQL('DELETE FROM users WHERE id > 10');

function getDayTemplateByOdds($regularRate, $extraRate, $lazyRate) {
$regularDayTemplate = [
    'time1' => '08:00:00',
    'time2' => '12:00:00',
    'time3' => '13:00:00',
    'time4' => '17:00:00',
    'worked_time' => DAILY_TIME 
];
$extraHourDayTemplate = [
    'time1' => '08:00:00',
    'time2' => '12:00:00',
    'time3' => '13:00:00',
    'time4' => '18:00:00',
    'worked_time' => DAILY_TIME  + 3600
];
$lazyDayTemplate = [
    'time1' => '08:30:00',
    'time2' => '12:00:00',
    'time3' => '13:00:00',
    'time4' => '17:00:00',
    'worked_time' => DAILY_TIME  - 1800
];


$value = rand(0, 100);
if($value <= $regularRate) {
    return $regularDayTemplate;
} elseif ($value <= $regularRate + $extraRate) {
    return $extraHourDayTemplate;
}else {
    return $lazyDayTemplate;
    }
}
function populateWorkingHours($userID, $initialDate, $regularRate, $extraRate, $lazyRate) {
    $currentDate = $initialDate;
    $today = new DateTime();
    $columns = ['user_id' => $userID, 'work_date' => $currentDate];
    
    while(isBefore($currentDate, $today)) {
        if(!isWeekend($currentDate)) {
            $template = getDayTemplateByOdds($regularRate, $extraRate, $lazyRate);
            $columns = array_merge($columns, $template);
            $workingHours = new WorkingHours($columns);
            $workingHours->insert();
        }
        $currentDate = getNextDay($currentDate)->format('Y-m-d');
        $columns['work_date'] = $currentDate;
    }
}
$lastMonth = strtotime('first day of last month');
populateWorkingHours(1, date('Y-m-1'), 70, 20, 10 );
populateWorkingHours(3, date('Y-m-1', $lastMonth), 20, 75, 5 );
populateWorkingHours(2, date('Y-m-1', $lastMonth), 20, 79, 1 );
populateWorkingHours(4, date('Y-m-1', $lastMonth), 20, 79, 1 );
populateWorkingHours(5, date('Y-m-1', $lastMonth), 20, 79, 1 );
populateWorkingHours(6, date('Y-m-1', $lastMonth), 20, 79, 1 );
populateWorkingHours(8, date('Y-m-1', $lastMonth), 20, 79, 1 );
populateWorkingHours(9, date('Y-m-1',  $lastMonth), 20, 10, 70 );
populateWorkingHours(10, date('Y-m-1',  $lastMonth), 5, 5, 90 );

echo 'Tudo certo :)';