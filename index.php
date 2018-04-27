
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
	<style>
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th, td {
		    padding: 5px;
		    text-align: left;    
		}
	</style>
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<!--phần đầu -->
		<div class="left-content">
			<div class="mother-grid-inner">
				
				<?php include("head.php"); ?>
				
				<div class="agileinfo-grap">
					<div class="agileits-box">
						<div id="MainContent_TabContainer1_TabPanel1_Panel1" style="border-color:#666666;border-style:None;width:100%;overflow:auto;">
							<div class="row">
							    <div class="col-sm-*" style="margin-top: 0xp;">
							       <h3 style="text-align: center;color:	#00008B "><strong>THÔNG SỐ ĐO </strong></h3>
							    </div>
							</div>
							<div class="row">
							    <div class="col-sm-*">
							     	<?php include("showdht11.php"); ?>
							    </div>
							    
							</div>
							
                            
						</div>
					</div>
				</div>
					<!--trangchinhgiua-->
				<!--photoday-section-->	
	
				 <!--//Bản Đồ-->	
				<div class="map">
					<div class="col-md-6 agileinfo-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424521.98724489537!2d150.6419337943232!3d-33.77156856642666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1476529981265" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 w3-agileits-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6697825.113257229!2d144.173733109507!3d-34.946019835412905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1476530044829" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="clearfix"> </div>
				</diV>
					  <!--//w3-agileits-pane-->	
						<!-- script-for sticky-nav -->
				<script>
					$(document).ready(function() {
						var navoffeset=$(".header-main").offset().top;
						$(window).scroll(function(){
							var scrollpos=$(window).scrollTop(); 
							if(scrollpos >=navoffeset){
								$(".header-main").addClass("fixed");
							}else{
								$(".header-main").removeClass("fixed");
							}
						});
							 
					});
				</script>		
					<!--inner block end here-->
					<!--copy rights start here-->
				<div class="copyrights">
					<p style = " height: 150px; color : white;    background-color: #1b93e1;">
					<br><br>© Trường ĐH Bách Khoa Đà Nẵng 2017  <br>
						vovantrinhdhbkdn@gmail.com<br>
						Thiết kế bởi :<a href="http://w3layouts.com/" target="_blank" style = "color : red">Võ Văn Trinh</a> <br>
						Lớp : 15T3
					</p>
				</div>	
					<!--COPY rights end here-->
				</div>
			</div>
			  <!--//content-inner-->
				<!--/sidebar-menu-->
			<!--Phần kề cuối-->
			<?php include("left.php"); ?>


			<!--Phần cuối-->
			<div class="clearfix"></div>		
		</div>
	</div>
		<script>
			var toggle = true;
										
				$(".sidebar-icon").click(function() {                
					if (toggle)
						{
							$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
							$("#menu span").css({"position":"absolute"});
						}
						 else
						{
							$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
							setTimeout(function() {
							$("#menu span").css({"position":"relative"});
							}, 400);
						}
											
							toggle = !toggle;
				});
		</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		
	</script>
</body>
</html>
