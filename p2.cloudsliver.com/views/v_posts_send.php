<form method='POST' action='/posts/p_send'>
	<div id="rightside">	
	<h2 Please select user to send message /h2>
	<? foreach($posts as $user): ?>
	
		<!-- Print this user's name -->
		<?=$user['first_name']?> <?=$user['last_name']?> <a href='/posts/send/<?=$user['user_id']?>'>Send Message</a>
		
		<br><br>
	
	
	<? endforeach; ?>
	</div>
</form>