<!DOCTYPE HTML>
<html>
	<head>
		<?php include ('header.php');?>
	</head>

	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="home.php" class="logo"> Perspective <br /> Perfection </a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="home.php">Home</a></li>
							<li class="active"><a href="portfolio.php">Portfolio</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>

						<ul class="icons">
							<!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
							<li><a href="http://www.Facebook.com/perspectiveperfection" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="http://www.instagram.com/perspectiveperfection" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<!-- <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li> -->
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<table>
							<tr style="background-color: transparent;">	
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_1089.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_1089.jpg" alt="" title="">
								</td>
								
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_1230.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_1230.jpg" alt="" title="">
								</td>
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_1231.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_1231.jpg" alt="" title="">
								</td>
							</tr>	
								
							<tr style="background-color: transparent;">	
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_1287.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_1287.jpg" alt="" title="">
								</td>
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_1288.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_1288.jpg" alt="" title="">
								</td>
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_1321.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_1321.jpg" alt="" title="">
								</td>
							</tr>	
								
							<tr style="background-color: transparent;">	
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_1376.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_1376.jpg" alt="" title="">
								</td>
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_5051.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_5051.jpg" alt="" title="">
								</td>
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_5983.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_5983.jpg" alt="" title="">
								</td>
							</tr>	
								
							<tr style="background-color: transparent;">	
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_6105.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_6105.jpg" alt="" title="">
								</td>
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_6851.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_6851.jpg" alt="" title="">
								</td>
								
								<td class="col-md-3 image fit" style="width:31%; margin:1%; float:left">
								<a id="lightbox-img" href="images/artistic/IMG_9999.jpg" data-lightbox="example-set" data-title=""><img src="images/artistic/IMG_9999.jpg" alt="" title="">
								</td>
							</tr>	
						</table>
							

<!-- 
echo<tr style='background-color: transparent'";">;
							echo <td class="col-md-3 image fit" style="width:31%; margin:1%; float:left"><a id="lightbox-img" href="images/wedding/{$row['IMG']}" data-lightbox="example-set" data-title='$row['Title']><img scr='images/wedding/{$row['IMG']}' alt='{$row['Title']}'></td>;
-->

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>
									<a href="portfolio_001.php" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>-->
								</div>
							</footer>

					</div>

				<!-- Footer -->
				<a name="contact"></a>
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="field">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="3"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>12636 Julian Ave #A<br />
								Lakeside, Ca 92040</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(619) 647-7909</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">perspectiveperfection@gmail.com</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
								<!--
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								-->
								<li><a href="http://www.Facebook.com/perspectiveperfection" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="http://www.instagram.com/perspectiveperfection" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<!--
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								-->
								</ul>
							</section>
						</section>
					</footer>

				Copyright 
					<div id="copyright">
						<ul><li>&copy; Perspective Perfection</li></ul>
					</div>
				
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>