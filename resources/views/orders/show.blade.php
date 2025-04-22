@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Order - {{ $customer->name }}</h5>
        </div>
        <div class="card-body">
            @forelse($customer->orders as $order)
                <div class="mb-4 border-bottom pb-3">
                    <h6>Order ID: {{ $order->id }}</h6>
                    <ul>
                        @foreach($order->foods as $food)
                            <li>{{ $food->name }} - Rp{{ number_format($food->price, 0, ',', '.') }}</li>
                        @endforeach
                    </ul>
                    <strong>Total Harga:</strong>
                    Rp{{ number_format($order->foods->sum('price'), 0, ',', '.') }}
                </div>
            @empty
                <p>Tidak ada order untuk customer ini.</p>
            @endforelse

            <a href="{{ route('daftarorder.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Order</a>
        </div>
    </div>
</div>
@endsection