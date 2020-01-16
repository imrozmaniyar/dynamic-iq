<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="330923446263-u77b5tghhfukfk0ael26dd6bprpjc1cs.apps.googleusercontent.com">
    <script type="text/javascript">
    	
function onSignIn(googleUser)
{
	var profile=googleUser.getBasicProfile();
	$(".g-signin2").css("display","none");
	$(".data").css("display","block");
	$("#pic").attr('src',profile.getImageUrl());
	$("#email").text(profile.getEmail());
}
function signOut()
{
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function(){
		
		alert("Logouted");
		
		$(".g-signin2").css("display","block");
		$(".data").css("display","none");
	});
}    	
    </script>
  </head>
  <body>
<style>
.g-signin2{
margin-left:500px;
margin-top:200px:
}
.data{
display:none;
}
</style>
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<div class="data">
<p>Profile Details</p>
<img id="pic" class="img-circle"width="100px"height="100px"/>
<p>Email Address</p>
<p id="email" class="alert alert-info"></p>
<button onclick="signOut()" class="btn btn-danger">SignOut</button>
</div>
</div>

</body>
</html>

