<?php

// MySQL Credentials
$db_host = 'localhost';
$db_user = 'frank';     // Enter your MySQL username
$db_pass = 'test_123a456#';     // Enter your MySQL password
$db_name = 'torque';
$db_table = 'raw_logs';

// User credentials for Browser login
$auth_user = 'frank';    //Sample: 'torque'
$auth_pass = 'test_123a456#';    //Sample: 'open'

//If you want to restrict access to upload_data.php, 
// either enter your torque ID as shown in the torque app, 
// or enter the hashed ID as it can found in the uploaded data.
//The hash is simply MD5(ID).
//Leave empty to allow any torque app to upload data to this server.
$torque_id = '';        //Sample: 123456789012345
$torque_id_hash = '';   //Sample: 58b9b9268acaef64ac6a80b0543357e6
//Just 'settings', could be moved to a config file later.
$source_is_fahrenheit = false;
$use_fahrenheit = false;

$source_is_miles = false;
$use_miles = false;

$hide_empty_variables = false;
$show_session_length = true;

?>