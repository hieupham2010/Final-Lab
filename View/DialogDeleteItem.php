<div class="modal fade" id="DeleteItem<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLongTitle">Delete Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-left font-weight-bold" style="font-size: 20px;">Are you sure remove this item?</p>
                <form action="../Handle/DeleteItemProcess" method="POST">
                    <input type="hidden" name="ProductID" value="<?php echo $rowProduct["ProductID"] ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary pl-4 pr-4 font-weight-bold">Remove</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>