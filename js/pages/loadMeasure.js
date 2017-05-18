/**
 * Created by Casa on 17/05/2017.
 */

$.post( "queries/loadMeasure.php", function( data ) {
    $( "#selectMeasure" ).append( data );
    //console.info(data);
});