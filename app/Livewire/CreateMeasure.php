<?php

namespace App\Livewire;

use App\Models\Measure;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class CreateMeasure extends Component
{
    #[Validate('required|string')]
    public string $title = '';

    public function save()
    {
        $this->validate();

        $measure = Measure::query()->create([
            'title' => $this->title,
        ]);

        $this->redirectIntended(default: route('home', absolute: false), navigate: true);
    }

    public function render()
    {
        return view('livewire.create-measure');
    }
}
