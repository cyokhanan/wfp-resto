@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
        <b>Daftar Pelanggan</b>
    </h2>
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
                        <td>
                            <!-- Trigger modal when customer name is clicked -->
                            <a href="#" data-bs-toggle="modal" data-bs-target="#customerModal_{{ $c->id }}">
                                {{ $c->name }}
                            </a>
                        </td>
                        <td>{{ $c->orders->count() }}</td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="customerModal_{{ $c->id }}" tabindex="-1" aria-labelledby="customerModalLabel_{{ $c->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="customerModalLabel_{{ $c->id }}">{{ $c->name }} Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Email:</strong> {{ $c->email }}</p>
                                    <p><strong>Phone Number:</strong> {{ $c->phone_number }}</p>
                                    <p><strong>Address:</strong> {{ $c->address ?? 'Address not provided' }}</p>
                                    <p><strong>Total Orders:</strong> {{ $c->orders->count() }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection