<x-layout>
    <x-slot name="title">
        {{Route::CurrentRouteName()}}
    </x-slot>
    <x-section-service />

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <x-card-detail :detail=$detail/>

        </div>
    </div>
</x-layout>
