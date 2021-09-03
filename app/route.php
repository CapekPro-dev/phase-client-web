<?php

   $server_requested_uri = $_SERVER['REQUEST_URI'];
   $split_requested_uri = explode("/phase-client-web/",$server_requested_uri);
   $get_requested_uri = $split_requested_uri[1];
   
   if($get_requested_uri == null || $get_requested_uri == '/phase-client-web/'){
	   require_once './index.html';
   }
   else{
	   switch ($get_requested_uri){
		   case 'home':
		      require_once './index.html';
			  break;
			  
		   case 'support':
		      require_once './support.html';
			  break;
			  
		   case 'store':
		      require_once './store.html';
			  break;
		   case 'download':
			  require_once './download.html';
			  break;
		   case 'upload':
			  require_once './index.php';
			  break;
			  
		   default:
		      require_once './404.html';
			  break;
	   }
   }
