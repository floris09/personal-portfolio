<?php

?>


<html>

	<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Cinzel|Cormorant+Garamond|Kaushan+Script|Righteous|Spectral+SC|Vollkorn+SC|Yellowtail|Basic" rel="stylesheet">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href=logo.png>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<title>Floris Meininger</title>

 	</head>

  <body>

		<script>
			var blv = ['<img src=blv1.png />','<img src=blv2.png />','<img src=blv3.png />'];
			var evaluation = ['<img src=evaluation1.png />','<img src=evaluation2.png />','<img src=evaluation3.png />'];
			var matcher = ['<img src=matcher1.png />','<img src=matcher2.png />','<img src=matcher3.png />'];
			var tic-tac-toe = ['<img src=tic-tac-toe.png />','<img src=tic-tac-toe2.png />','<img src=tic-tac-toe3.png />'];

			function zoom(arr,n){
			var count = n;
			var pics = arr;
			$('.modal').css('display','block');
			$('.close').css('display','block');

			$('#modalimg').html(pics[count]);

			$('.next').click(function(){
			  count++;
				if (count == pics.length) {
					count = 0;
				};
				$('#modalimg').html(pics[count]);
			});

			$('.prev').click(function(){
				if (count == 0) {
					count = pics.length;
				};
				count--;
				$('#modalimg').html(pics[count]);
			});

			$(document).keydown(function(e){
			if (e.which == 39) {
				count++;
				if (count == pics.length) {
					count = 0;
				};
				$('#modalimg').html(pics[count]);
			} else if (e.which == 37) {
				if (count == 0) {
					count = pics.length;
				};
				count--;
				$('#modalimg').html(pics[count]);
			} else if (e.which == 27) {
				$('.modal').css('display','none');
				$('.close').css('display','none');
				$('#modelimg').css('display','none');
			};
			});

			$('.close').click(function(){
				$('.modal').css('display','none');
				$('.close').css('display','none');
				$('#modelimg').css('display','none');
			});

			};

			function myFunction(x) {
			    x.classList.toggle("change");
			    $('.dropdown').toggle(300);
			}

