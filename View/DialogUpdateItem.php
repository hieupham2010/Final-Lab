<div class="modal fade" id="UpdateItem<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLongTitle">Update Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../Handle/UpdateItemProcess" method="POST">
                    <div class="text-left" style="font-size: 20px;">
                        <label class="font-weight-bold" for="Quantity">Quantity</label>
                        <input class="form-control" name="Quantity" type="number" min="0" max="100" value="<?php echo $row["Quantity"] ?>">
                    </div>
                    <input type="hidden" name="UserID" value="<?php echo $row["UserID"] ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary pl-4 pr-4 font-weight-bold">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>