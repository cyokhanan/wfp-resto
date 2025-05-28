@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
            <b>Daftar Kategori</b>
        </h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
            <i class="fas fa-plus"></i> Tambah Kategori
        </button>
        @include('categories.create')
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Daftar Makanan</th>
                    <th>Nama Kategori</th>
                    <th>Jumlah Makanan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        @foreach($category->foods as $food)
                            @php
                                $modalId = 'foodModal_' . $food->id;
                            @endphp
                            <a href="#" class="text-decoration-none fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                                {{ $food->name }}
                            </a>{{ !$loop->last ? ',' : '' }}&nbsp;

                            <!-- Modal Makanan -->
                            <div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content rounded-4 shadow">
                                        <div class="modal-header bg-light text-dark rounded-top-4">
                                            <h5 class="modal-title" id="{{ $modalId }}Label">Detail Makanan: {{ $food->name }}</h5>
                                            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                @if ($food->image)
                                                <div class="col-md-5 text-center mb-3 mb-md-0">
                                                    <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" class="img-fluid rounded shadow" style="height: 250px; width: 100%; object-fit: cover;">
                                                </div>
                                                @endif
                                                <div class="col-md-7">
                                                    <p><strong>Deskripsi:</strong> {{ $food->description }}</p>
                                                    <p><strong>Nutrition Fact:</strong> {{ $food->nutrition_fact }}</p>
                                                    <p><strong>Harga:</strong> <span class="text-success fw-semibold">Rp {{ number_format($food->price, 0, ',', '.') }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer bg-light rounded-bottom-4">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->foods->count() }}</td>
                    <td>
                        <a href="{{ route('listcategories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('listcategories.destroy', $category->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        <em>Belum ada kategori tersedia.</em>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
