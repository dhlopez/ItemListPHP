/**
 * Created by Casa on 17/05/2017.
 */

$(document).ready(function() {
    $("#btnSaveItem").click(function() {
        var itemDesc = $("#txtNewItem").val();
        var measureid = $("#selectExistingMeasure").val();
        $.post("queries/saveItem.php", {itemDesc: itemDesc, measureid:measureid});
    });
});
