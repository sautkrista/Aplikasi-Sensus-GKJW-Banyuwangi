<?php

use Carbon\Carbon;

function startDate($param)
{
    $date = Carbon::parse($param);
    return $date->startOfWeek()->format('d-M-Y');
}

function endDate($param)
{
    $date = Carbon::parse($param);
    return $date->endOfWeek()->format('d-M-Y');
}
