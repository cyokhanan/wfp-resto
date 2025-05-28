@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
            <b>Daftar Makanan</b>
        </h2>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahMakanan">
            <i class="fas fa-plus"></i> Tambah Makanan
        </button>
        @include('foods.create')
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Modals</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $f)
                <tr>
                    <td>{{ $f->id }}</td>
                    <td>
                        @php
                            $modalId = 'foodModal_' . $f->id;
                        @endphp
                        <a href="#" class="text-decoration-none fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                            {{ $f->name }}
                        </a>
                        @include('foods.show')
                    </td>
                    <td>{{ $f->category->name }}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal_{{ $f->id }}">
                            Edit
                        </button>
                        @include('foods.edit')
                        <form action="{{ route('foods.destroy', $f->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus makanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
