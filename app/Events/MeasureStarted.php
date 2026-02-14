<?php

namespace App\Events;

use App\States\MeasureState;
use Thunk\Verbs\Attributes\Autodiscovery\AppliesToState;
use Thunk\Verbs\Event;

#[AppliesToState(MeasureState::class)]
class MeasureStarted extends Event
{
    public function __construct(
        public ?int $measure_id = null,
    ) {}

    public function validate(MeasureState $measure)
    {
        $this->assert(! $measure->started, 'The measure is already started.');
    }

    public function applyToMeasure(MeasureState $measure)
    {
        $measure->started = true;
        $measure->started_at = now()->toImmutable();
    }

    public function handle()
    {
        //
    }
}
