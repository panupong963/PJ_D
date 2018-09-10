<?php 
	if($this -> session -> userdata ( 'ST' )=="1") {
		site_url("home/Student_SaveJob_2");
	}else if($this -> session -> userdata ( 'ST' )=="2") {
		site_url("home/Authorities_CA_2");
	}