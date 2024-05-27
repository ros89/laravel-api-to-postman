<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL for all of your endpoints.
    |
    */

    'base_url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Collection Filename
    |--------------------------------------------------------------------------
    |
    | The name for the collection file to be saved.
    |
    */

    'filename' => '{timestamp}_{app}_collection.json',

    /*
    |--------------------------------------------------------------------------
    | Structured
    |--------------------------------------------------------------------------
    |
    | If you want folders to be generated based on namespace.
    |
    | Set "crud_folders" to "false" if you don't want the api, index, store, show etc. folders.
    |
    */

    'structured' => false,
    'crud_folders' => true,

    /*
    |--------------------------------------------------------------------------
    | Auth Middleware
    |--------------------------------------------------------------------------
    |
    | The middleware which wraps your authenticated API routes.
    |
    | E.g. auth:api, auth:sanctum
    |
    */

    'auth_middleware' => 'auth:api',

    /*
    |--------------------------------------------------------------------------
    | Headers
    |--------------------------------------------------------------------------
    |
    | The headers applied to all routes within the collection.
    |
    */

    'headers' => [
        [
            'key' => 'Accept',
            'value' => 'application/json',
        ],
        [
            'key' => 'Content-Type',
            'value' => 'application/json',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Events
    |--------------------------------------------------------------------------
    |
    | If you want to configure the prequest and test scripts for the collection,
    | then please provide paths to the JavaScript files.
    |
    */

    'prerequest_script' => '', // This script will execute before every request in the collection.
    'test_script' => '', // This script will execute after every request in the collection.

    /*
    |--------------------------------------------------------------------------
    | Include Doc Comments
    |--------------------------------------------------------------------------
    |
    | Determines whether to set the PHP Doc comments to the description
    | in postman.
    |
    */

    'include_doc_comments' => false,

    /*
    |--------------------------------------------------------------------------
    | Enable Form Data
    |--------------------------------------------------------------------------
    |
    | Determines whether or not form data should be handled.
    |
    */

    'enable_formdata' => false,

    /*
    |--------------------------------------------------------------------------
    | Parse Form Request Rules
    |--------------------------------------------------------------------------
    |
    | If you want form requests to be printed in the field description field,
    | and if so, whether they will be in a human readable form.
    |
    */

    'print_rules' => true, // @requires: 'enable_formdata' ===  true
    'rules_to_human_readable' => true, // @requires: 'parse_rules' ===  true

    /*
    |--------------------------------------------------------------------------
    | Form Data
    |--------------------------------------------------------------------------
    |
    | The key/values to requests for form data dummy information.
    |
    */

    'formdata' => [
        // 'email' => 'john@example.com',
        // 'password' => 'changeme',
    ],

    /*
    |--------------------------------------------------------------------------
    | Include Middleware
    |--------------------------------------------------------------------------
    |
    | The routes of the included middleware are included in the export.
    |
    */

    'include_middleware' => ['api'],

    /*
    |--------------------------------------------------------------------------
    | Exclude Uri
    |--------------------------------------------------------------------------
    |
    | The routes with corresponding uri are excluded from the export. Does support wildcards fnmatch
    | For more information, visit: https://www.php.net/manual/en/function.fnmatch.php
    |
    | Set "exclude_uri_and_segments" to "true" if you want to ignore also on segment -> f.e. some tree with matching pattern
    | in api file: ['as' =>.
    |
    */

    'exclude_uri' => ['*foo/bar*'],
    'exclude_segments' => ['*foo-bar*'],

    /*
    |--------------------------------------------------------------------------
    | Disk Driver
    |--------------------------------------------------------------------------
    |
    | Specify the configured disk for storing the postman collection file.
    |
    */

    'disk' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    |
    | Specify the authentication to be used for the endpoints.
    |
    */

    'authentication' => [
        'method' => env('POSTMAN_EXPORT_AUTH_METHOD'),
        'token' => env('POSTMAN_EXPORT_AUTH_TOKEN'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Protocol Profile Behavior
    |--------------------------------------------------------------------------
    |
    | Set of configurations used to alter the usual behavior of sending the request.
    | These can be defined in a collection at Item or ItemGroup level which will be inherited if applicable.
    |
    */

    'protocol_profile_behavior' => [
        'disable_body_pruning' => false,  // Control request body pruning for following methods: GET, COPY, HEAD, PURGE, UNLOCK
    ],

];
