<?php

class posts_controller extends base_controller {

      public function __construct() {
		parent::__construct();
		#echo "posts construct called<br><br>";
		# Make sure user is logged in if they want to use anything in this controller
		if(!$this->user) {
			die("Members only. <a href='/users/login'>Login</a>");
		}

	}
	
	   
	 	public function add() {
	
		# Setup view
		$this->template->content = View::instance('v_posts_add');
		$this->template->title   = "Add a new post";
			
		# Render template
		echo $this->template;
	
	}
	public function p_add() {
			
		# Associate this post with this user
		$_POST['user_id']  = $this->user->user_id;
		
		# Unix timestamp of when this post was created / modified
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();
		
		# Insert
		# Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
		DB::instance(DB_NAME)->insert('posts', $_POST);
		
		# Quick and dirty feedback
		echo "Your post has been added. <a href='/posts/add'>Add another?</a>";
	
	}
	
public function index() {

	# Set up view
	$this->template->content = View::instance('v_posts_index');
	$this->template->title   = "Posts";
	
	# Build our query
	$q = "SELECT * 
		FROM posts p, users u where p.user_id = u.user_id and p.user_id in (select uu.user_id_followed from users_users uu where uu.user_id=".$this->user->user_id.")";
	# echo Debug::dump($q,"query");
	# Run our query, grabbing all the posts and joining in the users	
	$posts = DB::instance(DB_NAME)->select_rows($q);
	
	# Pass data to the view
	$this->template->content->posts = $posts;
	
	# Render view
	echo $this->template;
	
}

public function postlist() {

	# Set up view
	$this->template->content = View::instance('v_posts_list');
	$this->template->title   = "List of posts by user";
	
	# Build our query
	$q = "SELECT u.first_name, u.last_name, count( p.user_id ) as count
          FROM posts p, users u
          WHERE u.user_id = p.user_id
          GROUP BY p.user_id";
	#echo Debug::dump($q,"query");
	# Run our query, grabbing all the posts and joining in the users	
	$posts = DB::instance(DB_NAME)->select_rows($q);
	#echo Debug::dump($posts,"query");
	# Pass data to the view
	$this->template->content->posts = $posts;
	
	# Render view
	echo $this->template;
	
}

public function send() {

	# Set up view
	$this->template->content = View::instance('v_posts_send');
	$this->template->title   = "Message Send";
	
	# Build our query
	$q = "SELECT u.first_name, u.last_name, u.user_id from users
          GROUP BY p.user_id";
	#echo Debug::dump($q,"query");
	# Run our query, grabbing all the posts and joining in the users	
	$posts = DB::instance(DB_NAME)->select_rows($q);
	#echo Debug::dump($posts,"query");
	# Pass data to the view
	$this->template->content->posts = $posts;
	
	# Render view
	echo $this->template;
	
}

public function users() {

	# Set up the view
	$this->template->content = View::instance("v_posts_users");
	$this->template->title   = "Users";
	
	# Build our query to get all the users
	$q = "SELECT *
		FROM users";
		
	# Execute the query to get all the users. Store the result array in the variable $users
	$users = DB::instance(DB_NAME)->select_rows($q);
	
	# Build our query to figure out what connections does this user already have? I.e. who are they following
	$q = "SELECT * 
		FROM users_users
		WHERE user_id = ".$this->user->user_id;
		
	# Execute this query with the select_array method
	# select_array will return our results in an array and use the "users_id_followed" field as the index.
	# This will come in handy when we get to the view
	# Store our results (an array) in the variable $connections
	$connections = DB::instance(DB_NAME)->select_array($q, 'user_id_followed');
			
	# Pass data (users and connections) to the view
	$this->template->content->users       = $users;
	$this->template->content->connections = $connections;

	# Render the view
	echo $this->template;
}
public function follow($user_id_followed) {
		
	# Prepare our data array to be inserted
	$data = Array(
		"created" => Time::now(),
		"user_id" => $this->user->user_id,
		"user_id_followed" => $user_id_followed
		);
	
	# Do the insert
	DB::instance(DB_NAME)->insert('users_users', $data);

	# Send them back
	Router::redirect("/posts/users");

}

public function unfollow($user_id_followed) {

	# Delete this connection
	$where_condition = 'WHERE user_id = '.$this->user->user_id.' AND user_id_followed = '.$user_id_followed;
	DB::instance(DB_NAME)->delete('users_users', $where_condition);
	
	# Send them back
	Router::redirect("/posts/users");

}
}