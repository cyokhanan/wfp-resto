@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
        <b>Daftar Order</b>
    </h2>
    <a href="{{ route(name: 'daftarorder.create') }}" class="btn btn-primary mb-3">Tambah Order</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Jumlah Makanan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                @php
                    $totalFoods = 0;
                    $totalPrice = 0;

                    foreach ($customer->orders as $order) {
                        $totalFoods += $order->foods->count();
                        $totalPrice += $order->foods->sum('price');
                    }
                @endphp
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $totalFoods }} makanan</td>
                    <td>Rp{{ number_format($totalPrice, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('daftarorder.show', $customer->id) }}" class="btn btn-info btn-sm">Lihat Order</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data pelanggan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection