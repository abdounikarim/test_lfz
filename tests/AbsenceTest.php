<?php

namespace App\Tests;

use App\Absence;
use DateTime;
use PHPUnit\Framework\TestCase;

class AbsenceTest extends TestCase
{
    public function testAbsenceStartedAtInstanceOfDateTime(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $this->assertInstanceOf(DateTime::class, $absence->getStartedAt());
    }

    public function testAbsenceEndedAtInstanceOfDateTime(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $this->assertInstanceOf(DateTime::class, $absence->getEndedAt());
    }

    public function testAbsenceStartedAtIsNotNull(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $this->assertNotNull($absence->getStartedAt());
    }

    public function testAbsenceEndedAtIsNotNull(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $this->assertNotNull($absence->getEndedAt());
    }

    public function testAbsenceHasStartedAtAttribute(): void
    {
        $this->assertClassHasAttribute('startedAt', Absence::class);
    }

    public function testAbsenceHasEndedAtAttribute(): void
    {
        $this->assertClassHasAttribute('endedAt', Absence::class);
    }

    public function testAbsenceStartedAtLessThanOrEqualEndedAtIsNotNull(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $this->assertLessThanOrEqual($absence->getEndedAt(), $absence->getStartedAt());
    }

    public function testAbsenceEndedAtCannotBeGreaterThanStartedAt(): void
    {
        $this->expectException('Exception');
        $this->expectExceptionMessage('absence endedAt date cannot be before absence started at date');
        new Absence(new DateTime('+1 month'), new DateTime());
    }

    public function testAbsenceStartedAtLessThanNewDateTime(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $absence->setStartedAt(new DateTime());
        $this->assertLessThan(new DateTime(), $absence->getStartedAt());
    }

    public function testAbsenceEndedAtLessThanNewDateTime(): void
    {
        $absence = new Absence(new DateTime(), new DateTime());
        $absence->setEndedAt(new DateTime());
        $this->assertLessThan(new DateTime(), $absence->getEndedAt());
    }
}