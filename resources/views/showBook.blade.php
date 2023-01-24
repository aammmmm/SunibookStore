@extends('template')

@section('title', 'home')

@section('content')
    <div class="row justify-content-center mb-4 mt-4">
        <form action="/searchBook" method="POST" class="d-flex" role="search" style="width:970px">
            @csrf
            <input name="searchBook" class="form-control me-2" type="search" placeholder="Search Book Title..."
                aria-label="Search">
            <button class="btn btn-outline-success text-dark" type="submit">Search</button>
        </form>
    </div>
    <div class="container">
        <h1 class="h2 mb-4 mt-3 ms-5" style="color: #597c9c ">Our Products</h1>
        <div class="row row-cols-5 mb-5">
            @foreach ($book_data as $data)
                <div class="card mb-2 mt-3 ms-5">
                    <a href="/bookDetail/{{ $data->id }}" style="text-decoration:none"
                        style="text-decoration-color: black">
                        <img src="{{ asset('storage/imagesB/' . $data->image) }}" class="card-img-top" alt="..."
                            style="height: 300px">
                        <div class="card-body">
                            <div
                                style="width: 400px;
                text-overflow: ellipsis;
                white-space:nowrap;
                overflow:hidden;
                color: #676767">
                                <h5>{{ $data->title }}</h5>
                            </div>
                            <h6 class="card-text text-secondary" style="color: #676767">{{ $data->author }}</h6>
                            <h6 class="card-text text-secondary" style="color: #676767">Price : {{ $data->price }}</h6>
                            {{-- <div class="btn btn-lg mt-4 text-light" style="width: 180px; background-color: #7fa7a6">
                Detail
              </div> --}}
                    </a>
                </div>
        </div>
        @endforeach
    </div>
    </div>

@endsection