</script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#scroll-portfolio">Portfolio</a></li>
            <li><a href="#scroll-contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a target="_blank"  href="https://www.facebook.com/floris.meininger"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/florismeininger/"<i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a target="_blank" href="https://www.linkedin.com/in/floris-meininger-3738b193/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
      <li><a target="_blank" href="https://github.com/floris09"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HOME PAGE -->
    <div id="home" ></div>


    <!-- PROFILE PIC & ABOUT -->
    <div class="container-fluid">
      <div id="about">
      </div>
      <div class="whitebox">
        <div class="row">
          <div class="col-xs-6 col-sm-3">
          <img id=profilepic class="img-circle img-responsive img-center"  src="http://res.cloudinary.com/florismeininger/image/upload/v1502627373/portfolio%20website/profilesquare_mgwjyl.jpg" alt="Profile Picture">

          </div>
          <div class="col-xs-12 col-sm-8">
      <h1>Floris Meininger</h1>
      <h3>Junior Full-Stack Developer</h3>
            <p>I'm a young and ambitious full-stack developer, located in Amsterdam, Netherlands. Always eager to learn and take on challenging projects. Recently graduated from the Codaisseur Academy in Amsterdam, where amongst other things I learned to use Ruby on Rails, React and React Native. For more info please check my Linkedin and Github accounts and feel free to contact me for further questions!</p>
          </div>
          <div class="col-xs-0 col-sm-1">
          </div>
        </div>
      </div>

      <!-- PORTFOLIO -->
		<div class=modal>
			<span class="close" >&times;</span>
			<a class="prev" >&#10094;</a>
			<a class="next" >&#10095;</a>
			<div id=modalimg></div>
		</div>

    <div id="scroll-portfolio">
    </div>
    <div class="whitebox">
      <div class="row">
      <h2 id=portfolio class=text-center>Portfolio</h2>
        </div>

          <h4>Bali Eve Wedding & Event Planner</h4>
          <p>After learning how to code online, this was the first website I deployed. For this website I used HTML, CSS, Javascipt, JQuery and a bit of PHP. You can check it online <a href="https://balieveplanner.com" target="_blank">here</a>.</p>
          <div class="row">
            <div class="col-sm-4">
              <img class="img-thumbnail img-responsive" src="blv1.png" onclick="zoom(blv,0)" alt="Wedding planner website">
            </div>
            <div class="col-sm-4">
              <img class="img-thumbnail img-responsive" src="blv2.png" onclick="zoom(blv,1)" alt="Wedding planner website">
            </div>
            <div class="col-sm-4">
              <img class="img-thumbnail img-responsive" src="blv3.png" onclick="zoom(blv,2)" alt="Wedding planner website">
            </div>
          </div>

        <div class="line">
        </div>

        <h4>Student Evaluation Tool</h4>
        <p>This is a web-app built using React and an express API. It could be used by teachers to keep track of the progress of their students. New classes and students can be added, and evaluations can be assigned to individual students. Check out the Github repository <a href="https://github.com/floris09/evaluation-tool-react" target="_blank">here</a>.</p>
        <div class="row">
         <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="evaluation1.png" onclick="zoom(evaluation,0)" alt="Student evaluation tool">
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="evaluation2.png" onclick="zoom(evaluation,1)" alt="Student evaluation tool">
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="evaluation3.png" onclick="zoom(evaluation,2)" alt="Student evaluation tool">
          </div>
        </div>

        <div class="line">
        </div>

        <h4>Student Matcher</h4>
        <p>This is a web-app built using Ruby on Rails. On this app teachers can login as admin and create student pairs for a specific day. Students can login and see their partner for the day and for previous days. Admins can also promote others to admin and vice versa. Check out the Github repository <a href="https://github.com/floris09/student-generator" target="_blank">here</a>.</p>

        <div class="row">
         <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="matcher1.png" onclick="zoom(matcher,0)" alt="Student matcher">
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="matcher2.png" onclick="zoom(matcher,1)" alt="Student matcher">
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="matcher3.png" onclick="zoom(matcher,2)" alt="Student matcher">
          </div>
        </div>

        <div class="line">
        </div>

        <h4>Multiplayer Tic-Tac-Toe</h4>
        <p>This is a web-app built using React with an Express back-end. People can login and join eachother in a real-time game of tic-tac-toe. You can play it online <a href="https://tic-tac-toe.codaisseur.cloud" target="_blank">here</a>. Check out the Github repository <a href="https://github.com/aljazskrinjar/react-game-starter" target="_blank">here</a>.</p>

        <div class="row">
         <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="tic-tac-toe.png" onclick="zoom(tic-tac-toe,0)" alt="tic-tac-toe">
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="tic-tac-toe2.png" onclick="zoom(tic-tac-toe,1)" alt="tic-tac-toe">
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail img-responsive" src="tic-tac-toe3.png" onclick="zoom(tic-tac-toe,2)" alt="tic-tac-toe">
          </div>
        </div>
      </div>
      <!--CONTACT-->
      <div id="scroll-contact">
      </div>
      <div class="whitebox contact">
        <div class="row">
					<div class="col-sm-12">
          	<h2 id="contact" class="text-center">Contact</h2>
					</div>
        </div>
				<div class="row">
					<div class="col-sm-12">
        	  <p>Feel free to message me in
						<a target="_blank" href="https://www.linkedin.com/in/floris-meininger-3738b193/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						or
						<a target="_blank"  href="https://www.facebook.com/floris.meininger"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
          <p>Email me at: <a href="mailto:florismeininger@gmail.com">florismeininger@gmail.com</a></p>
          <p>Or call me:
						<span id="phone-number">+31642949399</span>
						<a href='tel:+31642949399' id="phone-logo"><i class="fa fa-phone" aria-hidden="true"></i></a>
						</p>
        <!-- <form action="/submit">
          <div class="row text-center">
        <input class="input" type="text" placeholder="  Your name..">
          </div>
          <div class="row text-center">
        <input class="input" type="text" placeholder="  Your email address..">
          </div>
          <div class="row text-center">
        <input class="input" type="text" placeholder="  Your phone number..">
          </div>
          <div class="row text-center">
            <textarea class="input" type="text" placeholder="  Write something.." style="height:100px"></textarea>
          </div>
          <div class="row text-center">
          <button class="btn btn-sm btn-default" type="submit">Submit</button>
          </div>
          </form> -->

      </div>
    </div>
