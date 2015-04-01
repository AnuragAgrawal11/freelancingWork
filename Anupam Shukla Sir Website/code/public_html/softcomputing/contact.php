        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head PROFILE="../../../../gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Real Life Applications of Soft Computing</title><meta name="keywords" content="Real Life Application of Soft Computing, real life application of soft computing," /><meta name="keywords" content="Real Life Application of Soft Computing, real life application of soft computing," />

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
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<div id="outer">
	
  <div id="inner">
	
		<div id="mainTop">&nbsp;</div>	
		
		<div id="header">
		
			<div class="content">
			
				<div id="logo">
			
					<div align="center"><a class="title" HREF="index.php"> 
					  
					  <img alt="Caulk Logo" SRC="images/11.jpg" />					</a> </div>
				</div>	
                
                <div align="center">
                  <!-- begin menu 2 -->
                  
                </div>
                <div id="menu" class="menu">
                
                	<div align="center">
                	  <ul>
                	    
                	    <li ><a HREF="index.php">Home</a></li>
                	    <li><a HREF="portfolio.php">Download&nbsp; ppts</a></li>
                	    <li><a HREF="source_code.php">Source Codes</a></li>
                	    <li class="current-cat"><a HREF="contact.php">Contact</a></li>
              	    </ul>
              	  </div>
                </div>
                
                <div align="center">
                  <!-- end menu 2 -->
                    </div>
			</div>
		</div>        
        <div align="center"><img alt="maintop" class="featured-top" SRC="images/featuredtop-grey.jpg" />
          
        </div>
        <div id="sub-strapline">
        
        	<div class="content">
            
            	<div class="floatleft">

                	<div align="center"><img alt="Contact" SRC="images/contact.png" />                </div>
            	</div>
                
                <div class="floatright">
            
                    <h3 align="center">Real Life Applications Of Soft Computing</h3>
                </div>
            </div>
            
            <div align="center"><br class="clearer" />
                </div>
        </div>
	
		<div id="main" class="subpage1">	
			
			<div class="content">
				
				<div id="leftpanel">
				
                	<div align="center"><img alt="Contact Tagline" SRC="images/contacttagline.png" />
                	  
              	  </div>
                	<div class="panel">
                    
                        <div class="thumbnail">
                        
                            <div align="center"><img SRC="images/AS1.jpg" alt="Chat" width="118" height="138" /><br />
                                <br />
                            </div>
                      </div>
                        
                   	  <p align="justify"><strong>Anupam Shukla</strong> is an Associate Professor in the IT Department of ABV-Indian Institute of Information Technology and Management Gwalior. He has 22 years of teaching experience. His research interest includes Speech processing, Artificial Intelligence, Soft Computing, Medical Expert System and Bioinformatics.<br />
                   	    <strong>E-mail</strong>:
                        <em>dranupamshukla@gmail.com;  

anupamshukla@iiitm.ac.in</em></p>
                      
              
                      	<div class="thumbnail">
                        
                            <div align="justify"><img alt="Chat" SRC="images/RT.jpg" width="116" height="145" />            </div>
                      	</div>
                        
                   	  <p align="justify"><strong> Ritu Tiwari</strong> is an Assistant Professor in the ICT Department of the institute. She has 08 years of teaching experience. Her field of research includes Biometrics, Artificial Neural Networks, Signal Processing, Robotics and Soft Computing. She has published around 20 papers in various national and international journals/conferences. She is referee for an international journal of Digital Signal Processing by Elsevier.<br />
                          <strong>E-mail:</strong><em> ritutiwari@iiitm.ac.in</em></p>
						<div class="thumbnail">
                        
                            <div align="justify"><img SRC="images/high.JPG" alt="Chat" width="117" height="146" /></div>
						</div>
                        
                   	  <p align="justify"><strong>Mr.Rahul Kala</strong> has post graduated from Indian Institute of Information Technology and Management Gwalior.His research interest includes Hybrid and Adaptive Computing,Robotic Path Planning, Biometrics, Pattern Recognition and Classification, Open Source.He has published a number of international and national papers.<br />
                          <strong>E-mail: </strong><em>rahulkalaiiitm@yahoo.co.in
                          </em></p>
                       </p>
                        
                        <div align="justify"><br />
                          <br />
                          
                          
                        </div>
                        <div id="contact">
                        
                        	<div align="center">
                        	  <!-- NOTE, since there are two contact forms (this one and quick contact)
                            all of the elements are named with a "2" appended in this contact form
                            so they are distinguished with the one in the footer. -->
                   	      </div>
                        </div>
                        
                        
                        <div align="center"><br class="clearer" />
                      </div>
                	</div>
				</div>
				
				<div id="rightpanel">
                
                	<div class="thumbnail">
                    
                    	<div align="center"><img alt="Clock" SRC="images/clock.png" />                    </div>
                	</div>
                    
                  <div class="panel">
                    
                    	<h3 align="center">Mailing Address</h3>
                    
                    	                      
                        <div align="justify"><b>Dr. Anupam Shukla</b><br />                        
                        ABV-IIITM, Morena Link Road,
                          <br />                        
                       Gwalior, (M.P) India. <br />
