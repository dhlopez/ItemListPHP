/**
 * Created by Casa on 17/05/2017.
 */

$(document).ready(function() {
    $("#btnSaveMeasure").click(function() {
        var mesDesc = $("#txtNewMeasure").val();
        $.post("queries/saveMeasure.php", {mesDesc: mesDesc});
    });
});
