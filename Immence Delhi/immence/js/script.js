//home page slider

	$(document).ready(function(){
		var slider_area;
		var slider_buttons;
		if ($('#slider_2_area').length>0)
		{
				slider_area="#slider_2_area";
				slider_buttons="#numbers_2";
		}else{
				slider_area="#slider_area";	
				slider_buttons="#numbers";
		}

		$(slider_area).cycle({ 
			fx:     'fade', 
			easing: 'backout', 
			timeout: 4000, 
			pager:  slider_buttons, 
			cleartype:  1,
			pagerAnchorBuilder: function(idx) { 
				return '<li><a href="#" title="">&nbsp;</a></li>'; 
			} 
		});
	});



//pretty photo
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});

//navigation
	$(document).ready(function(){
			ddsmoothmenu.init({
				mainmenuid: "dropdown_menu", //menu DIV id
				orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
				classname: 'dropdown', //class added to menu's outer DIV
				//customtheme: ["#1c5a80", "#18374a"],
				contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
			})
 	});

//image effects 
	$(document).ready(function(){
			var image_e= $(".image.portfolio, .image.product_image");
			image_e.mouseover(function(){$(this).stop().animate({ opacity:0.6
					}, 400);
			}).mouseout(function(){
				image_e.stop().animate({ 
					opacity:1
					}, 400 );
			});
	});

	
	$(document).ready(function(){
			var panel_count= $("#sm li").size();
			var title_size=30;
			var onclick = true;
			var max_panel_size=940-(title_size*panel_count-title_size+panel_count);
			slideMenu.build('sm',max_panel_size,10,10,1);
	});


//Accordion Slider
var slideMenu=function(){
	var sp,st,t,m,sa,l,w,sw,ot;
	return{
		build:function(sm,sw,mt,s,sl,h){
			sp=s; st=sw; t=mt;
			m=document.getElementById(sm);
			if (m){
			
			sa=m.getElementsByTagName('li');
			l=sa.length; w=m.offsetWidth; sw=w/l;
			ot=Math.floor((w-st)/(l-1)); var i=0;
			for(i;i<l;i++){s=sa[i]; s.style.width=sw+'px'; this.timer(s)}
			if(sl!=null){m.timer=setInterval(function(){slideMenu.slide(sa[sl-1])},t)}
			}
		},
		timer:function(s){
						s.onmouseover=function(){clearInterval(m.timer);m.timer=setInterval(function(){slideMenu.slide(s)},t)}

		},
		slide:function(s){
			var cw=parseInt(s.style.width,'10');
			if(cw<st){
				var owt=0; var i=0;
				for(i;i<l;i++){
					if(sa[i]!=s){
						var o,ow; var oi=0; o=sa[i]; ow=parseInt(o.style.width,'10');
						if(ow>ot){oi=Math.floor((ow-ot)/sp); oi=(oi>0)?oi:1; o.style.width=(ow-oi)+'px'}
						owt=owt+(ow-oi)}}
				s.style.width=(w-owt)+'px';
			}else{clearInterval(m.timer)}
		}
	};
}();

//validate contact form
	  $(document).ready(function(){
		  jQuery.validator.messages.required = "";
			$("#validate_form").validate({});
	  });


//add text shadow
   $(document).ready(function() {
	   $(".shadow").css({'text-shadow' : '1px 1px #fff'});
    });

//ie8 fix - remove passive horizontal scrollbar ie8
   $(document).ready(function() {
	   $("body").css({'overflow-x' : 'hidden'});
    });
    