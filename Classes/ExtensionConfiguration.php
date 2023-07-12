<?php
declare(strict_types=1);

namespace StudioMitte\FePasswordless;

use TYPO3\CMS\Core\Utility\GeneralUtility;

class ExtensionConfiguration
{

    public array $allowedContexts = [];
    public string $password = '';

    public function __construct()
    {
        $extensionConfiguration = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class);
        try {
            $config = $extensionConfiguration->get('fe_passwordless');

            $this->allowedContexts = GeneralUtility::trimExplode(',', (string)($config['allowedContexts'] ?? ''), true);
            $this->password = trim($config['password'] ?? '');
        } catch (\Exception $e) {
            // do nothing
        }
    }
}
