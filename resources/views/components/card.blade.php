<div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $detail['name'] }}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('detail', ['detail' => $detail['uri']]) }}" class="btn btn-primary">Get Started</a>
            </div>

        </div>
    </div>
</div>