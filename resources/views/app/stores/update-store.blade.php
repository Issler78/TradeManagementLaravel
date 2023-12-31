<div class="modal fade" id="updateStore-{{ $store['id'] }}" tabindex="-1" aria-labelledby="updateStoreLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header py-0">
                <h2 id="updateStoreLabel">Edit Store</h2>
            </div>
            <div class="modal-body">
                <form action="/stores" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="inputStore" class="form-label">Store</label>
                        <input type="text" class="form-control" id="inputStore" placeholder="Store Name" name="store_name" value="{{ $store['store_name'] }}">
                    </div>
                    <div class="mb-4">
                        <label for="inputPostalCode" class="form-label">Postal Code / Zip Code</label>
                        <input type="text" class="form-control" id="inputPostalCode" placeholder="Enter your store postal code" name="postal_code" value="{{ $store['postal_code'] }}">
                    </div>
                    <div class="mb-4">
                        <label for="statusStore" class="form-label">Store Status</label>
                        <select class="form-select mb-2" aria-label="Store Status" id="statusStore" name="status">
                            <option selected>Store status</option>
                            <option value="A" 
                                @if ($store['status'] == 'A')
                                    selected
                                @endif
                            >
                                Active
                            </option>
                            <option value="I"
                                @if ($store['status'] == 'I')
                                    selected
                                @endif
                            >
                                Inactive
                            </option>
                        </select>

                        @include('app.stores.delete-button')
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-outline-dark d-flex justify-content-between gap-2" title="Save Store">Save<i class="bi bi-floppy"></i></button>
                        <button type="button" class="btn btn-outline-dark d-flex justify-content-between gap-1" title="Cancel" data-bs-dismiss="modal">Cancel<i class="bi bi-chevron-bar-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>