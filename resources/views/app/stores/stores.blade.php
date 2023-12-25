@extends('app.layouts.main')

@section('title', 'My Stores')

@section('content')
<div class="py-3 px-3">
    <div class="d-flex justify-content-between">
        <h1>Stores</h1>

        <button class="btn btn-outline-dark mb-3 d-flex justify-content-between align-self-end gap-3" title="Add Store">Add Store <i class="bi bi-plus-lg"></i></button>
    </div>

    <div class="d-flex justify-content">
        <table class="table table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Store</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($stores as $store)                
                    <tr>
                        <td>{{ $store['store_name'] }}</td>
                        <td>{{ $store['postal_code'] }}</td>
                        <td>{{ $store['status'] }}</td>
                        <td>
                            <button class="btn btn-outline-light" title="Edit Store"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-outline-light" title="View Store"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection