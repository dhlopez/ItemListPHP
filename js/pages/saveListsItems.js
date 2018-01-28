/**
 * Created by Casa on 17/05/2017.
 */

$(document).ready(function() {
    function displayMessage(div, message)
    {
        $(div).text(message);
    }
    $("#btnSaveListItem").click(function() {
        var itemID = $("#selectItem").find(":selected").val();
        var itemQty = $("#txtQty").val();
        var measureID = $("#selectMeasure").find(":selected").val();
        $.ajax({
            url: "queries/saveListsItems.php",  type: "POST", data: {itemID: itemID, itemQty: itemQty, measureID: measureID}, success: function (data) {
                console.info(data);
                if (data == "Record Inserted") {
                    displayMessage('#itemMessage', 'Success');
                    console.log("Success!");
                }
                else {
                    displayMessage('#itemMessage', 'Fail');
                    console.log("fail!");
                    console.log(itemID);
                    console.log(itemQty);
                    console.log(measureID);
                }
            }
        });
    });
});