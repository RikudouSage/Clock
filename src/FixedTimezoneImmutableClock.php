<?php

namespace Rikudou\Clock;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use InvalidArgumentException;

final class FixedTimezoneImmutableClock implements ClockInterface
{
    /**
     * @var DateTimeZone|string
     */
    private $timezone;

    /**
     * @param string|DateTimeZone $timezone
     */
    public function __construct($timezone)
    {
        if (is_string($timezone)) {
            $timezone = new DateTimeZone($timezone);
        }

        if (!$timezone instanceof DateTimeZone) {
            throw new InvalidArgumentException('The timezone must be a string or instance of ' . DateTimeZone::class);
        }
        $this->timezone = $timezone;
    }

    public function now(): DateTimeInterface
    {
        return new DateTimeImmutable('now', $this->timezone);
    }
}
