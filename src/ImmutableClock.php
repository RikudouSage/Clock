<?php

namespace Rikudou\Clock;

use DateTimeImmutable;
use DateTimeInterface;

final class ImmutableClock implements ClockInterface
{
    public function now(): DateTimeInterface
    {
        return new DateTimeImmutable();
    }
}
