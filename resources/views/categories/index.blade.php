@extends('layouts.adminlte4')

@section('content')
<div class="container mt-4">
    <h2 style="font-family: Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;">
        <b>Daftar Kategori</b>
    </h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number of Food</th>
                    <th>List Name of Foods</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ count($c->foods) }}</td>
                        <td>
                            <ul>
                                @foreach($c->foods as $cf)
                                <li>{{ $cf->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection