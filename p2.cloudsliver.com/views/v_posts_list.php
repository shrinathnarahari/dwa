 <div id="box1">
 <h1> Number of posts by user <h1>
 <br><br>
<? foreach($posts as $post): ?>
    <!--$nr_of_posts = array_slice($post,2);-->

	<h4> <?=$post['first_name']?> <?=$post['last_name']?> :<?=$post['count']?>  <h4>
	<!--?=$post['content']?-->
	
	<br><br>
	
<? endforeach; ?>
 </div>