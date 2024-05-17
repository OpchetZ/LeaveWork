<?php

namespace App\Http\Livewire;

use App\Models\agency;
use App\Models\employ;
use App\Models\leaverequest;
use Livewire\Component;

class Historyindex2 extends Component
{
    public $employs;
    public $agen;
    public $leaverequest;
    public function mount()
    {
        $this->employs = Employ::with('agency')->get();
        $this->agen = Agency::get();
        $this->leaverequest = LeaveRequest::get();
    }
    public function render()
    {
        return view('livewire.historyindex2');
    }
}
