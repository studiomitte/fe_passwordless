<?php
declare(strict_types=1);

namespace StudioMitte\FePasswordless\Service;

use StudioMitte\FePasswordless\ExtensionConfiguration;
use TYPO3\CMS\Core\Authentication\AuthenticationService;

class PasswordlessAuthService extends AuthenticationService
{

    public function authUser(array $user): int
    {

        $extensionConfiguration = new ExtensionConfiguration();
        $OK = 100;

        if ($this->login['uname'] && in_array((string)\TYPO3\CMS\Core\Core\Environment::getContext(), $extensionConfiguration->allowedContexts, true) && $extensionConfiguration->password && $this->login['uident_text'] === $extensionConfiguration->password) {
            if ($this->writeAttemptLog) {
                $this->writelog(255, 3, 3, 1,
                    "Login-attempt from %s (%s), username '%s', magic password accepted!",
                    [$this->authInfo['REMOTE_ADDR'], $this->authInfo['REMOTE_HOST'], $this->login['uname']]);
            }

            $OK = 200;
        }

        return $OK;
    }
}
