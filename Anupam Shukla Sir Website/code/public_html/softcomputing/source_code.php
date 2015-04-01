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
.style1 {font-size: 12px}
-->
</style>
</head>

<body>	
	<div id="inner">
	
		<div id="mainTop">&nbsp;</div>	
		
		<div id="header">
			<div class="content">
			
				<div id="logo">
			
					<a class="title" HREF="index.php"> 
                                       	
						<img SRC="images/11.jpg" alt="Caulk Logo" width="501" height="61" />
                                                  
					</a>
					
				</div>	
                
                <!-- begin menu 2 -->
                
                <div id="menu" class="menu">
                
                	<ul>
                
                		<li ><a HREF="index.php">Home</a></li>
                        
                        <li ><a HREF="presentation.php">Download&nbsp; ppts</a></li>
                        
                       <li class="current-cat"><a HREF="source_code.php">Source Codes</a></li>
                        
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

                    <div class="panel"> <P align="justify">The following are the codes to various examples discussed in the book. These may be freely downloaded and used. However neither the authors, nor the publisher or any other affiliated bodies guarantee the correctness or validity of the codes. Please report any errors, corrections, or improvements to the authors. It is requested to please cite the usage of these codes in any publication as R. Kala, A. Shukla, R. Tiwari, Soft Computing and Expert System Laboratory, IIITM Gwalior. Available at:<a href="http://softcomputing.iiitm.ac.in/ "> http://softcomputing.iiitm.ac.in/.</a></p>
                    
                   	  <div  onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="codes/back popagation algorithm.zip">
                            
                            <img alt="Portfolio Image" SRC="images/p1 copy.jpg" height="134" width="432" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="codes/character recognition.zip"><img alt="Portfolio Image" SRC="images/p2 copy.jpg" height="134" width="432" />
                            </a>
                            <p>&nbsp;
                        
                        </p>
                        
                      </div>
                    

<div  onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="codes/evolutionary neural network with connectionist architecture.zip">
                            
                            <img alt="Portfolio Image" SRC="images/p3 copy.jpg" height="134" width="432" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="codes/evolutionary neural network with fixed architecture.zip"><img alt="Portfolio Image" SRC="images/p4 copy.jpg" height="134" width="432" />
                            </a>
                            <p>&nbsp;</p>
                        
                      </div>
                        
                        <br class="clearer" />
                      
                        
                        
                        
                        <div onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="codes/fuzzy inference system.zip">
                            
                            <img alt="Portfolio Image" SRC="images/p5 copy.jpg"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="codes/genetic algorithm.zip"><img alt="Portfolio Image" SRC="images/p6 copy.jpg" height="134" width="432" />                          </a>
                            <p>&nbsp;</p>
                        
                        </div>
                        
                        <div  onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="codes/modular neural network.zip">
                            
                            <img alt="Portfolio Image" SRC="images/p7 copy.jpg";"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="codes/robot motion by Fuzzy Inference System.zip"><img alt="Portfolio Image" SRC="images/p8 copy.jpg";"/>
                            </a>
                            <p>&nbsp;</p>
                        
                        </div>
                        
                        <div  onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="codes/time series analysis by neural networks.zip">
                            
                            <img alt="Portfolio Image" SRC="images/p9 copy.jpg";"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="codes/travelling salesman problem.zip"><img alt="Portfolio Image" SRC="images/p10 copy.jpg";"/>
                            </a>
                            <p>&nbsp;</p>
                        
                        </div>                        
                         <div  onmouseover="this.style.backgroundColor='#ECECEC';this.style.borderColor='#AAAAAA';this.style.cursor='pointer'" onmouseout="this.style.backgroundColor='';this.style.borderColor='#CCCCCC'"><a href="codes/ensemble.zip">
                            
                            <img alt="Portfolio Image" SRC="images/p11 copy.jpg";"/>&nbsp;&nbsp;&nbsp;&nbsp;
                            </a>
                            <p>&nbsp;</p>
                        
                      </div>         
                       
                        
                        
                       
                        
                                        
						
                        
                        
                        
    
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
                  <iframe src="mail1.php" height="276" width="340" style="border:0"></iframe>
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
		</div>
		
		<div class="style1" id="mainBottom">
		  <div align="center"><strong>Designed by Anurag Agrawal (<em>agrawal.anu90@gmail.com</em>), Sanjay Kumar (<em>rockingsanjay90@gmail.com</em>) (ABV-IIITM)</strong></div>
	      <span class="style2">
	   <table width="200" border="0" ali
	   align="center">
  <tr>
    <td width="114"><img src="http://acme-web-design.info/counter.php?id=44A69D2B600940CFBEF609A992962188&style=1"/ align="center"></td>
    <td width="70"><span class="style2">Visitors</span></td>
  </tr>
</table>


</div>
		
		</body>
</html>