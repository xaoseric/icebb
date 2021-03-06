<?php
//******************************************************//
// IceBB Configuration File
//******************************************************//
// Please do not edit this file unless you know what
// you're doing. This stores all the information
//******************************************************//

// You shouldn't touch these unless you're moving to a
// different server
$config['db_engine']	= 'mysqli';
$config['db_host']		= 'localhost';
$config['db_user']		= 'root';
$config['db_pass']		= '';
$config['db_prefix']	= 'icebb_';
$config['db_database']		= 'ice';

$config['cookie_prefix']	= 'icebb_';

// Change this if you don't want to receive MySQL errors via
// e-mail
$config['admin_email']	= 'xenliam@live.com';

$config['lang']			= 'en';

// You can change the root users here. You'll need their ID which
// can be determined by their profile URL. The username will NOT
// work. Example: $config['root_users']	= '1,5,6';
$config['root_users']	= '1';
?>