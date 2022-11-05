<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompanyModal extends Component
{
    protected $listeners = [
        'openCompanyModal'=>'openModal'
    ];

    public function openModal()
    {
        dd('test');
    }

    public function render()
    {
        return view('livewire.company-modal');
    }
}
