<?php

namespace App;

use Exception;

class Absence
{
    private \DateTime $startedAt;
    private \DateTime $endedAt;

    public function __construct(\DateTime $startedAt, \DateTime $endedAt)
    {
        if ($endedAt < $startedAt) {
            throw new Exception('absence endedAt date cannot be before absence started at date');
        }
        $this->startedAt = $startedAt;
        $this->endedAt = $endedAt;
    }

    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }

    public function setStartedAt(\DateTime $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    public function getEndedAt(): \DateTime
    {
        return $this->endedAt;
    }

    public function setEndedAt(\DateTime $endedAt): void
    {
        $this->endedAt = $endedAt;
    }
}
