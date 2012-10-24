<?php

class post_controller extends base_controller {

       public fundtion_construct() {
	   
	   if (!this->user) {
	   die("Members only. <a href='/users/login'> Please login");
	   }
	   
	   public function add() {
	   