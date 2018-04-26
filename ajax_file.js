/* 
 * ajax file for the on page updations
 * Developer : imtalal
 */

$(document).ready(function () {
    // for circle
    $('#radCalculate').click(function () {

        var radius = $("#radID").val();
        if (radius == "") {
            $('#radCalculate').html("Input required");
        }
        if ( radius !== "") {
            $.post("areaofcircle.php", {radius: radius}, function (data) {
                $('#radCalculate').html(data);

            }); //end post
        }
    });

    // for rectangle
    $('#recCalculate').click(function () {
        var length = $("#lenID").val();
        var width = $("#widID").val();
        if (length == "" && width == "") {
            $('#recCalculate').html("Input required");
        }
        if (length == "" && width !== "" && !isNaN(width) ) {
            $('#recCalculate').html("$0");
        }
        if (length !== "" && width == "" && !isNaN(length) ) {
            $('#recCalculate').html("$0");
        }
        if( isNaN(length) || isNaN(width) ){
            $('#recCalculate').html("Please input number only");
        }
        if ( length !== "" && width !== "" ) {
            $.post("areaofrectangle.php", {length: length, width: width}, function (data) {
                $('#recCalculate').html(data);

            }); //end post
        }
    });
    // for triangle
    $('#triCalculate').click(function () {
        var height = $("#heiID").val();
        var base = $("#baseID").val();
        if ( height == "" && base == "" ) {
            $('#triCalculate').html("Input required");
        }
        if ( height == "" && base !== "" && !isNaN(base) ) {
            $('#triCalculate').html("$0");
        }
        if ( height !== "" && base == "" && !isNaN(height) ) {
            $('#triCalculate').html("$0");
        }
        if( isNaN(height) || isNaN(base) ){
            $('#triCalculate').html("Please input number only");
        }
        if ( height !== "" && base !== "" ) {
            $.post("areaoftriangle.php", {height: height, base: base}, function (data) {
                $('#triCalculate').html(data);

            }); //end post
        }
    });

});