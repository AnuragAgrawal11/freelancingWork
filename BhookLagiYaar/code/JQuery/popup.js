

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery magic!
function loadPopup(){
	//loads popup only if it is disabled
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupContact").fadeIn("slow");
		popupStatus = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup(){
	//disables popup only if it is enabled
	if(popupStatus==1){
	$('#contactArea').html('');
		$("#backgroundPopup").fadeOut("slow");
		$("#popupContact").fadeOut("slow");
		popupStatus = 0;
	}
}

//centering popup
function centerPopup(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupContact").height();
	var popupWidth = $("#popupContact").width();
	//centering
	$("#popupContact").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	}).slideDown(1000);
	//only need force for IE6
	
	$("#backgroundPopup").css({
		"height": windowHeight
	});
	
}


$(document).ready(function() {
    //LOADING POPUP
    //Click the button event!
    $('a#product_detail').click(function(e) {
        e.preventDefault();
        centerPopup();
        loadPopup();
        $("#contactArea").html("<center> <img  src='../images/loading-1.gif' alt='Loading...' style='padding-top:50px;'></center>");
        $.ajax({
            type: "POST",
            data: "{'product_id':" + $(this).attr('href') + "}",
            url: "ProductList.aspx/ProductDetails",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data) {
                $("#contactArea").html("").append("<center> <table style='width:800px'><tr><td style='width:400px'><b style='font-size:25px'>" + data.d[0] + "</b></td><td rowspan=8><img src='../"+data.d[10]+"' width='400px' height='250px' alt='No Image' style='margin:10px;'/></td></tr>"
                                           + " <tr><td>Category :" + data.d[1] + "</td></tr><tr><td>Brand :" + data.d[3] + "</td></tr><tr><td>Code :" + data.d[2] + "</td></tr><tr><td>Discription :" + data.d[4] + "</td></tr> <tr><td>Created By :" + data.d[6] + "</td></tr> <tr><td>Created Date :" + data.d[7] + "</td></tr>"
                                             + "<tr><td>Modified By :" + data.d[8] + "</td></tr> <tr><td>Modified Date :" + data.d[9] + "</td></tr>  <tr><td colspan=2><b style='font-size:25px'>Summary </b></td></tr><tr><td colspan=2 style='padding-bottom:20px;'>" + data.d[5] + "</td></tr>"
                                             + "<tr><td colspan=2><b style='font-size:25px'>Featues </b></td></tr><tr><td colspan=2><table id='features' style='width:100%'><tr><td  style='width:30%'></td><td></td></tr></table></td></tr> </table></center> ");


               



            },
            error: function(result) {
                $("#contactArea").append(result.d + ' Error in loading Product Details...');
            }
        });
        //add feartues of product
        $.ajax({
            type: "POST",
            data: "{'product_id':" + $(this).attr('href') + "}",
            url: "ProductList.aspx/ProductFeatues",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data) {

                for (var i = 0; i < data.d.length; i++) {
                    $("table#features").append("<tr><td  style='width:30%'><b>" + data.d[i][0] + "</b></td><td>" + data.d[i][1] + "</td></tr>");
                }

            },
            error: function(result) {
                $("table#features").append(result.d + ' Error in loading Product Featues...');
            }
        });


    });
    $("#popupContactClose").click(function() {
        disablePopup();
    });
    //Click out event!
    $("#backgroundPopup").click(function() {
        disablePopup();
    });
    //Press Escape event!
    $(document).keypress(function(e) {
        if (e.keyCode == 27 && popupStatus == 1) {
            disablePopup();
        }
    });

});