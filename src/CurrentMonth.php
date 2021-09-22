<?php

namespace App;

use DateTime;
use Exception;

class CurrentMonth
{
    public function isIncludedInPeriod(Absence $absence):bool
    {
        $currentMonth = new DateTime();
        if ($currentMonth->format('m-Y') === $absence->getStartedAt()->format('m-Y')) {
            return true;
        }

        if ($currentMonth->format('m-Y') === $absence->getEndedAt()->format('m-Y')) {
            return true;
        }

        return false;
    }   
}