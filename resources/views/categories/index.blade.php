@extends('layouts.adminlte4')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="text-align:center;">Categories</th>
                                <th scope="col" style="text-align:center;">Number of Food</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $c)
                                                <tr>
                                                    <td style="text-align:center;">
                                                        <strong>{{ $c->name }}</strong><br>
                                                        @foreach($c->foods as $cf)
                                                                                    @php
                                                                                        $modalId = 'foodModal_' . $cf->id;
                                                                                    @endphp

                                                                                    <!-- Trigger Link -->
                                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                                                                                        {{ $cf->name }}.
                                                                                    </a>

                                                                                    <!-- Modal -->
                                                                                    @push('modal')
                                                                                        <div class="modal fade" id="{{ $modalId }}" tabindex="-1"
                                                                                            aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
                                                                                            <div class="modal-dialog">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                        <h1 class="modal-title fs-5" id="{{ $modalId }}Label">
                                                                                                            {{ $cf->name }} Details
                                                                                                        </h1>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                            aria-label="Close"></button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        <p><strong>Description:</strong> {{ $cf->description}}</p>
                                                                                                        <p><strong>Nutrition:</strong> {{ $cf->nutrition_fact}}</p>
                                                                                                        <p><strong>Price: </strong>Rp. {{ $cf->price}}</p>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary"
                                                                                                            data-bs-dismiss="modal">Close</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endpush
                                                        @endforeach
                                                    </td>
                                                    <td style="text-align:center;"> {{ count($c->foods) }}</td>
                                                </tr>
                            @endforeach

                            @if ($categories->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        <em>Belum ada kategori tersedia.</em>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@stack('modal')
