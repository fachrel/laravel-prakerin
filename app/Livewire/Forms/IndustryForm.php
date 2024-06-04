<?php

namespace App\Livewire\Forms;

use Carbon\Carbon;
use Livewire\Form;
use App\Models\Industry;
use Livewire\Attributes\Validate;

class IndustryForm extends Form
{
    #[Validate('required|min:3|max:100')]
    public $name;

    #[Validate('required')]
    public $leader;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $phone;

    #[Validate('required')]
    public $entry_time = "00:00";

    #[Validate('required')]
    public $exit_time = "00:00";


    #[Validate('required')]
    public $quota;
    public $major_id;

    public function save()
    {

        $this->validate();
        Industry::create([
            'major_id' => (int) $this->major_id,
            'name' => $this->name,
            'leader' => $this->leader,
            'address' => $this->address,
            'phone' => $this->phone,
            'quota' => $this->quota,
            'entry_time' => $this->entry_time,
            'exit_time' => $this->exit_time,
        ]);
        $this->reset();

    }

    public function update($id)
    {
        $this->validate();

        $industry = Industry::findOrFail($id);
        $industry->update([
            'major_id' => (int) $this->major_id,
            'name' => $this->name,
            'leader' => $this->leader,
            'address' => $this->address,
            'phone' => $this->phone,
            'quota' => $this->quota,
            'entry_time' => $this->entry_time,
            'exit_time' => $this->exit_time,
        ]);

        $this->reset();
    }
}
