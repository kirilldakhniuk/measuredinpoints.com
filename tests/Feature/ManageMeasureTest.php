<?php

use App\Livewire\CreateMeasure;
use Livewire\Livewire;

test('a guest user can create measure', function () {
    $response = Livewire::test(CreateMeasure::class)
        ->set('title', fake()->word)
        ->call('save');

    $response
        ->assertHasNoErrors()
        ->assertRedirect(route('measures.show', absolute: false));
});

test('a measure can be started', function () {
    $response = $this->post(route('measure.start'));

    $response->assertStatus(200);

    \Thunk\Verbs\Facades\Verbs::assertCommitted(\App\Events\MeasureStarted::class);
//    $this->assertDatabaseCount('measures', 1);
});
