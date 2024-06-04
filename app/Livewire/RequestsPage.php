<?php

namespace App\Livewire;

use App\Models\Request;
use Livewire\Component;
use App\Models\Industry;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')]
class RequestsPage extends Component
{
    use WithPagination;

    public $request;
    public $industryId;
    public $requestId;

    public function request_pkl()
    {
        // dd('msk');

        Request::create([
            'user_id' => Auth::id(),
            'industry_id' => $this->industryId,
            'status' => 'pending',
        ]);

        $this->render();
        $this->dispatch('close-modal');
        flash()->addSuccess('Pengajuan berhasil diajukan.');
    }

    #[On('open-request')]
    public function update($id)
    {
        $this->industryId = $id;
    }


    // admin side
    #[On('process-request')]
    public function proccess($id)
    {
        $this->requestId = $id;
        $request = Request::find($id);
        if($request->status == 'pending'){
            $request->update([
                'status' => 'process',
            ]);
        }

    }

    public function accept()
    {
        $request = Request::find($this->requestId);
        if($request->status == 'process'){
            $request->update([
                'status' => 'accepted',
            ]);
        }
        $this->dispatch('close-modal');

    }

    public function reject()
    {
        $request = Request::find($this->requestId);
        if($request->status == 'process'){
            $request->update([
                'status' => 'rejected',
            ]);
        }
        $this->dispatch('close-modal');

    }

    #[On('render-request')]
    public function render()
    {
        $this->request = Request::where('user_id', Auth::id())->get();
        return view('livewire.requests-page', [
            'industries' => Industry::paginate(10),
            'requests' => Request::paginate(20),
        ]);
    }
}
