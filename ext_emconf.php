<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Login with any FE user',
    'description' => 'This extension allows to log in with any frontend user by providing the username and previously defined password.',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => 'gr@studiomitte.com',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
