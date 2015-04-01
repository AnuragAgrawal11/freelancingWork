        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head PROFILE="../../../../gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>dESiGNERz-CREW.iNFO Caulk - Website Template</title>

<!-- begin style -->

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<link rel="stylesheet" href="style/background-light.css" type="text/css" media="screen" />

<link rel="stylesheet" href="style/colors-grey.css" type="text/css" media="screen" />

<!-- styles the twitter panel -->
<link rel="stylesheet" type="text/css" href="js/jquery.twitter.css" media="screen" />
<!-- end style-->

<!-- begin javascript -->

<script type="text/javascript" SRC="js/jquery.tools.min.js"></script>
<script type="text/javascript" SRC="js/jquery.easing.1.2.js"></script>
<script type="text/javascript" SRC="js/jquery.anythingslider.js" charset="utf-8"></script>
<script type="text/javascript" SRC="js/jquery.twitter.js"></script>
<script type="text/javascript" SRC="js/cycle.js"></script>
<script type="text/javascript" SRC="js/quickcontactform.js"></script>
<script type="text/javascript" SRC="js/contactform.js"></script>

<script type="text/javascript">

    function formatText(index, panel) {
      return index + "";
    }

    $(function () {
    
        $('.anythingSlider').anythingSlider({
            easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
            autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
            delay: 3000,                    // How long between slide transitions in AutoPlay mode
            startStopped: false,            // If autoPlay is on, this can force it to start stopped
            animationTime: 800,             // How long the slide transition takes
            hashTags: true,                 // Should links change the hashtag in the URL?
            buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
            pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
            startText: "Go",             // Start text
            stopText: "Stop",               // Stop text
            navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
        });
        
        $("#slide-jump").click(function(){
            $('.anythingSlider').anythingSlider(6); //not used
        });
        
        $('.anythingSlider2').anythingSlider({
            easing: "easeInOutBack",        // Anything other than "linear" or "swing" requires the easing plugin
            autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
            delay: 3000,                    // How long between slide transitions in AutoPlay mode
            startStopped: false,            // If autoPlay is on, this can force it to start stopped
            animationTime: 1500,             // How long the slide transition takes
            hashTags: false,                 // Should links change the hashtag in the URL?
            buildNavigation: false,          // If true, builds and list of anchor links to link to each slide
            pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
            startText: "Go",             // Start text
            stopText: "Stop",               // Stop text
            navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
        });
        
    });
    $(document).ready(function() {                
        $("#twitter").getTwitter({
            userName: "outerspice", //adjust this in the theme options page
            numTweets: 3, //number of Tweets to show
            loaderText: "Loading-2520tweets..-2E", //text that displays while Tweets are first loading
            slideIn: true, //when Tweets load, how should they appear
            slideDuration: 1000, //not used
            showHeading: false, //shows the heading
            headingText: "Latest Tweets", //the heading text
            showProfileLink: true, //show your Tweet profile link at the bottom of your Latest Tweets?
            showTimestamp: true //show timestamps for each Tweet?
        });
		$('#testimonials').cycle({
			fx: 'scrollDown',
			speed:    1500, 
			timeout:  4000
			//fx:     'scrollDown', 
			//speedIn:  2000, 
			//speedOut: 500, 
			//easeIn:  'bounceout', 
			//easeOut: 'backin', 
			//delay:   -2000 
		});				
    });
</script>

<script type="text/javascript" SRC="js/scrollinit.js"></script>
	
<!-- end javascript -->

</head>

<body>

<div id="outer">
	
	<div id="inner">
	
		<div id="mainTop">&nbsp;</div>	
		
		<div id="header">
		
			<div class="content">
			
				<div id="logo">
			
					<a class="title" HREF="index.php"> 
                                       	
						<img alt="Caulk Logo" SRC="images/caulk_logo.gif" /> 
                                                  
					</a>
					
				</div>	
                
                <!-- begin menu 2 -->
                
                <div id="menu" class="menu">
                
                	<ul>
                
                		<li class="current-cat"><a HREF="index.php">Home</a></li>
                        
                        <li><a HREF="portfolio.php">Download&nbsp; ppts</a></li>
                        
                       
                        
                        
                        
                        <li><a HREF="contact.php">Contact&nbsp; Authors</a></li>
                    
                    </ul>
                
                </div>
                
                <!-- end menu 2 -->
			
			</div>
		
		</div>        
        <img alt="maintop" class="featured-top" SRC="images/featuredtop-grey.jpg" />
        
       	<div id="sub-strapline">
        
        	<div class="content">
            
            	<div class="floatleft">

                	<img alt="Contact" SRC="images/contact.png" />
                
                </div>
                
                <div class="floatright">
            
                    <h3>Real Life Applications Of Soft Computing</h3>
                
                </div>
            
            </div>
            
            <br class="clearer" />
            
        </div>
	
		<div id="main" class="subpage1">	
			
			<div class="content">
				
				<div id="leftpanel">
				
                	<img alt="Contact Tagline" SRC="images/contacttagline.png" />

                    <div class="panel">
                    
                        <div class="thumbnail">
                        
                            <img alt="Chat" SRC="images/chat.png" /><br /><br />


                        
                        </div>
                        
                      	<p>Anupam Shukla is an Associate Professor in the IT Department of ABV-Indian Institute of Information Technology and Management Gwalior. He has 22 years of teaching experience. His research interest includes Speech processing, Artificial Intelligence, Soft Computing, Medical Expert System and Bioinformatics.<br />
