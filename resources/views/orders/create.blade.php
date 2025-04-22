@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Tambah Order</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('daftarorder.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="customer_id" class="form-label">Customer</label>
                    <select name="customer_id" id="customer_id" class="form-select" required>
                        <option value="">-- Pilih Customer --</option>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="food_ids" class="form-label">Makanan</label>
                    <select name="food_ids[]" id="food_ids" class="form-select" multiple required>
                        @foreach($foods as $food)
                            <option value="{{ $food->id }}">{{ $food->name }}</option>
                        @endforeach
                    </select>
                    <small class="text-muted">Tekan Ctrl / Cmd untuk pilih lebih dari satu</small>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('daftarorder.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection