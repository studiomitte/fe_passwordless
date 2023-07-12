<?php

call_user_func(
    static function () {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
            'fe_passwordless',
            'auth',
            'fepasswordless',
            [
                'title' => 'Login with any FE user for testing purposes',
                'description' => 'Easy debugging users by using one password for all users. DEVELOPMENT ONLY!',
                'subtype' => 'authUserFE',
                'available' => true,
                'priority' => 80,
                'quality' => 50,
                'className' => \StudioMitte\FePasswordless\Service\PasswordlessAuthService::class,
            ]
        );
    }
);
