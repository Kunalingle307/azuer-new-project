<?php require("libs/fetch_data.php");?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?> | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">

	<!-- Add this CSS style for the chatbot button -->
	<style>
		.chatbot-button {
			position: fixed;
			right: 20px;
			bottom: 20px;
			background-color: #007BFF;
			color: #fff;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
			z-index: 999;
		}

		.chatbot-container {
			display: none;
			position: fixed;
			right: 30px;
			bottom: 30px;
			width: 300px;
			height: 400px;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			z-index: 1000;
		}

		.chatbot-iframe {
			width: 100%;
			height: 100%;
			border: 0;
		}
	</style>
</head>

<body>
	<!--Header-->
	<?php include("header.php");?>
	<!--//header-->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact</li>
	</ol>
	<!--//banner-->

	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<h3 class="tittle">Contact Us</h3>
		<p class="sub text-center">We love to discuss your idea</p>
		<div class="contact-map inner-sec">
			<iframe src="<?php getcontacts("titles","4");?>" class="map" style="border:0" allowfullscreen=""></iframe>
		</div>

		<div class="ad-inf-sec bg-light">
			<div class="container">
				<div class="address row">
					<!-- ... Existing Address Code ... -->
				</div>
			</div>
		</div>
	</section>
	<!--//main-->

	<!-- Chatbot Button -->
	<div class="chatbot-button" onclick="toggleChatbot()">Chat with us</div>

	<!-- Chatbot Container -->
	<div class="chatbot-container" id="chatbotContainer">
	<iframe src="https://webchat.botframework.com/embed/blogonlineserver1-bot?s=wACVxBDURmg.OACwo91YXBg9mcSZWCmtZm0fadP1f91UWiVmX997wgU" style="height: 502px; max-height: 502px;"></iframe>
	</div>

	<!--footer-->
	<?php include("footer.php");?>
	<!---->

	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->

	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});

		function toggleChatbot() {
			var chatbotContainer = document.getElementById("chatbotContainer");
			chatbotContainer.style.display = (chatbotContainer.style.display === "none") ? "block" : "none";
		}
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>

	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>

</body>

</html>
