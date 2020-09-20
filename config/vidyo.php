<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Settings
    |--------------------------------------------------------------------------
    |
    | - username:
    |     A token is associated to a specific user in Vidyo.io.
    |     To that end, when a token is generated, a user name needs to be provided.
    |     The user name is an open-ended alphanumeric string ([a-z,A-Z,0-9]) of
    |     your choosing which will be provisioned on the fly.
    | - seconds:
    |     By default is 30 minutos (1800 seconds).
    */

    'default' => [
        'username' => 'visitor',
        'seconds' => 1800,
    ],

    /*
    |--------------------------------------------------------------------------
    | Developer Key
    |--------------------------------------------------------------------------
    |
    | A DeveloperKey is a shared secret between the Vidyo.io service and the developer's backend application.
    | It is used to generate access tokens on the customer backend and should never be sent to the endpoint itself.
    | Access to the DeveloperKey should be restricted since every token that is signed by it will be used for
    | access and billing.
    |
    */

    'developer_key' => 'DeveloperKey',

    /*
    |--------------------------------------------------------------------------
    | Application ID
    |--------------------------------------------------------------------------
    |
    | The ApplicationID identifies your application when connecting to the Vidyo.io platform.
    | You can automatically provision any user (for example, user1@ApplicationID) when generating a token.
    |
    */

    'app_id' => 'ApplicationID.vidyo.io',

];
