@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
            <b>Daftar Order</b>
        </h2>
        <a href="{{ route('orders.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Order
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Pelanggan</th>
                    <th>Jumlah Makanan</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($customers as $index => $customer)
                    @php
                        $totalFoods = 0;
                        $totalPrice = 0;
                        foreach ($customer->orders as $order) {
                            $totalFoods += $order->foods->count();
                            $totalPrice += $order->foods->sum('price');
                        }
                    @endphp
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="fw-bold text-primary">{{ $customer->name }}</td>
                        <td>{{ $totalFoods }} makanan</td>
                        <td>Rp{{ number_format($totalPrice, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('orders.show', $customer->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> Lihat Order
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            <em>Belum ada data pelanggan.</em>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
