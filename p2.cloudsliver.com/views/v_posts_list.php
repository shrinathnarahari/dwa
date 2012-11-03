 <div id="box1">
<? foreach($posts as $post): ?>
    Debug::dump($post," list");
	<h2>List of posts <?=$post['first_name']?> <?=$post['last_name']?> </h2>
	<!--?=$post['content']?-->
	
	<br><br>
	
<? endforeach; ?>
 </div>