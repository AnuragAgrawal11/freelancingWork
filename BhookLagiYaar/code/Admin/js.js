$(document).ready(function(){
	//show loading bar
	function showLoader(){
		$('.search-background').fadeIn(200);
	}
	//hide loading bar
	function hideLoader(){
		$('.search-background').fadeOut(200);
	};
	
	$("#paging_button li").click(function(){
		//show the loading bar
		showLoader();
		
		$("#paging_button li").css({'background-color' : ''});
		$(this).css({'background-color' : '#A5CDFA'});

		$("#content").load("data.php?page=" + this.id, hideLoader);
	});
	
	// by default first time this will execute
	$("#1").css({'background-color' : '#A5CDFA'});
	showLoader();
	$("#content").load("data.php?page=1", hideLoader);
});