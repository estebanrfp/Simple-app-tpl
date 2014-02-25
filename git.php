<?php
$result = shell_exec('git pull origin master');
echo "<pre>$result</pre>";
?>