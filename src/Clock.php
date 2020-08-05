<?php

namespace Rikudou\Clock;

use DateTime;
use DateTimeInterface;

final class Clock implements ClockInterface
{
    public function now(): DateTimeInterface
    {
        return new DateTime();
    }
}
