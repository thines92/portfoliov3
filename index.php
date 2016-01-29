<?php include "assets/php/index.php"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tyler Hines' Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap Core CSS File -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- Font Awesome Glyphicon File -->
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">

        <!-- Custom CSS File -->
        <link rel="stylesheet" href="assets/css/main.css">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<body data-spy="scroll" data-target="#navbar" data-offset="51">

		<header class="site-header">
			<div class="navbar-wrapper">

				<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">

						<div class="navbar-header">
							<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="/" class="navbar-brand"><h2>Tyler Hines<span>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-check-circle-o"></i> Web Developer</span></h2></a>
						</div><!-- navbar-header -->

						<div class="navbar-collapse collapse">
							<div id="navbar" class="nav navbar-nav navbar-right">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Me</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</div><!-- nav -->
						</div><!-- navbar-collapse -->

					</div><!-- container -->
				</div><!-- navbar-inverse -->					
			</div><!-- navbar-wrapper -->
		</header><!-- header -->

		<section id="hero">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<p>Hi there, I'm</p>
						<h2>TYLER HINES</h2>
						<p>and I love what I do</p>
					</div><!-- end col -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- hero -->

		<section id="content" class="col-sm-8 col-sm-offset-2 clearfix">
			<div class="container">
				<div class="row">

					<hr>

					<article id="about-me" class="anchor clearfix">
						<div class="section-header  col-sm-8 col-sm-offset-2">
							<i class="fa fa-user fa-5x"></i>
							<h1>About Me</h1>
						</div><!-- section-header -->

						<div class="col-sm-6 col-sm-offset-3">
							<p class="body-text">Hi! My name is Tyler Hines, just in case that wasn't clear. I am a web developer & designer located in the Boston area. There is nothing more entertaining and exciting to me than coming up with a great design and being able to put it all together. In those times where I'm not working, you can usually find me at a concert, sports game, or outside looking for an adventure.</p>
						</div><!-- end col -->

					</article><!-- about-me -->

					<hr class="col-sm-8 col-sm-offset-2">

					<article id="what-i-do" class="clearfix">

						<div class="section-header col-sm-10 col-sm-offset-1">
							<h1>What I Can Do</h1>
						</div><!-- section-header -->
						
						<div class="col-sm-5">
							<div class="section-header">
								<i class="fa fa-keyboard-o fa-3x"></i>
								<h3>Development</h3>								
							</div><!-- section-header -->

							<div class="body-text">
								<p>Web development has been my passion for a while. I work mostly with HTML, CSS, JavaScript, and jQuery. When I am not working with these, I am practicing my skills with PHP, Node.js, or learning about one of the many other languages that grace the Internet.</p>
							</div><!-- body-text -->

						</div><!-- end col -->

						<div class="col-sm-5 col-sm-offset-2">

							<div class="section-header">
								<i class="fa fa-tv fa-3x"></i>
								<h3>Design</h3>
							</div><!-- section-header -->

							<div class="body-text">
								<p>I grew up in an artistic family so being able to translate that to the web is awesome. Most of my designs are done right in Photoshop and I try to incorporate some of my personal photographs into designs when I can. I am always looking for inspiration in everything I do and am constantly trying to better myself and my designs.</p>
							</div><!-- body-text -->

						</div><!-- end col -->

					</article><!-- what-i-do -->

					<hr>

					<article id="my-work" class="clearfix">
						
						<div class="col-sm-6 col-sm-offset-3">

							<div class="section-header">
								<h1>My Work</h1>
							</div><!-- section-header -->

							<div class="body-text">
								<p>Here I have included some of my favorite projects that I've worked on. 
								Click on any project to learn more about it and what role I played in it.</p>
							</div>

						</div><!-- end col -->

						<div id="projects" class="col-sm-6 col-sm-offset-3">

							<a class="col-xs-4" href="#" data-toggle="modal" data-target="#modal1">
								<img src="assets/images/jbf.png" alt="Jared Barrows Foundation">
							</a><!-- modal1 -->

							<a class="col-xs-4" href="#" data-toggle="modal" data-target="#modal2">
								<img src="assets/images/jbf.png" alt="Jared Barrows Foundation">
							</a><!-- modal2 -->

							<a class="col-xs-4" href="#" data-toggle="modal" data-target="#modal3">
								<img src="assets/images/jbf.png" alt="Jared Barrows Foundation">
							</a><!-- modal3 -->

						</div><!-- projects -->

					</article><!-- my-work -->

					<hr>

					<article id="contact" class="clearfix">

						<div class="section-header">
							<i class="fa fa-phone fa-4x"></i>
							<h1>Contact Me!</h1>
						</div><!-- section-header -->

						<div class="col-md-6 col-md-offset-3 emailForm">


							<p class="lead text-center">Please get in touch and we will get back to you as soon as possible!</p>

							<form method="post">

								<div class="form-group">
									<label for="name">Your Name:</label>
									<input type="text" name="name" class="form-control" placeholder="Your Name"
									value="<?php echo $_POST['name']; ?>" />
								</div><!-- name -->

								<div class="form-group">
									<label for="email">Your Email:</label>
									<input type="email" name="email" class="form-control" placeholder="Your Email"
									value="<?php echo $_POST['email']; ?>" />
								</div><!-- email -->

								<div class="form-group">
									<label for="comment">Your Message:</label>
									<textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
								</div><!-- message -->

								<input type="submit" name="submit" class="btn btn-danger btn-lg" value="Send message" /><!-- submit -->

							</form><!-- form -->

							<div class="result">

								<?php echo $result; ?>

							</div>
							
						</div><!-- emailForm -->

					</article><!-- contact -->

				</div><!-- row -->
			</div><!-- container -->
		</section><!-- content -->

		<footer>
			<div class="container">
				<div class="row">

					<div id="social-media" class="col-xs-5">

						<div class="section-header">
							<h4>Social Media</h4>
							<p class="lead">Follow me on social media!</p>
						</div><!-- section-header -->

						<div class="xs-col-12 social-icons">
							<a href="http://www.linkedin.com/in/tylerhines92"><i class="fa fa-linkedin-square fa-2x"></i></a>
							<a href="http://www.twitter.com/thines92"><i class="fa fa-twitter fa-2x"></i></a>
						</div><!-- end col -->

					</div><!-- social media -->

					<div class="twitter col-xs-5 col-xs-offset-1">

						<div class="section-header">									
							<h4>My Twitter Feed</h4>
						</div><!-- section-header -->

						<a class="twitter-timeline" href="https://twitter.com/thines92" data-widget-id="679385270291210240">Tweets by @thines92</a>
						<script>!function(d,s,id) {
							var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
							if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
							fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
						</script>

					</div><!-- twitter -->

			<!-- 	<div class="footer-nav">
						<p><a class="footer-link" href="#header">Home</a>  /  <a class="footer-link" href="#content">About Me</a>  /
							<a class="footer-link" href="#section2">Portfolio</a>  /  <a class="footer-link" href="#footer">Contact</a></p>
					</div> -->
					
				</div><!-- row -->
			</div><!-- container -->
		</footer><!-- footer -->

		

				

		<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Jared Barrows Foundation</h4>
		      </div>
		      <div class="modal-body">
		       	...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="modal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>One fine body</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="modal3" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>One fine body</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/production.js"></script>
	</body>
</html>
