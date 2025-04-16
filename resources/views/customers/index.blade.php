@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <h2>Daftar Customers</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Total Order</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td><a {{ route('datapelanggan.show', $c->id) }}>{{ $c->name }}</a></td>
                        <td>{{ $c->orders->count() }}</td> {{-- hitung jumlah order --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
