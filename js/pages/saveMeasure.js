/**
 * Created by Casa on 17/05/2017.
 */

$(document).ready(function() {
    $("#btnSaveItem").click(function() {
        var mesDesc = $("#txtNewItem").val();
        $.post("queries/saveMeasure.php", {mesDesc: mesDesc});
    });
});
