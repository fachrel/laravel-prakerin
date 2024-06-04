<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class AttendancesPage extends Component
{
    public function render()
    {
        return view('livewire.attendances-page');
    }
}
