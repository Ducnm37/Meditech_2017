<?php
/*
KVM-VDI
Tadas Ustinavičius

Vilnius,Lithuania.
2017-06-06
*/
include ('functions/config.php');
require_once('functions/functions.php');
if (!check_session()){
    header ("Location: $serviceurl/?error=1");
    exit;
}
slash_vars();
set_lang();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script src="inc/js/kvm-vdi.js"></script>
</head>
<body>
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?php echo _("Add new pool");?></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" class="form-control col-md-1" placeholder="<?php echo _("Name");?>" name="poolname" id="poolname">
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _("Close");?></button>
            <button type="button" class="btn btn-primary" id="AddPoolButton"><?php echo _("Save changes");?></button>
        </div>
    </div>
</body>
</html>