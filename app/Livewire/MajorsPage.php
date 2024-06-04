<?php

namespace App\Livewire;

use App\Models\Major;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

#[Layout('layouts.app')]
class MajorsPage extends Component
{
    use WithPagination;

    public $search;
    #[Validate('required|min:1|max:1')]
    public $short;
    #[Validate('required|min:1|max:5')]
    public $abbreviation;
    #[Validate('required|min:3|max:50')]
    public $name;
    public $majorId;
    public $deleteId;

    public function save(){
        if(!$this->majorId){
            $this->validate();
            Major::create([
                "name" => $this->name,
                "short" => $this->short,
                "abbreviation" => $this->abbreviation,
            ]);
            $this->dispatch('close-modal');
            $this->reset();
            flash()->addSuccess('Jurusan berhasil ditambah.');
        }else{
            $major = Major::findOrFail($this->majorId);
            $major->update([
                "name" => $this->name,
                "short" => $this->short,
                "abbreviation" => $this->abbreviation,
            ]);
            $this->dispatch('close-modal');
            flash()->addSuccess('Jurusan berhasil diubah.');
        }
    }

    #[On('edit-major')]
    public function update($id)
    {
        $this->majorId = $id;
        $major = Major::findOrFail($id);
        $this->name = $major->name;
        $this->short = $major->short;
        $this->abbreviation = $major->abbreviation;

    }

    #[On('delete')]
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    #[On('confirm-delete')]
    public function delete()
    {
        $major = Major::find($this->deleteId);

        if ($major) {
            $major->delete();
            $this->render();
            $this->dispatch('close-modal');

            flash()->addSuccess('Jurusan berhasil dihapus.');
        } else {
            $this->dispatch('close-modal');
            flash()->addError('Jurusan tidak ditemukan.');
        }
    }

    #[On('close-modal')]
    public function dissmiss()
    {
        $this->reset();
        $this->reset('majorId');
        $this->resetValidation();
    }
    public function render()
    {
        return view('livewire.majors-page', [
            'majors' => Major::search($this->search)->paginate(10),
        ]);
    }
}
