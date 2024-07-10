@extends('./home')
@section('content')
<a href="#" class="btn btn-primary mb-3 mt-3 mr-3">Add new</a>
<table class="table table-striped table-hover table-responsive table-bordered">
    <thead class="table-light">
        <tr>
            <th class="text-left">Category_Id</th>
            <th class="text-left">Name</th>
            <th class="text-left">Img</th>
            <th class="text-left">Price</th>
            <th class="text-left">Description</th>
            <th class="text-left">Action</th>
        </tr>
    </thead>
    <tbody>
        @if (!empty($admin))
            @foreach ($admin as $ad)
                <tr>
                    <td class="text-left">{{ $ad->category_id }}</td>
                    <td class="text-left">{{ $ad->name }}</td>
                    <td class="text-left">
                        <img src="{{ asset('storage/' . $ad->img) }}" alt="{{ $ad->name }}" class="img-fluid"
                            style="max-width: 100px;">
                    </td>
                    <td class="text-left">{{ $ad->price }}</td>
                    <td class="text-left">{{ $ad->description }}</td>
                    <td class="text-left">
                        <a href="#" class="btn btn-success btn-sm mr-2">Update</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection
