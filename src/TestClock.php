<?php

namespace Rikudou\Clock;

use DateTimeInterface;

final class TestClock implements ClockInterface
{
    /**
     * @var DateTimeInterface
     */
    private $dateTime;

    public function __construct(DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function now(): DateTimeInterface
    {
        return $this->dateTime;
    }
}
