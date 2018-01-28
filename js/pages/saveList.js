/**
 * Created by Casa on 17/05/2017.
 */

$(document).ready(function() {
    function displayMessage(div, message)
    {
        //$(div).text(message);
    }
    $("#btnSaveItemZZ").click(function() {
        var itemDesc = $("#txtNewItem").val();
        var measureid = $("#selectExistingMeasure").val();
        $.ajax({
            url: "queries/saveItem.php",  type: "POST", data: {itemDesc: itemDesc, measureid: measureid}, success: function (data) {
                console.info(data);
                if (data == "Record Inserted") {
                    displayMessage('#itemMessage', 'Success');
                    console.log("Success!");
                }
                else {
                    displayMessage('#itemMessage', 'Fail');
                    console.log("fail!");
                }
            }
        });
    });
});

