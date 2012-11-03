 <div id="box1">
<? foreach($posts as $post): ?>
    <!--$nr_of_posts = array_slice($post,2);-->

	<h2>List of posts <?=$post['first_name']?> <?=$post['last_name']?> :<?=$post['count']?>  </h2>
	<!--?=$post['content']?-->
	
	<br><br>
	
<? endforeach; ?>
 </div>