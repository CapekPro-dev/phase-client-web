<?php

   $server_requested_uri = $_SERVER['REQUEST_URI'];
   $split_requested_uri = explode("/",$server_requested_uri);
   $get_requested_uri = $split_requested_uri[1];
   
   if($get_requested_uri == null || $get_requested_uri == ''){
	   require_once '../public/home.php';
   }
   else{
	   switch ($get_requested_uri){
		   case 'home':
		      require_once '../public/home.php';
			  break;
			  
		   case 'support':
		      require_once '../public/support.php';
			  break;
			  
		   case 'store':
		      require_once '../public/store.php';
			  break;
		   case 'download':
			  require_once '../public/download.php';
			  break;
		   case 'upload':
			  require_once '../public/index.php';
			  break;
			  
		   default:
		      require_once '../public/404.php';
			  break;
	   }
   }