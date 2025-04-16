@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <h2>Daftar Customers</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Nutrition Fact</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $f)
                    <tr>
                        <td>{{ $f->id }}</td>
                        <td><a href="{{ route('listmakanan.show', $f->id) }}">{{ $f->name }}</a></td>
                        <td>{{ $f->category->name }}</td>
                        <td>{{ $f->description }}</td>
                        <td>{{ $f->nutrition_fact }}</td>
                        <td>{{ $f->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection