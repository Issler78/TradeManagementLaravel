<div class="modal fade" id="createStore" tabindex="-1" aria-labelledby="createStoreLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-header py-0">
                <h2 id="createStoreLabel">Register Store</h2>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-4">
                        <label for="inputStore" class="form-label">Store</label>
                        <input type="text" class="form-control" id="inputStore" placeholder="Store Name">
                    </div>
                    <div class="mb-4">
                        <label for="inputPostalCode" class="form-label">Postal Code / Zip Code</label>
                        <input type="text" class="form-control" id="inputPostalCode" placeholder="Enter your store postal code">
                    </div>
                    <label for="statusStore" class="form-label">Store Status</label>
                    <select class="form-select mb-4" aria-label="Store Status" id="statusStore">
                        <option selected>Store status</option>
                        <option value="A">Active</option>
                        <option value="I">Inactive</option>
                    </select>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-outline-dark d-flex justify-content-between gap-2" title="Save Store">Save<i class="bi bi-floppy"></i></button>
                        <button type="button" class="btn btn-outline-dark d-flex justify-content-between gap-1" title="Cancel" data-bs-dismiss="modal">Cancel<i class="bi bi-chevron-bar-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>