<script>
   euEnv.imageBasePath="js/";

   var dock = new euDock();
   
   dock.setAnimation(euMOUSE,.001);
   
   dock.setScreenAlign(euRIGHT,10);
   
   dock.setBar({
        top       :{euImage:{image:""}},
        vertical  :{euImage:{image:""}},
        bottom    :{euImage:{image:""}},
        left      :{euImage:{image:""}},
        horizontal:{euImage:{image:""}},
        right     :{euImage:{image:""}}
   	});
   
   dock.setIconsOffset(1);
   
   dock.addIcon(new Array({euImage:{image:"iconsEuDock/register.png"}}),
                {link:"register.php"});	
	dock.addIcon(new Array({euImage:{image:"iconsEuDock/iiitm.png"}}),
                {link:"about_iiitm.php"});		
	dock.addIcon(new Array({euImage:{image:"iconsEuDock/info_logo.png"}}),
                {link:"about_infotsav.php"});		
   dock.addIcon(new Array({euImage:{image:"iconsEuDock/SEARCH.png"}}),
                {link:"event_chart.php"});
	dock.addIcon(new Array({euImage:{image:"iconsEuDock/hospitality.png"}}),
                {link:"hospitality.php"});
	dock.addIcon(new Array({euImage:{image:"iconsEuDock/MESSENGER.png"}}),
                {link:"core_committee.php"});			
   dock.addIcon(new Array({euImage:{image:"iconsEuDock/ADDRESSBOOK.png"}}),
                {link:"contact.php"});
   dock.addIcon(new Array({euImage:{image:"iconsEuDock/FILE.png"}}),
                {link:"sitemap.php"});
   dock.addIcon(new Array({euImage:{image:"iconsEuDock/flash.png"}}),
                {link:"http://www.infotsav.org/Flash"});
 
</script>
