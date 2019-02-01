<?php
	$file = "log/log";
	$data=$_POST['id'];
	$return="null";
	
	if($data!="baut")
		shell_exec("sudo pkill bauto 2>&1");

	if($data=="init")
		$return=$data." - ".shell_exec("sudo /var/www/ex/init 2>&1");
	else if($data=="baut") {
		shell_exec("sudo /var/www/ex/bauto &");
		$return=$data." - No verbose. (b) Auto mode!";
	}
	else if($data=="bon")
		$return=$data."  - ".shell_exec("sudo /var/www/ex/p11on 2>&1");
	else if($data=="boff")
		$return=$data." - ".shell_exec("sudo /var/www/ex/p11off 2>&1");
	else if($data=="fon")
		$return=$data."  - ".shell_exec("sudo /var/www/ex/p13on 2>&1");
	else if($data=="foff")
		$return=$data." - ".shell_exec("sudo /var/www/ex/p13off 2>&1");
	else if($data=="xon")
		$return=$data."  - ".shell_exec("sudo /var/www/ex/p15on 2>&1");
	else if($data=="xoff")
		$return=$data." - ".shell_exec("sudo /var/www/ex/p15off 2>&1");
	else
		$return="Invalid data - ".$data;
	
  file_put_contents($file, date("Y-m-d h:i:s a  ==  ")."[".$_SERVER['REMOTE_ADDR']."] ".$return.PHP_EOL , FILE_APPEND) or die("can't open file");
?>