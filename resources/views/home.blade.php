@extends('layouts.adminlte4')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 fw-bold">Produk Kami</h1>
    <p class="text-center mb-5 fs-5 text-secondary">Nikmati berbagai pilihan makanan lezat yang kami sajikan khusus untuk Anda!</p>

    <div class="row g-4">
        @foreach ($foods as $food)
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-3 hover-shadow">
                <img src="{{ asset('storage/' . $food->image) }}" class="card-img-top rounded-top" alt="{{ $food->name }}" style="height: 220px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-semibold mb-2">{{ $food->name }}</h5>
                    <p class="text-muted mb-3">{{ $food->category->name }}</p>
                    <p class="card-text text-danger fw-bold fs-5 mb-4">Rp {{ number_format($food->price, 0, ',', '.') }}</p>
                    {{-- <a href="#" class="btn btn-outline-primary mt-auto align-self-start">Lihat Detail</a> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .hover-shadow {
        transition: box-shadow 0.3s ease;
        cursor: pointer;
    }
    .hover-shadow:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }
</style>
@endsection
