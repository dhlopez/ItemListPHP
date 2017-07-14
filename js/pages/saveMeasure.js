/**
 * Created by Casa on 17/05/2017.
 */

$(document).ready(function() {
    function displayMessage(div, message)
    {
        $(div).text(message);
    }
    $("#btnSaveMeasure").click(function() {
        var mesDesc = $("#txtNewMeasure").val();
        //$.post("queries/saveMeasure.php", {mesDesc: mesDesc});
        $.ajax({
            url: "queries/saveMeasure.php",  type: "POST", data: {mesDesc: mesDesc}, success: function (data) {
                console.info(data);
                if (data == "Record Inserted") {
                    displayMessage('#measureMessage', 'Success');
                    console.log("Success!");
                }
                else {
                    displayMessage('#measureMessage', 'Fail');
                    console.log("fail!");
                    console.log(data);
                }
            }
        });
    });
});
