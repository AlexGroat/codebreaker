<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
        'eco',
        'rocket_launch',
        'heart_broken',
        'gavel',
        'hand_bones',
        'build',
        'dangerous',
        'colorize',
        'restaurant',
        'castle',
        'pet_supplies',
        'fire_hydrant',
        'pentagon',
        'colors',
        'music_note',
        'flight',
        'snowmobile',
        'hail',
        'school',
        'camping',
        'mindfulness',
        'headphones',
        'charger',
        'security',
        'lunch_dining',
        'ac_unit'
    ];

    #[Computed(persist: true)]
    public function letters(): array
    {
        shuffle($this->symbols);

        return collect(range('a', 'z'))
            ->combine($this->symbols)
            ->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