<br />
</p>
						<div class="thumbnail">
                        
                            <img alt="Chat" SRC="images/RT.jpg" width="130" height="158" />


                        
                        </div>
                        
                      	<p>Dr. Ritu Tiwari is an Assistant Professor in the ICT Department of the institute. She has 08 years of teaching experience. Her field of research includes Biometrics, Artificial Neural Networks, Signal Processing, Robotics and Soft Computing. She has published around 20 papers in various national and international journals/conferences. She is referee for an international journal of Digital Signal Processing by Elsevier.</p>
						<div class="thumbnail">
                        
                            <img alt="Chat" SRC="images/chat.png" />
                        
                        </div>
                        
                      	<p>Mr.Rahul Kala has post graduated from Indian Institute of Information Technology and Management Gwalior.His research interest includes Hybrid and Adaptive Computing,Robotic Path Planning, Biometrics, Pattern Recognition and Classification, Open Source.He has published a number of international and national papers.
 </p>
                        
                        <br /><br />

                        
                        <div id="contact">
                        
                        	<!-- NOTE, since there are two contact forms (this one and quick contact)
                            all of the elements are named with a "2" appended in this contact form
                            so they are distinguished with the one in the footer. -->
                        
                            
                        
                        </div>
                        
                        
                        <br class="clearer" />
    
                    </div>
					
				</div>
				
				<div id="rightpanel">
                
                	<div class="thumbnail">
                    
                    	<img alt="Clock" SRC="images/clock.png" />
                        
                    </div>
                    
                    <div class="panel">
                    
                    	<h3>Mailing Address</h3>
                    
                    	                      
                        <b>Dr. Anupam Shukla
</b><br />                        
                        ABV-IIITM, Morena Link Road,
<br />                        
                       Gwalior, (M.P) India. <br />
PIN: 474010.<br />
Mail id : dranupamshukla@gmail.com<br />
anupamshukla@iiitm.ac.in<br /><br />


<b>Dr. Ritu Tiwari
</b><br />                        
                        ABV-IIITM, Morena Link Road,
<br />                        
                       Gwalior, (M.P) India.<br />
 PIN: 474010.<br />
Mail id :  ritutiwari@iiitm.ac.in<br/><br/>

<b>Mr. Rahul Kala
</b><br />                        
                        ABV-IIITM, Morena Link Road,
<br />                        
                       Gwalior, (M.P) India.<br />
 PIN: 474010.<br />
