@extends('layouts.adminlte4')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Produk Kami</h1>
    <p class="text-center mb-5">Nikmati berbagai pilihan makanan lezat yang kami sajikan khusus untuk Anda!</p>

    <div class="row">
        @foreach ($foods as $food)
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/' . $food->image) }}" class="card-img-top" alt="{{ $food->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $food->name }}</h5>
                    <p class="card-text text-muted">{{ $food->category->name }}</p>
                    <p class="card-text text-danger fw-bold">Rp {{ number_format($food->price, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection