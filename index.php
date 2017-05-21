<!DOCTYPE html>
<html>
<?php
    include 'header.php';
    include 'database.php';
?>

<body>
<div class="container content">
    <!-- Buttons trigger for modals -->
    <div class="row">

        <div class="col-xs-12 col-md-12 form-group">
            List for <?php
                $mydate=getdate(date("U"));
                echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
            ?>
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#newMeasure">
                New Measure
            </button>
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#newItem">
                New Item
            </button>
        </div>
    </div>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <!--Name: <input type="text" name="fname" id="txtfname">
        <input type="submit" class="btn btn-success">-->
        <div class="row">
            <div class="col-xs-12 col-md-4 form-group">
                <label for="selectItem">
                    Item
                </label>
                <select class="form-control" id="selectItem">
                    <option value="-1">Please select an Item</option>
                </select>
            </div>
            <div class="col-xs-12 col-md-4 form-group">
                <label for="txtQty">
                    Quantity
                </label>
                <input class="form-control" type="text" id="txtQty"/>
            </div>
            <div class="col-xs-12 col-md-4 form-group">
                <label for="selectMeasure">
                    Measure
                </label>
                <select class="form-control" id="selectMeasure">
                </select>
            </div>

        </div>
        <div class="row btn-toolbar text-right col-xs-12">
            <div class="col-xs-9"></div>
            <div class="col-xs-1">
                <button class="btn btn-danger">
                    <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                </button>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-1">
                <button class="btn btn-warning">
                    <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </form>
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    /*$name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }*/
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
                        <input type="text" class="form-control" placeholder="Please enter a Description" id="txtNewItem">
                    </div>
                    <div class="newItem col-xs-12 form-group">
                        <label class="control-label">Default Measure</label>
                        <select class="form-control" id="selectExistingMeasure">
                        </select>
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
                        <input type="text" class="form-control" placeholder="Ex. Kilo, Bag, Box, etc." id="txtNewMeasure">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnSaveMeasure">Save Measure</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
    include 'footer.php';
?>

</body>
</html>