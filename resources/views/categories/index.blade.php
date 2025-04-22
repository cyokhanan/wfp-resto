@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
        <b>Daftar Kategori</b>
    </h2>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Jumlah Makanan</th>
                    <th>Daftar Makanan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $index => $category)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->foods->count() }}</td>
                    <td>
                        @foreach($category->foods as $food)
                            @php
                                $modalId = 'foodModal_' . $food->id;
                            @endphp
                            <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                                {{ $food->name }}
                            </a>{{ !$loop->last ? ',' : '' }}&nbsp;

                            <!-- Modal untuk setiap food -->
                            <div class="modal fade" id="{{ $modalId }}" tabindex="-1"
                                aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="{{ $modalId }}Label">{{ $food->name }} Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            @if ($food->image)
                                                <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}"
                                                    class="img-fluid rounded shadow mb-3" style="height: 200px; object-fit: cover;">
                                            @endif
                                            <p><strong>Deskripsi:</strong> {{ $food->description }}</p>
                                            <p><strong>Nutrition Fact:</strong> {{ $food->nutrition_fact }}</p>
                                            <p><strong>Harga:</strong> Rp {{ number_format($food->price, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">
                        <em>Belum ada kategori tersedia.</em>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection