<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class CompaniesList extends Component
{
    public $companies;

    public function render()
    {
        $this->companies = Company::all();
        return view('livewire.companies-list');
    }
}
