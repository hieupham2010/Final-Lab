<?php include '../Handle/MessageProcess.php'; ?>
<div class="modal fade" id="DialogMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLongTitle"><?php echo $Title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-left font-weight-bold" style="font-size: 20px;"><?php echo $Message ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary font-weight-bold pr-4 pl-4" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>