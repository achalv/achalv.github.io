<?php
include 'random.php';
?>

<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<meta name="author" content="Achal Varma">
        <meta name="description" content="Design-focused Engineer. I build and break a lot of things.">
		<title>Achal Varma</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/2.1.3/normalize.min.css">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/css/style.css" />
		<script>
			 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			 ga('create', 'UA-37465107-1', 'achalv.com');
			 ga('send', 'pageview');
		</script>
	</head>
	<body>
		<section class="backdrop">
			<div class="bg-img"></div>
		</section>
		<div class="content">
			<h2>Hi, I&apos;m Achal.</h2>
			<article>
				<p>I&apos;m a design-focused engineer studying <a href="http://cs.illinois.edu/">Computer Science</a> at the <a href="http://www.illinois.edu/">University of Illinois</a>.</p>
				<p>I recently helped organize <a href="http://www.hackillinois.org/">HackIllinois</a>. In the past, I&apos;ve helped ship <a href="http://crtv.mk/">Creative Market</a>, <a href="http://rp.cs.illinois.edu">Reflections | Projections</a> and <a href="http://quizr.me">Quizr.</a></p>				
				<p>I like <?php echo $choices[0] ?>, <?php echo $choices[1] ?>, listening to <?php echo $choices[2] ?> &amp; building things in my spare time.</p>
				<p>I also enjoy contributing to Open Source projects and playing Cricket whenever I can. You&apos;re currently looking at my favorite shade of blue.</p>
				<ul class="links">
					<li><a href="http://fb.me/achalv/">Facebook</a></li>
					<li><a href="http://twitter.com/_achalv">Twitter</a></li>
					<li><a href="http://git.io/FLaqcQ">GitHub</a></li>
					<li><a href="http://rd.io/people/achalv/">Rdio</a></li>
				</ul>
			</article>
		</div>
	</body>
</html>