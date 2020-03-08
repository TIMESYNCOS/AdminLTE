<?php

set_include_path( 'include' );
error_reporting (E_ALL ^ E_NOTICE);

//echo getcwd();
  
$output = shell_exec('sh app.sh'); 
  
echo "<pre>$output</pre>"; 

header('Location:timesync.co.in?success=true');

?>
