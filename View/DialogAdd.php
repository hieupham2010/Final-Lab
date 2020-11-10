<div class="modal fade" id="AddProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLongTitle">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../Handle/AddProductProcess" method="POST" enctype="multipart/form-data">
                    <label for="txtName" class="font-weight-bold">Name</label>
                    <input class="form-control font-weight-bold" type="text" name="txtName" placeholder="Name" required>
                    <label for="txtPrice" class="font-weight-bold">Price</label>
                    <input class="form-control font-weight-bold" type="text" name="txtPrice" placeholder="Price" required>
                    <label for="txtDescription" class="font-weight-bold">Description</label>
                    <input class="form-control font-weight-bold" type="text" name="txtDescription" placeholder="Description" required>
                    <p class="font-weight-bold mb-2">Category</p>
                    <div class="input-group">
                        <select class="custom-select font-weight-bold" name="txtCategory" id="inputGroupSelect02">
                            <option selected value="Pizza">Pizza</option>
                            <option value="KFC">KFC</option>
                            <option value="Beverages">Beverages</option>
                            <option value="Hamburger">Hamburger</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text font-weight-bold" for="inputGroupSelect02">Category</label>
                        </div>
                    </div>
                    <p class="font-weight-bold mb-2">Image</p>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="ImageUpload" required />
                        <label class="custom-file-label text-truncate font-weight-bold" for="customFile">Choose file</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary pl-4 pr-4 font-weight-bold">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>