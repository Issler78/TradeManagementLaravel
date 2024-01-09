@extends('app.layouts.main')

@section('title', 'My Stores')

@section('content')
<div class="py-3 px-3">
    <div class="d-flex justify-content-between">
        <h1>Stores</h1>

        <button class="btn btn-outline-dark mb-3 d-flex justify-content-between align-self-end gap-2" title="Add Store" data-bs-toggle="modal" data-bs-target="#createStore">Add Store<i class="bi bi-plus-lg"></i></button>
    </div>

    <div class="d-flex justify-content">
        <table class="table table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Store</th>
                    <th scope="col" class="class-visible-md">Postal Code</th>
                    <th scope="col" class="class-visible-sm text-center">Status</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($stores as $store)                
                    <tr>
                        <td>{{ $store['store_name'] }}</td>
                        <td class="class-visible-md">{{ $store['postal_code'] }}</td>
                        <td class="class-visible-sm text-center">{{ getStatusValue($store['status']) }}</td>
                        <td class="text-center">
                            <button class="btn btn-outline-light" title="Edit Store"data-bs-toggle="modal" data-bs-target="#updateStore-{{ $store['id'] }}"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-outline-light" title="View Store"><i class="bi bi-eye"></i></button>
                        </td>

                        @include('app.stores.update-store')
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('app.stores.register-store')

@endsection