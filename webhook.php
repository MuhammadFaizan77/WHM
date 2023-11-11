<?php
chdir('/home/devtestlink/public_html/WHM');
$output = shell_exec('/usr/bin/git pull 2>&1');

if ($output) {
    echo "Output: <pre>$output</pre>";
} else {
    echo "OK";
}
?>

