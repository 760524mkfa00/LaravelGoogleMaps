<?php

return [

    /*
     *
     *  Global Settings For Google Map
     *
    */

    /* =====================================================================
    General
    ===================================================================== */

    'key' => env('GOOGLE_MAPS_API_KEY', ''), //Get API key: https://code.google.com/apis/console
    'adsense_publisher_id' => env('GOOGLE_ADSENSE_PUBLISHER_ID', ''), //Google AdSense publisher ID

    'geocode' => [
        'cache' => false, //Geocode caching into database
        'cacheDistance' => false,
        'table_name' => 'gmaps_geocache', //Geocode caching database table name
        'distance_table' => 'gmaps_distancecache',
    ],

    'css_class' => '', //Your custom css class

    'http_proxy' => env('HTTP_PROXY', null), // Proxy host and port

];
