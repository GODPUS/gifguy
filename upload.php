<?php
    require("defaults.php");
    require("lib/autoloader.php");

    Tumblr\API::configure(BASE_HOSTNAME, API_KEY, API_SECRET);
    Tumblr\API::authenticate(TOKEN, TOKEN_SECRET);

    
?>