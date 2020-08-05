<?php

namespace Rikudou\Clock;

use DateTimeInterface;

interface ClockInterface
{
    public function now(): DateTimeInterface;
}
