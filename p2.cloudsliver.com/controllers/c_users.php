<?php
class users_controller extends base_controller {

	public function __construct() {
		parent::__construct();
		echo "users_controller construct called<br><br>";
	} 
	
	public function index() {
		echo "Welcome to the users's department";
	}

	public function signup() {
	
	     #Setup view
		  $this->template->content = View::instance('v_users_signup');
		  $this->template->title = "Signup";
		  
		  #Render template
		echo $this->template;
	}
	public function p_signup() {
	   #Dump out the results of what is entered in the form fields
	   	# Dump out the results of POST to see what the form submitted
	// print_r($_POST);
		echo "db name passed   ";
	echo DB_NAME;	
	echo "   db name passed   ";
	# Insert this user into the database
	$user_id = DB::instance(DB_NAME)->insert("users", $_POST);
	
	# For now, just confirm they've signed up - we can make this fancier later
	echo "You're signed up";
	}
	public function login() {
		echo "This is the login page";
	}
	
	public function logout() {
		echo "This is the logout page";
	}
	
	public function profile($user_name = NULL) {

		if($user_name == NULL) {
			echo "No user specified";
		}
		else {
			echo "This is the profile for ".$user_name;
		}
	}
		
} # end of the class