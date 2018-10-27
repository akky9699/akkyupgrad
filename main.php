<?php

require "fbsdk/src/Facebook/autoload.php";
session_start();
$fb = new Facebook\Facebook([
    'app_id' => '1936096133099353',
    'app_secret' => 'c97c1b8228c9c454c8299970d920b7f6',
    'default_graph_version' => 'v2.5',
        ]);
?>