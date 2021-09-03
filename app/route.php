<?php

   $server_requested_uri = $_SERVER['REQUEST_URI'];
   $split_requested_uri = explode("/",$server_requested_uri);
   $get_requested_uri = $split_requested_uri[1];
   
   if($get_requested_uri == null || $get_requested_uri == ''){
	   require_once './home.php';
   }
   else{
	   switch ($get_requested_uri){
		   case 'home':
		      require_once './home.php';
			  break;
			  
		   case 'support':
		      require_once './support.php';
			  break;
			  
		   case 'store':
		      require_once './store.php';
			  break;
		   case 'download':
			  require_once './download.php';
			  break;
		   case 'upload':
			  require_once './index.php';
			  break;
			  
		   default:
		      require_once './404.php';
			  break;
	   }
   }
