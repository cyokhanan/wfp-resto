@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detail Order - {{ $customer->name }}</h5>
        </div>
        <div class="card-body">
            @forelse($customer->orders as $order)
                <div class="mb-4 border-bottom pb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0">Order ID: {{ $order->id }}</h6>
                        <div>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm me-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus order ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                    <ul class="mb-2">
                        @foreach($order->foods as $food)
                            <li>{{ $food->name }} - Rp{{ number_format($food->price, 0, ',', '.') }}</li>
                        @endforeach
                    </ul>
                    <strong>Total Harga:</strong>
                    Rp{{ number_format($order->foods->sum('price'), 0, ',', '.') }}
                </div>
            @empty
                <p class="text-muted">Tidak ada order untuk customer ini.</p>
            @endforelse
            <div class="d-flex justify-content-end mt-3">
                <a href="{{ route('orders.index') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar Order
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
