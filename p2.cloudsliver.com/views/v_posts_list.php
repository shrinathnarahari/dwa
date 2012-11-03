 <div id="box1">
<? foreach($posts as $post): ?>
	
	<h2>List of posts <?=$post['first_name']?> <?=$post['last_name']?> <?=$post[1]?></h2>
	<!--?=$post['content']?-->
	
	<br><br>
	
<? endforeach; ?>
 </div>