<?php

namespace App\Livewire;

use App\Models\Major;

use Livewire\Component;
use App\Models\Industry;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\IndustryForm;

#[Layout('layouts.app')]
class IndustriesPage extends Component
{
    use WithPagination;
    public $industryId;
    public $deleteId;
    public $search;
    public IndustryForm $form;

    public function save(){
        if(!$this->industryId){
            $this->form->save();
            $this->dispatch('close-modal');
            $this->render();
            flash()->addSuccess('Industri berhasil ditambah.');
        }else{
            $this->form->update($this->industryId);
            $this->dispatch('close-modal');
            $this->render();
            flash()->addSuccess('Industri berhasil diubah.');
        }
    }

    #[On('edit-industry')]
    public function update($id)
    {
        $this->industryId = $id;
        $industry = Industry::findOrFail($id);
        $this->form->fill([
            'name' => $industry->name,
            'leader' => $industry->leader,
            'address' => $industry->address,
            'quota' => $industry->quota,
            'phone' => $industry->phone,
            'entry_time' => $industry->entry_time,
            'exit_time' => $industry->exit_time,
            'major_id' => $industry->major_id,
        ]);

    }

    #[On('delete')]
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    #[On('confirm-delete')]
    public function delete()
    {
        $industry = Industry::find($this->deleteId);

        if ($industry) {
            $industry->delete();
            $this->render();
            $this->dispatch('close-modal');
            flash()->addSuccess('Industri berhasil dihapus.');
        } else {
            $this->dispatch('close-modal');
            flash()->addError('Industri tidak ditemukan.');
        }
    }

    #[On('close-modal')]
    public function dissmiss()
    {
        // $this->form->reset();
        $this->reset('industryId');
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.industries-page', [
            'industries' => Industry::search($this->search)->paginate(10),
            'majors' => Major::all(),
        ]);
    }
}
