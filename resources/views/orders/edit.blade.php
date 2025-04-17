@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Edit Order</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="user_id" class="form-label">User</label>
                    <select name="user_id" id="user_id" class="form-select" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $order->user_id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="food_ids" class="form-label">Makanan</label>
                    <select name="food_ids[]" id="food_ids" class="form-select" multiple required>
                        @foreach($foods as $food)
                            <option value="{{ $food->id }}" 
                                {{ $order->foods->contains($food->id) ? 'selected' : '' }}>
                                {{ $food->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