Mail id :  ritutiwari@iiitm.ac.in


                        
                        <br class="clearer" />
    
                    </div>
                    
                    <div class="clearer20">&nbsp;</div>
                    
                    <div class="clearer20">&nbsp;</div>
                    
                    <div class="thumbnail">
                    
                    	<img alt="Email" SRC="images/email.png" />
                        
                    </div>
                    
                    <div class="panel">
                    
                    	<h3><u>Book Details</u></h3>
                    <strong>Name</strong> : Real Life Applications of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soft Computing  <br />
					<strong>Authors</strong> :Dr. Anupam Shukla; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr. Ritu Tiwari; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rahul Kala.<br />
					<strong>Price</strong>:&nbsp;&nbsp;&nbsp;&nbsp; $116.96<br />
					<strong>Cat.</strong> #: &nbsp;&nbsp;&nbsp;K11169<br />
					<strong>ISBN</strong>: &nbsp;&nbsp;&nbsp; 9781439822876<br />
					<strong>ISBN 10</strong>:&nbsp;1439822875<br />
					<strong>Publication Date</strong>:  May 21,2010<br />
					<strong>Number of Pages</strong>:  686<br />
					<strong>Binding(s)</strong>:  Hardback 
                        <br class="clearer" />
    
                    </div>
                    
                    <div class="clearer20">&nbsp;</div>
                    
                    <div class="clearer20">&nbsp;</div>
                    
                    
                    
                    
                    
									
				</div>
                
                <br class="clearer" />
				
			</div>
            
						<div id="footer">
            
            	<!-- BEGIN FOOTER LEFT PANEL -->
            
                <div class="widget">
                
                    <div class="header">
                
                        <img alt="Archives" SRC="images/44.jpg" />
                        
                    </div>
                    
                    <div class="content rightmost">
					<h3>Download The Source Codes</h3>
                        
                        <p style="font-size:13px"><a href="codes/back popagation algorithm.zip">Back Popagation Algorithm</a><br />

						 <a href="codes/character recognition.zip">Character Recognition</a><br />
						  <a href="codes/ensemble.zip">Ensemble</a><br />
						   <a href="codes/evolutionary neural network with connectionist architecture.zip">Evolutionary Neural Network With Connectionist Architecture</a><br />
						    <a href="codes/evolutionary neural network with fixed architecture.zip">Evolutionary Neural Network With Fixed Architecture</a><br />
							 <a href="codes/fuzzy inference system.zip">Fuzzy Inference System</a><br />
							  <a href="codes/genetic algorithm.zip">Genetic Algorithm</a><br />
							   <a href="codes/modular neural network.zip">Modular Neural Network</a><br />
							   <a href="codes/robot motion by Fuzzy Inference System.zip">Robot Motion By Fuzzy Inference System</a><br />
								 <a href="codes/time series analysis by neural networks.zip">Time Series Analysis By Neural Networks</a><br />
								  <a href="codes/travelling salesman problem.zip">Travelling Salesman Problem</a><br />
						
                                                 
                    </div>
                
                </div>
                
                <!-- END FOOTER LEFT PANEL -->
                
                <!-- BEGIN FOOTER MIDDLE PANEL -->
        
                <div class="widget">
                
                    <div class="header">
                
                        <img alt="Links" SRC="images/55.jpg" />
                        
                    </div>
                    
                    <div class="content" id="quickcontact">
                    
                        <form name="quickcontact" action="mail.php?url=index.php" method="post">
						
							<label for="name" id="name_label">Name</label>
							<label class="error" for="name" id="name_error">*</label><br />
							<input type="text" name="name" id="name" /><br />							
							
							<label for="email" id="email_label">Email</label>
							<label class="error" for="email" id="email_error">*</label><br />
							<input type="text" name="email" id="email" /><br />
							
							<label for="message" id="message_label">Message</label>
							<label class="error" for="message" id="message_error">*</label><br />
							<textarea rows="20" cols="50" name="message" id="message"></textarea><br />
                            
                            <div class="floatleft">							
                                <label for="verify" id="verify_label">What is two plus three?</label>
                            </div>
                            <div class="floatleft">							
                                <input type="text" name="verify" id="verify" />	
                            </div>
                            <div class="floatleft">						
                                <label class="error" for="verify" id="verify_error">*</label>
                            </div>  
                            <div class="spacer10">&nbsp;</div>                         
                            <div class="floatleft">							
								<input type="submit">                          
                            </div>
						
						</form>
                                                  
                    </div>
                
                </div>
                
                <!-- END FOOTER MIDDLE PANEL -->                
                
                <!-- BEGIN FOOTER RIGHT PANEL -->
				
				<div class="widget">
                
                	<div class="header">
                    
                        <img alt="Copyright" SRC="images/66.jpg" />
                        
                    </div>
                    
                    <div class="content rightmost">
                        
                        <h3>Copyright &copy; 2010</h3>
                        <a title="title" HREF="http://www.crcpress.com/product/isbn/9781439822876" target="_blank">CRC press</a><br />
                        All Rights Reserved
                        
                        <br />
						<p style="text-align:left">
                        <h3>Authors :</h3>
                        Dr. Anupam Shukla<br/>					
 dranupamshukla@gmail.com<br />
anupamshukla@iiitm.ac.in<br /><br />
						Dr. Ritu Tiwari<br/>
						ritutiwari@iiitm.ac.in<br/><br />

						Rahul Kala<br/>
						rahulkalaiiitm@yahoo.co.in
						</p>
                                                  
                    </div>
									
				</div>
                
                <!-- END FOOTER RIGHT PANEL -->
				
				<div class="clearer">&nbsp;</div>			
				
			</div>
            
            <div class="clearer">&nbsp;</div>
		
		</div>
		
		<div id="mainBottom">&nbsp;</div>
		
	</div>
	
</div>

</body>
</html>