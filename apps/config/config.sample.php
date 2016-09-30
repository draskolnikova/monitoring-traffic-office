<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
$config = array(
    'host' => '127.0.0.1',
    'username' => 'api_username',
    'password' => 'api_password',
    'logo'     => 'https://beritagar.id/images/logo-beritagar.svg',
    'template' => 'desktop',
    'server'   => 'Beritagar',
    'interface' => 'ether1_WAN,ether2_LAN', // Which interface should be monitored?
    'interface_monitor' => false, // Change true to monitor interface (default: false)
    'socket_host' => 'http://' . $_SERVER["SERVER_ADDR"] . ':8081', // Change with your socket listen address
    'localhost' => 'http://' . $_SERVER['SERVER_ADDR'] // Change with your HTTP Port
);
