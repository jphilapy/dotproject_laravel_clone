<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompaniesSubMenu extends Component
{
    public $currentTab = 'all';
    public $tabs;

    public function mount()
    {
        $this->tabs = [
            'all'=>'All Companies',
            'client'=>'Client',
            'vendor'=>'Vendor',
        ];
    }

    public function changeTab($tab)
    {
        $this->currentTab = $tab;
    }

    public function render()
    {
        return view('livewire.companies-sub-menu');
    }
}
