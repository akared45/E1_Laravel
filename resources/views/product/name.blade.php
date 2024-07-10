@extends('./home')
@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @if (!empty($product))
                @foreach ($product as $item => $product)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Price: {{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
