<html>
	<head>
		<title>EXAM_TIME</title>
		
		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
		
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

		<link href="css\index.css" rel="stylesheet" type="text/css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header>
			<div class="logo">
				<h1 class="logo-text"><span>EXAM</span>TIME</h1>
			</div>
			<i class="fas fa-bars menu-toggle"></i>
			<ul class="nav">
				<li><i class="fa fa-home" style=" background: rgb(245, 180, 119); color: red; margin: 10px; padding: 10px; font-size: medium; font-weight: bold;"><span>&nbsp; Home</span></i></li>
				<li>
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">login</a>
					<div class="dropdown-menu">
						<a href="admin.php" class="dropdown-item"><i class="fa fa-user-circle fa-lg" style="color:dodgerblue"></i>Admin</a>
                        <a href="login.php" class="dropdown-item"><i class="menu-icon fa fa-user fa-lg" style="color:darkslategrey"></i>user</a>
                    </div>
				</li>
				<li><a href="contactuspage.html">ContactUs</a></li>
			</ul>
		</header>

		<div class="slider">
			<div class="images"></div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="js\scripts.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<div class="page-wrapper">

			<div class="post-slider">
				<h1 class="slider-title">Welcome To Our Website</h1>
				<i class="fas fa-chevron-left prev"></i>
				<i class="fas fa-chevron-right next"></i>

				<div class="post-wrapper">

					<div class="post">
						<img src="IMG\b1.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="#">A database is a collection of data that lives for a long time</a></h4>
							<i class="fas fa-user" style="color: red">Codd.Edgar Frank</i>
							&nbsp;
							<i class="fas fa-calendar" style="color: darkcyan"> Mar 8,1960</i>
						</div>
					</div>
					<div class="post">
						<img src="IMG\b2.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="#">Java was originally developed at Sun Microsystems of java as a core component</a></h4>
							<i class="fas fa-user" style="color: red">James Gosling</i>
							&nbsp;
							<i class="fas fa-calendar" style="color: darkcyan"> May 23,1995</i>
						</div>
					</div>
					<div class="post">
						<img src="IMG\b3.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="#">Python was conceived in Netherlands at CWI as a successor to ABC</a></h4>
							<i class="fas fa-user" style="color: red">Guido van Rossum</i>
							&nbsp;
							<i class="fas fa-calendar" style="color: darkcyan"> Dec 12,1989</i>
						</div>
					</div>
					<div class="post">
						<img src="IMG\b4.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="#"></a>C is general-purpose,high-level language to develop the UNIX os at Bell labs</a></h4>
							<i class="fas fa-user" style="color: red">Dennis M.Ritchie</i>
							&nbsp;
							<i class="fas fa-calendar" style="color: darkcyan"> July 9,1972</i>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="footer">
			<div class="footer-content">

				<div class="footer-section about">
					<h1 class="logo-text"><span>Exam</span>Time</h1>
					<p>This website will provide you to take exam online and thus saves your time to go far away.There are different kinds of
						subjects provided for exam purpose. Candidate can select any subject and take exam.System provides the facility to check attempted papers and shows 
						result after submitting.<p>
				</div>

				<div class="footer-section link">
					<h2>Quick links</h2>
					<ul>
						<li><a href="#">Events</a></li>
						<li><a href="#">Developers</a></li>
						<li><a href="#">Questions</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Schedules</a></li>
					</ul>
				</div>

				<div class="footer-section contactus">
					<div class="last">	
						<span><i class="fas fa-phone" style="color:limegreen"></i> &nbsp; 123-456-789</span>
						<span><i class="fas fa-envelope" style="color: yellow"></i> &nbsp; info@examtime.com</span>

						<div class="social">
							<a href="#" style="color: dodgerblue"><i class="fab fa-facebook"></i></a>&nbsp;
							<a href="#" style="color:crimson"><i class="fab fa-instagram"></i></a>&nbsp;
							<a href="#" style="color: cyan"><i class="fab fa-twitter"></i></a>&nbsp;
							<a href="#" style="color: red"><i class="fab fa-youtube"></i></a>&nbsp;
						</div>
					</div>	
				</div>

			</div>

			<div class="footer-bottom">
				&copy; Examtime.com | Designed by Raviteja
			</div>
		</div>
	</body>
</html>