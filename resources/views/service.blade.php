<x-layout>
    <x-section-service />

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                {{-- ciclo le card --}}
                @foreach ($services as $detail)
                    <x-card :detail="$detail" />
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
