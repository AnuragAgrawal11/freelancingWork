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
                                       	
						<img alt="Caulk Logo" SRC="images/11.jpg" /> 
                                                  
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
        
       	        <div id="featured">
        
 			<div id="featured_left" class="anythingSlider"> <!-- BEGIN AnythingSlider -->	
            
            	<img alt="Featured Article" SRC="images/featuredheader.png" />
        
                <div class="wrapper">
                
                    <ul>
                    
                        <!-- BEGIN FEATURED AREA -->
                        <!-- anything inside each li tag will get rotated -->
                        
                        <!-- BEGIN PANEL 1 -->

                        <li> 
                        
                        	<a title="Portfolio" HREF="portfolio.php"> 
                        
                            	<img alt="Premium Design" SRC="images/99.png" /> 
                                
                            </a>                 
                                         
                        </li>  
                        
                        <!-- END PANEL 1 -->
                        
                        <!-- BEGIN PANEL 2 -->
                        
                        <li> 
                        
                        	<a title="Company" HREF="company.php">
                            
                            	<img alt="Fresh Approach" SRC="images/00.png" /> 
                                
                            </a>                     
                                         
                        </li>
                        
                        <!-- END PANEL 2 -->
                        
                        <!-- BEGIN PANEL 3 -->
                        
                        <li>
                        
                        	<a title="Services" HREF="services.php">  
                        
                        		<img alt="Superior Consulting" SRC="images/88.png" /> 
                                
                            </a>
                                         
                        </li>
                        
                        <!-- END PANEL 3 -->
                        
                        <!-- BEGIN PANEL 4 -->
                        
                        <!-- you could use an image and custom text if you don't want the whole area
                        to be an image. just use the following as a template
                        
                        <li>  
                        
                            <div class="panel_left">
                            
                                <img alt="thumbnail" src="images/paint_buckett_256.png" />
                                        
                            </div>
                            
                            <div class="panel_right">
                            
                                <h1><a href="#" title="Title">Premium Design Services That Will Leave The Competition Green With Envy</a></h1>
                               
                                
                                <a href="#" title="title" class="continue">Design Services &raquo;</a>
                            
                            </div>                    
                                         
                        </li>
                        
                        -->
                        
                        <!-- END PANEL 4 -->
                    
                        <!-- END FEATURED AREA -->
                      
                    </ul> 
                           
                </div>
              
            </div> <!-- END AnythingSlider -->	
            
            <div id="featured_right">
            
            	<div class="content">
            
                    <ul>
                    
                    	<!-- BEGIN TOP RIGHT -->
                            
																
                    
                        <li onmouseover="this.style.backgroundColor='#222'" onmouseout="this.style.backgroundColor=''">
                            <a class="thumbnail" HREF="http://books.google.com/books?id=mhWxPwAACAAJ&dq=anupam+shukla&ei=cI7tS7ayKZr4lASlzIjtDA&cd=7" title="books.google.com"><img alt="thumbnail" SRC="images/google.jpg"  width="100" height="75"/></a>
                            <div>
                                <a class="title" HREF="http://books.google.com/books?id=mhWxPwAACAAJ&dq=anupam+shukla&ei=cI7tS7ayKZr4lASlzIjtDA&cd=7" title="title">Google Page</a>
                                <a HREF="contact.php">Our book at the Google Books Site.
														www.books.google.com</a>
                            </div>
                        </li>
                        
                        <li onmouseover="this.style.backgroundColor='#222'" onmouseout="this.style.backgroundColor=''">
                            <a class="thumbnail" HREF="http://www.amazon.com/Real-Life-Applications-Soft-Computing/dp/1439822875/ref=sr_1_1?ie=UTF8&s=books&qid=1273860284&sr=8-1" title="amazon.com"><img alt="thumbnail" SRC="images/ama.jpg"   width="100" height="75"/></a>
                            <div>
                                <a class="title" HREF="http://www.amazon.com/Real-Life-Applications-Soft-Computing/dp/1439822875/ref=sr_1_1?ie=UTF8&s=books&qid=1273860284&sr=8-1" title="title">Amazon.com</a>
                                <a HREF="http://www.amazon.com/Real-Life-Applications-Soft-Computing/dp/1439822875/ref=sr_1_1?ie=UTF8&s=books&qid=1273860284&sr=8-1">Buy the book directly from the famous online shopping site</a>
                            </div>
                        </li>

                        
                        <!-- END TOP RIGHT -->
                        
                    </ul>
                    
                </div>
            
            </div>
						
		</div>	
		<div id="main" class="frontpage">	
			
			<div class="content">
				
				<div id="leftpanel">
				
                	<img alt="Our Philosophy" SRC="images/22.png" />

                    <div class="panel" style="text-align:justify; font-size:12px">
					<p>                
  Rapid advancements in the application of soft computing tools and techniques have proven valuable in the development of highly scalable systems and resulted in brilliant applications, including those in biometric identification, interactive voice response systems, and data mining. Although many resources on the subject adequately cover the theoretic concepts, few provide clear insight into practical application.
 <p> Features :</p>
                    <ul>
					<li>Presents an in-depth, practical look at real-life systems</li>

					<li>Discusses various problems and issues in the application of methods</li>

					<li>Provides multi-dimensional coverage of concepts supported by references, figures, and tables </li></ul>



