/*Sag Content Scroller (Aug 7th, 2010)
* This notice must stay intact for usage 
* Author: Dynamic Drive at http://www.dynamicdrive.com/
* Visit http://www.dynamicdrive.com/ for full source code
*/


var sagscroller_constants={
	navpanel: {height:'16px', downarrow:'down.gif', opacity:0.6, title:'Go to Next Content', background:'black'},
	loadingimg: {src:'ajaxloading.gif', dimensions:[100,15]}
}

function sagscroller(options){

	this.setting={mode:'manual', pause:3000, animatespeed:500, ajaxsource:null, navpanel:{show:true, cancelauto:false}} //default settings
	jQuery.extend(this.setting, options) //merge default settings with options
	options=null
	this.curmsg=0
	this.addloadingpanel(jQuery, 'preload')
	var slider=this
	jQuery(function($){ //on document.ready
		slider.$slider=$('#'+slider.setting.id)
		slider.addloadingpanel(jQuery, 'show')
		if (slider.setting.ajaxsource)
			slider.getajaxul(slider.setting.ajaxsource)
		else
			$(window).load(function(){slider.init($)})
	})
}

sagscroller.prototype={

	getajaxul:function(path){
		var $=jQuery, slider=this
		this.stopscroll() //stop animation/ scrolling of slider, in the event this is a subsequent call to getajaxul()
		this.$loadingpanel.show()
		$.ajax({
			url: path, //path to external content
			async: true,
			error:function(ajaxrequest){
				slider.$slider.html('Error fetching content.<br />Server Response: '+ajaxrequest.responseText)
			},
			success:function(content){
				slider.ulheight=null
				slider.curmsg=0;
				slider.$slider.html(content)
				slider.init($)
			}
		})
	},

	addloadingpanel:function($, mode){
		var loadingimgref=sagscroller_constants.loadingimg
		if (mode=="preload"){
			var loadingimg=new Image(loadingimgref.dimensions[0], loadingimgref.dimensions[1])
			loadingimg.src=loadingimgref.src
			this.$loadingimg=$(loadingimg).css({position:'absolute', zIndex:1003})
		}
		else{
			var sliderdimensions=[this.$slider.width(), this.$slider.height()]
			var $loadingpanel=$('<div />').css({position:'absolute', left:0, top:0, background:'black', opacity:0.5, width:sliderdimensions[0], height:sliderdimensions[1], zIndex:1002}).appendTo(this.$slider)
			this.$loadingimg.css({left:sliderdimensions[0]/2-loadingimgref.dimensions[0]/2, top:sliderdimensions[1]/2-loadingimgref.dimensions[1]/2}).appendTo(this.$slider)
			this.$loadingpanel=$loadingpanel.add(this.$loadingimg)
		}
	},

	addnavpanel:function(){
		var slider=this, setting=this.setting
		var $navpanel=$('<div class="sliderdesc"><div class="sliderdescbg"></div><div class="sliderdescfg"><div class="sliderdesctext"></div></div></div>')
			.css({position:'absolute', width:'100%', left:0, top:-1000, zIndex:'1001'})
			.find('div').css({position:'absolute', left:0, top:0, width:'100%'})
			.eq(0).css({background:sagscroller_constants.navpanel.background, opacity:sagscroller_constants.navpanel.opacity}).end() //"sliderdescbg" div
			.eq(1).css({color:'white'}).end() //"sliderdescfg" div
			.eq(2).css({textAlign:'center', cursor:'pointer', paddingTop:'2px'}).html('<img src="'+sagscroller_constants.navpanel.downarrow+'"/>').end().end()
			.appendTo(this.$slider)
		var $descpanel=$navpanel.find('div.sliderdesctext').attr('title', sagscroller_constants.navpanel.title).click(function(){ //action when nav bar is clicked on
			slider.stopscroll()
			slider.scrollmsg(setting.mode=="auto" && !setting.navpanel.cancelauto? true : false)
		})
		$navpanel.css({top:this.$slider.height()-parseInt(sagscroller_constants.navpanel.height), height:sagscroller_constants.navpanel.height}).find('div').css({height:'100%'})
	},

	resetuls:function(){ //function to swap between primary and secondary ul
		var $tempul=this.$mainul
		this.$mainul=this.$secul.css({zIndex:1000})
		this.$secul=$tempul.css({zIndex:999})
		this.$secul.css('top', this.ulheight)
	},

	setgetoffset:function($li){
		if (this.curmsg==this.$lis.length)
			return (!this.ulheight || this.setting.ajaxsource)? this.ulheight=this.$mainul.height() : this.ulheight
		else{
			if (!$li.data('toppos') || this.setting.ajaxsource)
				$li.data('toppos', $li.position().top)
			return $li.data('toppos')
		}
	},

	scrollmsg:function(repeat){
		var slider=this, setting=this.setting
		var ulheight=this.ulheight || this.$mainul.height()
		var endpoint=-this.setgetoffset(this.$lis.eq(this.curmsg))
		this.$mainul.animate({top: endpoint}, setting.animatespeed, function(){
			slider.curmsg=(slider.curmsg<slider.$lis.length+1)? slider.curmsg+1 : 0
			if (slider.curmsg==slider.$lis.length+1){ //if at end of UL
				slider.resetuls() //swap between main and sec UL
				slider.curmsg=1
			}
			if (repeat)
				slider.scrolltimer=setTimeout(function(){slider.scrollmsg(repeat)}, setting.pause)
		})
		var secendpoint=endpoint+ulheight
		this.$secul.animate({top: secendpoint}, setting.animatespeed)
	},

	stopscroll:function(){
		if (this.$mainul){
			this.$mainul.add(this.$secul).stop(true, false)
			clearTimeout(this.scrolltimer)
		}
	},

	init:function($){
		var setting=this.setting
		this.$loadingpanel.hide()
		this.$mainul=this.$slider.find('ul:eq(0)').css({zIndex:1000})
		this.$lis=this.$mainul.find('li')
		if (setting.navpanel.show)
			this.addnavpanel()
		this.$secul=this.$mainul.clone().css({top:this.$mainul.height(), zIndex:999}).appendTo(this.$slider) //create sec UL and add it to the end of main UL
		this.scrollmsg(setting.mode=="auto")
	}
}