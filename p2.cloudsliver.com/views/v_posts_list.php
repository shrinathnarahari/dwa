 <div id="box1">
<? foreach($posts as $post): ?>
    $nr_of_posts = mysql_fetch_array($post);
	echo $nr_of_posts
    Debug::dump($post," list");
	<h2>List of posts <?=$post['first_name']?> <?=$post['last_name']?> <?$nr_of_posts?>  </h2>
	<!--?=$post['content']?-->
	
	<br><br>
	
<? endforeach; ?>
 </div>