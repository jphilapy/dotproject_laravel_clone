<div class="container-fluid">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('all')" class="nav-link @if($currentTab == 'all') active @endif" role="tab" data-bs-toggle="tab" href="#">All
                Companies</a>
        </li>
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('client')" class="nav-link @if($currentTab == 'client') active @endif" role="tab" data-bs-toggle="tab" href="#">Client</a>
        </li>
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('vendor')" class="nav-link @if($currentTab == 'vendor') active @endif" role="tab" data-bs-toggle="tab" href="#">Vendor</a>
        </li>
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('supplier')" class="nav-link @if($currentTab == 'supplier') active @endif" role="tab" data-bs-toggle="tab"
               href="#">Supplier</a>
        </li>
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('consultant')" class="nav-link @if($currentTab == 'consultant') active @endif" role="tab" data-bs-toggle="tab"
               href="#">Consultant</a>
        </li>
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('government')" class="nav-link @if($currentTab == 'government') active @endif" role="tab" data-bs-toggle="tab"
               href="#">Government</a>
        </li>
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('internal')" class="nav-link @if($currentTab == 'internal') active @endif" role="tab" data-bs-toggle="tab"
               href="#">Internal</a>
        </li>
        <li class="nav-item" role="presentation">
            <a wire:click="changeTab('applicable')" class="nav-link @if($currentTab == 'applicable') active @endif" role="tab" data-bs-toggle="tab" href="#">Not
                Applicable</a>
        </li>
    </ul>
    <div class="tab-content">
        @if($currentTab != '')
            <div id="tab-1" class="tab-pane active" role="tabpanel">
                <p>Content for tab {{$currentTab}}.</p>
            </div>
        @endif
    </div>
</div>
