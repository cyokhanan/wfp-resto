
@extends('layouts.app')

@section('content')
<div class="container text-center my-5">
    <h1 class="text-4xl font-bold mb-4">Produk Kami</h1>
    <p class="mb-6 text-lg text-gray-700">Nikmati berbagai pilihan makanan lezat yang kami sajikan khusus untuk Anda!</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($foods as $food)
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold">{{ $food->name }}</h2>
                <p class="text-gray-600">{{ $food->category->name }}</p>
                <p class="text-red-500 font-bold mt-2">Rp {{ number_format($food->price, 0, ',', '.') }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
