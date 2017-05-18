/**
 * Created by Casa on 17/05/2017.
 */

$(document).ready(function() {
    $("#btnSaveItem").click(function() {
        var mesDesc = $("#txtNewItem").val();
        $.post("queries/saveMeasure.php", {mesDesc: mesDesc}, function (data, textStatus) {
            console.info(data);
            console.info(textStatus);
        });
        /*$('#createStation').on('shown.bs.modal', function (e) {
         modalLoaded = true;
         google.maps.event.trigger($('#googleMap2')[0], 'resize');
         myMap();
         });
         $('#createStation').on('hidden.bs.modal', function (e) {
         modalLoaded = false;
         myMap();
         });
         */
    });
});
