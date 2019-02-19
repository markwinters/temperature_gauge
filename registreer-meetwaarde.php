<?php
$waarde = filter_var($_GET['waarde'], FILTER_SANITIZE_STRING);
$fh = fopen('temperatuur_log.txt', 'a');
if(!$fh) {
    error_log('Kon temperatuur_log.txt bestand niet schrijven');
}
fwrite($fh, date('Y-m-d H:i:s') . ' | ' . $waarde . "\n");
fclose($fh);