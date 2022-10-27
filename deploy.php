<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	$commands = array(
	'git fetch --all',
	'git reset --hard origin/main',
		'git pull origin main',
		'echo 123'
	);
	// Run the commands for output
	$output = '';
    $log = "";
    //$log .= "php://input";
	foreach($commands AS $command){
		// Run it
		$tmp = exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}

   // log($log);

    function log($msg){
        file_put_contents("log.txt" . $msg);
    }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 ____________________________
|                            |
| Git Deployment Script v.0.1|
|____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>