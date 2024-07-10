@extends('./home')
@section('content')
    <div class="container" style="display:flex">
        @if (!empty($category))
            @foreach ($category as $item => $cate)
                <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <div class="my-3 p-3">
                            <h2 class="display-5">{{ $cate->name }}</h2>
                            <a class="btn btn-outline-secondary" href="{{ route('product.id', $cate->Id) }}">{{ $cate->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection