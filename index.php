<?php 
session_start();
if(isset($_SESSION['username']) && $_SESSION['authorized'] == 1){
	echo ("<script type='text/javascript'>document.location='admin.php';</script>");
}else{
	include"login.php";
}?>
