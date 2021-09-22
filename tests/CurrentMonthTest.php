<?php

namespace App\Tests;

use App\Absence;
use App\CurrentMonth;
use DateTime;
use PHPUnit\Framework\TestCase;

class CurrentMonthTest extends TestCase
{
    private CurrentMonth $currentMonth;

    public function setUp(): void
    {
        $this->currentMonth = new CurrentMonth();
    }

    public function testCurrentMonthInstanceOfCurrentMonthClass(): void
    {
        $this->assertInstanceOf(CurrentMonth::class, $this->currentMonth);
    }

    public function testCurrentMonthIsSameAsAbsenceStartedAndEndedAt(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $this->assertTrue($this->currentMonth->isIncludedInPeriod($absence));
    }

    public function testCurrentMonthIsSameAsAbsenceStartedAt(): void
    {
        $absence = new Absence(new DateTime(), new DateTime('+1 month'));
        $this->assertTrue($this->currentMonth->isIncludedInPeriod($absence));
    }

    public function testCurrentMonthIsSameAsAbsenceEndedAt(): void
    {
        $absence = new Absence(new DateTime('-1 month'), new DateTime());
        $this->assertTrue($this->currentMonth->isIncludedInPeriod($absence));
    }

    public function testCurrentMonthIsDifferentThanAbsenceStartedAndEndedAt(): void
    {
        $absence = new Absence(new DateTime('+1 month'), new DateTime('+1 month'));
        $this->assertFalse($this->currentMonth->isIncludedInPeriod($absence));
    }
}