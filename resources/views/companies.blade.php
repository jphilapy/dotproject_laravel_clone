<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Companies') }}
        </h2>
    </x-slot>
    <div>
        <livewire:companies-sub-menu/>
    </div>
    <!-- main sections -->
    <main id="mainSections" class="main-sections py-4">
        <!-- page content -->
        <section class="page-content">
            <div class="container-fluid">
                <div class="card card-body p-4">
                    <div>
                        <livewire:companies-list/>
                    </div>
                </div>
            </div>
        </section>
        <!-- !page content -->
    </main>
    <!-- !main sections -->
</x-app-layout>
