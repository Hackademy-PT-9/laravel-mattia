<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $detail['name'] }}</h5>
            <p class="card-text">Descrizione: <br>
                per <strong>{{ $detail['name'] }}</strong> il tempo di realizzazione è di circa
                <u>{{ $detail['tempo_di_realizzazione'] }}</u>.
                <br>Il prezzo è di {{ $detail['costo'] }}€</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('detail', ['detail' => $detail['uri']]) }}" class="btn btn-primary">Get Started</a>
            </div>

        </div>
    </div>
</div>