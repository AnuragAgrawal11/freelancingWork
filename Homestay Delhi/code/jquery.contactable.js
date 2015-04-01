/*
 * contactable 1.2 - jQuery Ajax contact form
 *
 * Copyright (c) 2009 Philip Beel (http://www.theodin.co.uk/)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) 
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Revision: $Id: jquery.contactable.js 2009-09-24 $
 *
 */
 
//extend the plugin
(function($){

	//define the new for the plugin ans how to call it	
	$.fn.contactable = function(options) {
		//set default options  
		var defaults = {
			name: 'Name',
			email: 'Email',
			message : 'Message',
			recipient : 'test@test.co.uk',
			subject : 'A contactable message',
			recievedMsg : 'Thankyou for your message',
			notRecievedMsg : 'Sorry but your message could not be sent, try again later',
			disclaimer: 'Please feel free to get in touch, we value your feedback'
		};

		//call in the default otions
		var options = $.extend(defaults, options);
		//act upon the element that is passed into the design    
		return this.each(function(options) {
			//construct the form
			$(this).html('<div id="contactable"></div><form id="contactForm" method="" action=""><div id="loading"></div><div id="callback"></div><div class="holder"><input type="hidden" id="recipient" name="recipient" value="'+defaults.recipient+'" /><input type="hidden" id="subject" name="subject" value="'+defaults.subject+'" /><p><label for="name">Name <span class="red"> * </span></label><br /><input id="name" class="contact" name="name" /></p><p><label for="email">E-Mail <span class="red"> * </span></label><br /><input id="email" class="contact" name="email" /></p><p><label for="comment">Your Feedback <span class="red"> * </span></label><br /><textarea id="comment" name="comment" class="comment" rows="4" cols="30" ></textarea></p><p><input class="submit" type="submit" value="Send"/></p><p>'+defaults.disclaimer+'</p></div></form>');
			//show / hide function
			$('div#contactable').toggle(function() {
				$('#overlay').css({display: 'block'});
				$(this).animate({"marginLeft": "-=5px"}, "fast"); 
				$('#contactForm').animate({"marginLeft": "-=0px"}, "fast");
				$(this).animate({"marginLeft": "+=387px"}, "slow"); 
				$('#contactForm').animate({"marginLeft": "+=390px"}, "slow"); 
			}, 
			function() {
				$('#contactForm').animate({"marginLeft": "-=390px"}, "slow");
				$(this).animate({"marginLeft": "-=387px"}, "slow").animate({"marginLeft": "+=5px"}, "fast"); 
				$('#overlay').css({display: 'none'});
			});
			
			//validate the form 
			$("#contactForm").validate({
				//set the rules for the fild names
				rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					comment: {
						required: true
					}
				},
				//set messages to appear inline
				messages: {
					name: "",
					email: "",
					comment: ""
				},
				submitHandler: function() {
					$('.holder').hide();
					$('#loading').show();
					$.get('mail.php',{recipient:$('#recipient').val(), subject:$('#subject').val(), name:$('#name').val(), email:$('#email').val(), comment:$('#comment').val()},
					function(data){
						$('#loading').css({display:'none'}); 
						if( data == 'success') {
							$('#callback').show().append(defaults.recievedMsg);
						} else {
							$('#callback').show().append(defaults.notRecievedMsg);
						}
					});		
				}
			});
		});
	};
	//end the plugin call 
})(jQuery);

