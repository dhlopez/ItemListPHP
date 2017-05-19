/**
 * Created by Casa on 17/05/2017.
 */


$(document).ready(function() {
    FillIndexMeasure();
    FillModalMeasure();
    //update the new item modal when it displays
    $('#newItem').on('shown.bs.modal', function (e) {
        FillModalMeasure();
    });
    //update index measure select after closing the new measure modal
    $('#newMeasure').on('hidden.bs.modal', function (e) {
        FillIndexMeasure();
    });
});

function FillIndexMeasure()
{
    $.post( "queries/loadMeasure.php", function( data ) {
        //index
        $('#selectMeasure').empty().append('<option value="-1">Please select Measure</option>');
        $( "#selectMeasure" ).append( data );
    });
}

function FillModalMeasure()
{
    $.post("queries/loadMeasure.php", function( data ) {
        //modal
        $( "#selectExistingMeasure" ).empty().append('<option value="-1">Please select a default measure</option>');
        $( "#selectExistingMeasure" ).append( data );
    });
}