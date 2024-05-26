<?php

namespace App\Livewire\Components;

use Livewire\Component;

class InputField extends Component
{
    public $name;
    public $label;
    public $model;
    public $type;
    public function render()
    {
        return view('livewire.components.input-field');
    }
}
