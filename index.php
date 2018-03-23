<!DOCTYPE html>

<html>
	<head>
		
		<meta charset="UTF-8">
		<title>SmartCampus - Home</title>
		
	</head>
	<body style="background-image: url(./assets/images/uwindsor_campus.jpg);background-size:cover; ">
		<?php
	   $currentPage="home";
	   include ("menu.php");
		?>
			
			
			<div>
				<div class="col-md-4">
						<h1  style="color:white;text-align:center;margin-top:15%;">About Us</h1>
						
						<div style="background-color:white;opacity:0.8;border-radius:5px;">
							<p style="padding:4%;font-size:20px;">
								Welcome to UWindsor SmartCampus. A place where you can find the most pertinent info for current students. 
								On this website you'll find a page with all of the events on campus, a campus map to help you get around, and other information to help make your student life easier.
							</p>
						</div>
				</div>
				<div class="col-md-4">
					<h1 style="color:white;text-align:center;">Welcome to Smart Campus</h1>
				</div>
				<div class="col-md-4">
					<h1 style="color:white;text-align:center;margin-top:15%;">Important Links</h1>
					
					<div style="background-color:white;opacity:0.8;border-radius:5px;margin-top:5px;font-size:18px;padding:2%;">
						UWindsor SmartCampus is intended for current students! If you're looking for other information about the school,
						programs offered, classes, or anything else of that nature, please head over to <a href="http://www.uwindsor.ca/">the official University of Windsor homepage</a>.
					</div>
					
					<div style="background-color:white;opacity:0.8;border-radius:5px;margin-top:5px;font-size:18px;padding:2%;">
						Looking for official transcripts, final grades, exam locations, or other information from the Office of the Registrar?
						Then head over to <a href="https://www.uwindsor.ca/sis">the UWindsor Student Information System</a> where you can find the latest official information relating to your courses.
					</div>
					
					<div style="background-color:white;opacity:0.8;border-radius:5px;margin-top:5px;font-size:18px;padding:2%;">
						Are you currently enrolled and want to know more about what courses are available in the coming semester? Or maybe you're looking for financial, academic, or registration related information?
						If you want to know more about any of these, you should follow the link to <a href="https://my.uwindsor.ca/">MyUWindsor</a>.
					</div>
				</div>
			</div>
		<!--<div class="container-fluid bg-info section-padding">
			<div class="container">
				<div class="row section-padding bg-info">
					<h1 class="text-info text-center">Important Links</h1>
				
					<div class="col-md-4 col-md-offset-2">
						<img src="./assets/images/UWindsor-logo.png" class="img-responsive img-rounded"></img>
					</div>
					<div class="col-md-4">
						UWindsor SmartCampus is intended for current students! If you're looking for other information about the school,
						programs offered, classes, or anything else of that nature, please head over to <a href="http://www.uwindsor.ca/">the official University of Windsor homepage</a>.
					</div>
				</div>
				<div class="row section-padding bg-warning">
					<div class="col-md-4 col-md-offset-2">
						Looking for official transcripts, final grades, exam locations, or other information from the Office of the Registrar?
						Then head over to <a href="https://www.uwindsor.ca/sis">the UWindsor Student Information System</a> where you can find the latest official information relating to your courses.
					</div>
					<div class="col-md-4">
						<img src="./assets/images/sisUwindsor.jpg" class="img-responsive img-rounded"></img>
					</div>
				</div>
				<div class="row section-padding bg-info">
					<div class="col-md-4 col-md-offset-2">
						<img src="./assets/images/myUwindsor.png" class="img-responsive img-rounded"></img>
					</div>
					<div class="col-md-4">
						Are you currently enrolled and want to know more about what courses are available in the coming semester? Or maybe you're looking for financial, academic, or registration related information?
						If you want to know more about any of these, you should follow the link to <a href="https://my.uwindsor.ca/">MyUWindsor</a>.
					</div>
				</div>
			</div>
		</div>-->
	</body>
	
	<script>
		!function() {
		  var t;
		  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
		  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
		  t.factory = function(e) {
			return function() {
			  var n;
			  return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
			};
		  }, t.methods.forEach(function(e) {
			t[e] = t.factory(e);
		  }), t.load = function(t) {
			var e, n, o, i;
			e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
			o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
			n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
		  });
		}();
		drift.SNIPPET_VERSION = '0.3.1';
		drift.load('kriev7d4gi6i');
	</script>

	<script src="https://chatwee-api.com/v2/script/5aaeea6ebd616dc61ba0cd08.js"></script>
</html>