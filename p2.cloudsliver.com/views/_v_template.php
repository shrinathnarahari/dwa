<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>
<link href="/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
				
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	
</head>

<body>	

<div id="outer">

	
		<div id="logo">
			<img src="/images/b1.jpg" />
		</div>
		
		<div id="social-media-icons">
			<ul>
            	<li><a href="http://www.facebook.com"><img src="images/icons/facebook_32.png" /></a></li>
            	<li><a href="#"><img src="images/icons/rss_32.png" border="0" /></a></li>
            	<li><a href="http://www.twitter.com"><img src="images/icons/twitter_32.png" /></a></li>
            	<li><a href="http://www.youtube.com"><img src="images/icons/youtube_32.png" /></a></li>
          </ul>
		</div>
			
        <div id="content-fullwidth"><!-- InstanceBeginEditable name="content" -->
          <h1>Listen to what others are saying!</h1>
		</div>
		
		<div id="topnav">
			  <? if($user): ?>
		      <ul>
			    <li><a href='/'>Home</a></li>
             	<li><a href='/users/logout'>Logout</a></li>
                <li><a href='/posts/users/'>Change who you're following</a></li>
			    <li><a href='/posts/'>View posts</a></li>
                <li><a href='/posts/add'>Add a new post</a></li>						
				<li><a href=""> </a></li>
			</ul>
			 <? else: ?>
		     <ul>
			    <li><a href='/users/signup'>Sign up</a></li>
			    <li><a href='/users/login'>Log in</a></li>
		        <li><a href=""> </a></li>
				<li><a href=""> </a></li>
				<li><a href=""> </a></li>
			</ul>
		   <? endif; ?>
		
		</div>
		
				<div id="banner">
			<img src="/images/blog.jpg" />
		</div>

</div>		

	
	<!--?=$content;?--> 

</body>
</html>