Filling this need, Real Life Applications of Soft Computing explains such applications, including the underlying technology and its implementation. While these systems initially seem complex, the authors clearly demonstrate how they can be modeled, designed, and implemented. Written in a manner that makes it accessible to novices, the book begins by covering the theoretical foundations of soft computing. It supplies a concise explanation of various models, principles, algorithms, tools, and techniques, including artificial neural networks, fuzzy systems, evolutionary algorithms, and hybrid algorithms. 
                        
                   
						<p>Supplying in-depth exposure to real life systems, the text provides:</p>
						<ul>
						<li>Multi-dimensional coverage supported by references, figures, and tables</li>
						<li>Warnings about common pitfalls in the implementation process, as well as detailed examinations of possible solutions</li>
						<li>A timely account of developments in various areas of application</li>
						<li>Solved examples and exercises in each chapter</li>
</ul>

 Detailing a wide range of contemporary applications, the text includes coverage of those in biometric systems, including physiological and behavioral biometrics. It also examines applications in legal threat assessment, robotic path planning, and navigation control. The authors consider fusion methods in biometrics and bioinformatics and also provide effective disease identification techniques.<br />


Complete with algorithms for robotic path planning, the book addresses character recognition and presents the picture compression technique by using a customized hybrid algorithm. The authors conclude with a discussion of parallel architecture for artificial neural networks and supply guidelines for creating and implementing effective soft computing designs.
</p>
                        
                        
                        
                        <br class="clearer" />
    
                    </div>
					
				</div>
                
                	
				
				 <div id="rightpanel">
                    
                    <div class="panel">
                        
                        <!-- BEGIN TESTIMONIALS -->
                    
                        <div id="commentsWrapper">
                        
                            <img alt="Comments top" SRC="images/commentstop.jpg" />
                            
                            <div id="recent-comments">
                        
                                <div class="content">
                                
                                	<!-- any div tag inside the testimonials div will get rotated -->
                                
                                	<div id="testimonials"  style="font-size:11px">
                                    
                                        <div>
                                            <p>
											<strong>Soft Computing Concepts</strong><br/>
											Artificial Neural Network – I<br/>
											Artificial Neural Network – II<br/>
											Fuzzy Inference Systems<br/>
											Evolutionary Algorithms<br/>
											Hybrid Systems <br/><br/>
											
											<strong>Soft Computing In Biosystems</strong><br/>
											Physiological Biometrics <br/>
											Behavioral Biometrics <br/>
											Fusion Methods in Biometrics <br/>
											Bioinformatics<br/>
											Biomedical Systems – I <br/>
											Biomedical Systems – II <br/>
											

											</p>
                                                                        
                                        </div>
                                        
                                        <div>
                                             <p>
											<strong>Soft Computing In Other Application Areas</strong><br/>
											Robotic Path Planning and Navigation Control<br/>
											Character Recognition<br/>
											Picture Learning<br/>
											Other Real Life Application <br/><br/>
											
											<strong>Soft Computing Implementation Issues</strong><br/>
											Parallel Implementation of Artificial Neural Networks <br/>
											A Guide for Problem Solving using Soft Computing <br/>
											
											
											
											
											

											</p>
                                                                                      
                                        </div>
                                        
                                        <div>
                                            <p><strong>Appendices</strong><br/>
											Appendix A: MATLAB GUI for Soft Computing  <br/>
											Appendix B: MATLAB Source Codes for Soft Computing <br/>
										    Appendix C: Book Website <br/> <br/>
											
											
											<strong>Book Details</strong><br/>
											Name : Real Life Applications Of Soft Computing<br/>
											Authors : Dr.Anupam Shukla,Dr.Ritu Tiwari,Rahul Kala<br/>
											
											Publisher:      CRC Press<br/>
											
	
											Publication Date :    May 18, 2010<br/>
											
											</p>
                                                                          
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <img alt="Comments-bottom" SRC="images/commentsbottom.jpg" />
                            
                            <br />
                            
                            
                            
                        </div>
						<div class="panel" style="background:#F3F3F3; padding:7px;" >
                    
                    	<h3><u>Book Details</u></h3>
                    <strong>Name</strong> : Real Life Applications of Soft &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computing  <br />
					<strong>Authors</strong> :Dr. Anupam Shukla; Dr. Ritu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Tiwari; Rahul Kala.<br />
					<strong>Price</strong>:&nbsp;&nbsp;&nbsp;&nbsp; $116.96<br />
					<strong>Cat.</strong> #: &nbsp;&nbsp;&nbsp;K11169<br />
					<strong>ISBN</strong>: &nbsp;&nbsp;&nbsp; 9781439822876<br />
					<strong>ISBN 10</strong>:&nbsp;1439822875<br />
					<strong>Publication Date</strong>:  May 21, 2010<br />
					<strong>Number of Pages</strong>:  686<br />
					<strong>Binding(s)</strong>:  Hardback 
                    	
                        
                        <br class="clearer" />
    
                    </div>
                        
                        <!-- END TESTIMONIALS -->
                        
                        <br class="clearer" />
    
                    </div>
									
				</div>
				
				<br class="clearer" />
                
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