        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head PROFILE="../../../../gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Real Life Applications of Soft Computing</title><meta name="keywords" content="Real Life Application of Soft Computing, real life application of soft computing," /><!-- begin style -->

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
			
					<a class="title" HREF="index.php"> 
                                       	
						<img alt="Caulk Logo" SRC="images/11.jpg" /> 
                                                  
					</a>
					
				</div>	
                
                <!-- begin menu 2 -->
                
                <div id="menu" class="menu">
                
                	<ul>
                
                		<li ><a HREF="index.php">Home</a></li>
                        
                        <li class="current-cat"><a HREF="portfolio.php">Download&nbsp; ppts</a></li>
                        
                       <li><a HREF="source_code.php">Source Codes</a></li>
                        
                       <li><a HREF="authors.php">Authors</a></li>
                        
                   
                    </ul>
                
                </div>
                
                <!-- end menu 2 -->
			
			</div>
		
		</div>        
        <img alt="maintop" class="featured-top" SRC="images/featuredtop-grey.jpg" />
        
       	<div id="sub-strapline">
        
        	<div class="content">
            
            	<div class="floatleft">

                	<img alt="Portfolio" SRC="images/portfolio.png" />
                
                </div>
                
                <div class="floatright">
            
                    <h3>Real Life Applications Of Soft Computing</h3>
                
                </div>
            
            </div>
            
            <br class="clearer" />
            
        </div>
	
	  <div id="main" class="subpage2">	
			
			<div class="content">
				
				<div id="leftpanel">
				
                	<img alt="Portfolio Tagline" SRC="images/portfoliotagline copy.jpg" />

                    <div class="panel">
                    
                    	<div class="subpanel leftmost" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch1.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio1 copy.jpg" height="100px;" width="264px;" />
                            </a>
                            <p>
                        
                                1. Soft Computing Concepts                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch2.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio2 copy.jpg" height="100px;" width="264px;" />
                            </a>
                            <p>
                        
                               2. Artificial Neural Networks I                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch3.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio3 copy.jpg" height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                3. Artificial Neural Networks II                          </p>
                        </div>                        
                        
                        <br class="clearer" /><br />
                        
                        
                        
                        <div class="subpanel leftmost" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch4.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio4.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                4. Fuzzy Inference Systems                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch5.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio5 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                5. Evolutionary Algorithms                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch6.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio6 copy.jpg" height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                               6. Hybrid Systems                            </p>
                        </div>                        
                        
                        <br class="clearer" /><br />
                        
                        
                        
                        <div class="subpanel leftmost" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch7.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio7 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                7. Physiological Biometrics                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch8.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio8 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                8. Behavioural Biometrics                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch9.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio9 copy.jpg" height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                9. Fusion Methods in Biometrics                            </p>
                        </div>
						                        
												 <br class="clearer" /><br />
                        
                        
                        
                        <div class="subpanel leftmost" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch10.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio10 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                10. Bioinformatics                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch11.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio11 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                11. Biomedical Systems—I                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch12.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio12 copy.jpg" height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                12. Biomedical Systems—II                            </p>
                        </div>
						                        
												 <br class="clearer" /><br />
                        
                        
                        
                        <div class="subpanel leftmost" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch13.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio13 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                13. Soft Computing in Other Application &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Areas                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch14.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio14 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                14. Robotic Path Planning and Navigation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Control                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch15.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio15 copy.jpg" height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                15. Character Recognition                            </p>
                        </div>
						                         <br class="clearer" /><br />
                        
                        
                        
                        <div class="subpanel leftmost" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch16.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio16 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                16. Picture Learning                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch17.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio17 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                17. Other Real-Life Applications                            </p>
                        </div>
                        
                        <div class="subpanel" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch18.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio18 copy.jpg" height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                18. Parallel Implementation of Artificial Neural &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Networks                            </p>
                        </div>
						 <br class="clearer" /><br />
                        
                        
                        
                        <div class="subpanel leftmost" onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="ppt/ch19.ppt">
                            
                            <img alt="Portfolio Image" SRC="images/portfolio19 copy.jpg"  height="100px;" width="264px;"/>
                            </a>
                            <p>
                        
                                19. A Guide to Problem Solving Using Soft &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;computing                            </p>
                        </div>
						                        
                        
                        <br class="clearer" /><br />
                    </div>
				</div>
                
                <br class="clearer" />
			</div>
            
						<div id="footer">
            
            	<!-- BEGIN FOOTER LEFT PANEL -->
            
                <div class="widget">
                
                    <div class="header">
                
                        <img alt="Archives" SRC="images/44.jpg" />                    </div>
                    
                    <div class="content rightmost">
					<h3>Download The Source Codes</h3>
                        
                        <p style="font-size:13px"><a href="codes/back popagation algorithm.zip">&raquo;&nbsp;Back Popagation Algorithm</a><br />

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
                
                <!-- END FOOTER LEFT PANEL -->
                
                <!-- BEGIN FOOTER MIDDLE PANEL -->
        
                <div class="widget">
                
                    <div class="header">
                
                        <img alt="Links" SRC="images/55.jpg" />                    </div>
                    
                    <div class="content" id="quickcontact">
                    
                        <form name="quickcontact" action="mail.php?url=ppt.php" method="post">
						
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
                    
                        <img alt="Copyright" SRC="images/66.jpg" />                    </div>
                    
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
		
		    <div align="center"><span class="style1">Dssigned by Anurag Agrawal (<em>agrawal.anu90@gmail.com</em>), Sanjay Kumar (<em>rockingsanjay90@gmail.com</em>) (ABV-IIITM)</span></div>
	  </div>
		
  </div>
		
	</div>
	
</div>

</body>
</html>