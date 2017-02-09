<?php
require_once ('creds.php');
require_once ('auth_app.php');
putenv('PYTHONPATH=x');

    // GET Request Query als String abholen
    if(isset($_SERVER['QUERY_STRING'])){
        $tmp1 = parse_str($_SERVER['QUERY_STRING'], $params);
        //$tmp = shell_exec('/usr/bin/python3.5 azureupload.py ' . escapeshellarg(json_encode($params)));
        $tmp = shell_exec('/usr/bin/python3.5 azureupload.py ' . escapeshellarg($_SERVER['QUERY_STRING']));
        echo json_encode($params);
    } else {
        echo "no query string";
    }

// Return the response required by Torque
echo "OK";

?>
