<?php

namespace App\Livewire;

use App\Models\Measure;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class ShowMeasure extends Component
{
    public Measure $measure;

    public function mount(Measure $measure)
    {
        $this->measure = $measure;
    }

    public function render()
    {
        return view('livewire.show-measure');
    }
}
