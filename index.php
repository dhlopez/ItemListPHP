<!DOCTYPE html>
<html>
<?php
    include 'header.php';
    include 'database.php';
?>

<body>
<?php
echo "My first PHP script!";
?>
<div class="container content">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname" id="txtfname">
        <input type="submit" class="btn btn-success">

        <div class="col-xs-12 col-md-6">
            <select class="form-control" id="selectMeasure">
                <option value="-1">Please select Measure</option>
            </select>
        </div>

    </form>

    <!-- Buttons trigger for modals -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newMeasure">
        New Measure
    </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newItem">
        New Item
    </button>

</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<div class="modal fade" tabindex="-1" role="dialog" id="newItem">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Item</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="newItem col-xs-12 form-group">
                        <label class="control-label">Description</label>
                        <input type="text" class="form-control" placeholder="Please enter a Description">
                    </div>
                    <div class="newItem col-xs-12 form-group">
                        <label class="control-label">Default Measure</label>
                        <select class="form-control">
                            <option value="1">Milk</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Item</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="newMeasure">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Measure</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="newItem col-xs-12 form-group">
                        <label class="control-label">Measure</label>
                        <input type="text" class="form-control" placeholder="Ex. Kilo, Bag, Box, etc." id="txtNewItem">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnSaveItem">Save Item</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
    include 'footer.php';
?>

</body>
</html>