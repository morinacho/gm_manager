<?php  

	#Data base access config
	define('DB_MANAGEMENT', 'mysql');		     # Put the system data base management to use
	define('DB_HOST', 'localhost'); 	 		 # Put the name of the host
	define('DB_USER', 'root'); 	 		 		 # Put the username
	define('DB_PASSWORD', ''); 					 # Put the password
	define('DB_NAME', 'framework_testing');		 # Put the data base name
	
	# App route
	define('APP_ROUTE', dirname(dirname(dirname(__FILE__))));

	# URL route
	define('URL_ROUTE', 'http://localhost/gm-manager/'); # Put the url route of your site

	# Site name
	define('SITENAME', 'GM Contable');  # Put the name of the site