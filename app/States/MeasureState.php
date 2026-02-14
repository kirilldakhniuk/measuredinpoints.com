<?php

namespace App\States;

use Carbon\CarbonImmutable;
use Thunk\Verbs\State;

class MeasureState extends State
{
    public bool $started = false;

    public CarbonImmutable $started_at;
}
