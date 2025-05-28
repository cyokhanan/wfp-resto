@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
            <b>Daftar Pelanggan</b>
        </h2>
        <a href="#" class="btn btn-success disabled">
            <i class="fas fa-plus"></i> Tambah Pelanggan
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Pelanggan</th>
                    <th>Total Order</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>
                        <a href="#" class="text-decoration-none fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#customerModal_{{ $c->id }}">
                            {{ $c->name }}
                        </a>
                    </td>
                    <td>{{ $c->orders->count() }}</td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="customerModal_{{ $c->id }}" tabindex="-1" aria-labelledby="customerModalLabel_{{ $c->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content rounded-4 shadow">
                            <div class="modal-header bg-light text-dark rounded-top-4">
                                <h5 class="modal-title" id="customerModalLabel_{{ $c->id }}">Detail Pelanggan: {{ $c->name }}</h5>
                                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><strong>Email:</strong> {{ $c->email }}</p>
                                        <p><strong>Nomor Telepon:</strong> {{ $c->phone_number }}</p>
                                        <p><strong>Alamat:</strong> {{ $c->address ?? 'Alamat tidak tersedia' }}</p>
                                        <p><strong>Total Order:</strong> {{ $c->orders->count() }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer bg-light rounded-bottom-4">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">
                        <em>Belum ada pelanggan tersedia.</em>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
