<!doctype html>
<html lang="en">
<head></title>
	<title>Social Media</title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="803315098158-ssu7hppidb2s9cvkbgemoh9a2a4vi8um.apps.googleusercontent.com">

    <!--Bootstrap CSS and JavaScript-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Google Log In API script-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--Questrial google font link-->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

    <!--Extra CSS added by students in CS on top of Bootstrap CSS-->
    <link rel="stylesheet" href="/css/custom-styles.css">
	
	<script>
        function onSignIn(googleUser) {

            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL~: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            createCookie("name", profile.getName(), 14);
            createCookie("email", profile.getEmail(), 14);
            showOut();
            //location.reload();
        }

        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
            eraseCookie("name");
            eraseCookie("email");
            //location.reload();
        }

        function showOut(){
            document.getElementById("out").style.display='block';
            document.getElementById("Welcome").style.display='block';
            document.getElementById("in").style.display='none';
            $('#entryArea').load(document.URL +  ' #entryArea');

        }

        function showIn(){
            document.getElementById("in").style.display='block';
            document.getElementById("out").style.display='none';
            document.getElementById("Welcome").style.display='none';
            $('#entryArea').load(document.URL +  ' #entryArea');
        }
        function createCookie(name, value, days) {
            var expires;
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else {
              expires = "";
            }
            document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
        }

        function eraseCookie(name) {
            createCookie(name,"",-1);
        }

    </script>
</head>

<body style="background-color:#f9d73e;">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<?php
       $currentPage="social-media";
	   include ("menu.php");
    ?>
	
	<div style="text-align:center;">
	
	<div style="margin-top:2%;margin-left:5px;margin-right:5px;">
		<div class="col-sm-4" style="background-color:#4286f4;padding-bottom:10px;border-radius:5px;">
			<h1 style="color:white;">Twitter</h1>
			<a class="twitter-timeline" data-width="1000" data-height="600" data-theme="light" data-link-color="#FAB81E" href="https://twitter.com/UWindsor?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="col-sm-4" style="background-color:#f9d73e;height:600;">
			<h1 style="color:#4286f4;">Flickr<h1>
			<a data-flickr-embed="true" data-header="true" data-footer="true"  href="https://www.flickr.com/photos/uwindsor_ca/albums/72157627615668532" title="Welcome Week 2011"><img src="https://farm7.staticflickr.com/6077/6123953598_eeebd0a68f_z.jpg" width="100%" height="427" alt="Welcome Week 2011"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
		  </div>
		 
		  <div class="col-sm-4" style="background-color:#4286f4;padding-bottom:10px;border-radius:5px;">
			<h1 style="color:white;">Facebook</h1>
			<div class="fb-page" data-href="https://www.facebook.com/UWindsor/?ref=br_rs" 
				data-tabs="timeline" data-width="500" data-height="600" data-small-header="false" 
				data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<blockquote cite="https://www.facebook.com/UWindsor/?ref=br_rs" class="fb-xfbml-parse-ignore">
					<a href="https://www.facebook.com/UWindsor/?ref=br_rs">University of Windsor</a>
				</blockquote>
			</div>
		  </div>
	</div>
	
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
</body>
</html>