PIN: 474010.<br />
Mail: dranupamshukla@gmail.com<br />
anupamshukla@iiitm.ac.in<br />
<br />


<b>Dr. Ritu Tiwari</b><br />                        
                        ABV-IIITM, Morena Link Road,
                        <br />                        
                       Gwalior, (M.P) India.<br />
 PIN: 474010.<br />
Mail id :  ritutiwari@iiitm.ac.in<br/>
<br/>

<b>Mr. Rahul Kala</b><br />                        
                        ABV-IIITM, Morena Link Road,
                        <br />                        
                       Gwalior, (M.P) India.<br />
 PIN: 474010.<br />
Mail id :  ritutiwari@iiitm.ac.in


                        
                        <br class="clearer" />
                        </div>
                    </div>
                    
                    <div class="clearer20">&nbsp;</div>
                    
                    <div class="clearer20">&nbsp;</div>
                    
                    <div class="thumbnail">
                    
                    	<div align="center"><img alt="Email" SRC="images/email.png" />                    </div>
                    </div>
                    
                  <div class="panel">
                    
                    	<h3 align="center"><u>Book Details</u></h3>
                        <div align="justify"><strong>Name</strong> : Real Life Applications of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soft Computing <br />
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
                    </div>
                    
                    <div class="clearer20">&nbsp;</div>
                    
                    <div class="clearer20">&nbsp;</div>
				</div>
                
                <div align="center"><br class="clearer" />
                    </div>
			</div>
            
						<div id="footer">
            
            	<div align="center">
            	  <!-- BEGIN FOOTER LEFT PANEL -->
            	  
          	  </div>
            	<div class="widget">
                
                    <div class="header">
                
                        <div align="center"><img alt="Archives" SRC="images/44.jpg" />                    </div>
                    </div>
                    
                    <div class="content rightmost">
					<h3 align="justify">Download The Source Codes</h3>
                        
                        <p align="justify" style="font-size:13px"><a href="codes/back popagation algorithm.zip">&raquo;&nbsp;Back Popagation Algorithm</a><br />

						 <a href="codes/character recognition.zip">&raquo;&nbsp;Character Recognition</a><br />
						  <a href="codes/ensemble.zip">Ensemble</a><br />
						   <a href="codes/evolutionary neural network with connectionist architecture.zip">&raquo;&nbsp;Evolutionary Neural Network With Connectionist Architecture</a><br />
						    <a href="codes/evolutionary neural network with fixed architecture.zip">&raquo;&nbsp;Evolutionary Neural Network With Fixed Architecture</a><br />
							 <a href="codes/fuzzy inference system.zip">&raquo;&nbsp;Fuzzy Inference System</a><br />
							  <a href="codes/genetic algorithm.zip">&raquo;&nbsp;Genetic Algorithm</a><br />
							   <a href="codes/modular neural network.zip">&raquo;&nbsp;Modular Neural Network</a><br />
							   <a href="codes/robot motion by Fuzzy Inference System.zip">&raquo;&nbsp;Robot Motion By Fuzzy Inference System</a><br />
								 <a href="codes/time series analysis by neural networks.zip">&raquo;&nbsp;Time Series Analysis By Neural Networks</a><br />
								  <a href="codes/travelling salesman problem.zip">&raquo;&nbsp;Travelling Salesman Problem</a><br />
                  </div>
                </div>
                
                <div align="center">
                  <!-- END FOOTER LEFT PANEL -->
                  
                  <!-- BEGIN FOOTER MIDDLE PANEL -->
                  
                </div>
                <div class="widget">
                
                    <div class="header">
                
                        <div align="justify"><img alt="Links" SRC="images/55.jpg" />                    </div>
                    </div>
                    
                    <div class="content" id="quickcontact">
                    
                        <form name="quickcontact" action="mail.php?url=contact.php" method="post">
						
							<label for="name" id="name_label">
							<div align="justify">Name
							  </label>
							  <label class="error" for="name" id="name_error">
							*
							</label>
							<br />
							    <input type="text" name="name" id="name" />
						      <br />							
							  
						        <label for="email" id="email_label">
							Email
							</label>
							<label class="error" for="email" id="email_error">
							*
							</label>
							<br />
							    <input type="text" name="email" id="email" />
						      <br />
							  
						        <label for="message" id="message_label">
							Message
							</label>
							<label class="error" for="message" id="message_error">
							*
							</label>
							<br />
							    <textarea rows="20" cols="50" name="message" id="message"></textarea>
						      <br />
							  
						    </div>
							<div class="floatleft">							
                                <label for="verify" id="verify_label">
                                <div align="justify">What is two plus three?
                                  </label>
                                </div>
							</div>
                            <div class="floatleft">							
                                
                              <div align="justify">
                                <input type="text" name="verify" id="verify" />	
                              </div>
                            </div>
                            <div class="floatleft">						
                                <label class="error" for="verify" id="verify_error">
                                <div align="justify">*
                                  </label>
                                </div>
                            </div>  
                            <div class="spacer10">&nbsp;</div>                         
                            <div class="floatleft">							
								
							  <div align="justify">
							    <input type="submit">                          
						      </div>
                            </div>
						</form>
                    </div>
                </div>
                
                <div align="center">
                  <!-- END FOOTER MIDDLE PANEL -->                
                  
                  <!-- BEGIN FOOTER RIGHT PANEL -->
                  
                </div>
                <div class="widget">
                
                	<div class="header">
                    
                        <div align="center"><img alt="Copyright" SRC="images/66.jpg" />                    </div>
                	</div>
                    
                    <div class="content rightmost">
                        
                        <h3 align="justify">Copyright &copy; 2010</h3>
                        <div align="justify"><a title="title" HREF="http://www.crcpress.com/product/isbn/9781439822876" target="_blank">CRC press</a><br />
                        All Rights Reserved
                        
                          <br />
						</div>
                        <p align="center" style="text-align:left">
                        <h3 align="justify">Authors :</h3>
                        <div align="justify">Dr. Anupam Shukla<br/>					
                          dranupamshukla@gmail.com<br />
                          anupamshukla@iiitm.ac.in<br />
                          <br />
                          Dr. Ritu Tiwari<br/>
                          ritutiwari@iiitm.ac.in<br/>
                          <br />
                          
                          Rahul Kala<br/>
                          rahulkalaiiitm@yahoo.co.in
                          </p>
                      </div>
                    </div>
				</div>
                
                <div align="center">
                  <!-- END FOOTER RIGHT PANEL -->
                  
                </div>
                <div class="clearer">&nbsp;</div>			
			</div>
            
            <div class="clearer">&nbsp;</div>
		</div>
		
		<div align="center"><span class="style1">Dssigned by Anurag Agrawal (<em>agrawal.anu90@gmail.com</em>), Sanjay Kumar (<em>rockingsanjay90@gmail.com</em>) (ABV-IIITM)</span></div>
  </div>
		
</div>
	
</body>
</html>