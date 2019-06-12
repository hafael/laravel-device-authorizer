<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Logging Device Tracker
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for when a location is not found
    | for the IP provided.
    |
    */

    'log_tracking' => true,

    'authorize_routes' => true,

    'authorize_actions' => true,

    'authorize_middleware' => true,

    'anonymize_client' => true,

    'identify_user' => true,

    'fingerprint' => true,
    
    'ignore_fingerprint' => true,

];
