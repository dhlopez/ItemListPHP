/**
 * Created by Casa on 17/05/2017.
 */

$.post( "queries/loadItem.php", function( data ) {
    $( "#selectItem" ).append( data );
    //console.info(data);
});