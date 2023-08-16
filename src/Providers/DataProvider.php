<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Providers;

use TheBachtiarz\Base\BaseConfigInterface;
use TheBachtiarz\Finance\Interfaces\Configs\FinanceConfigInterface;

use function array_merge;
use function config;
use function tbbaseconfig;
use function tbdirlocation;

class DataProvider
{
    /**
     * List of config who need to registered into current project.
     * Perform by finance library.
     *
     * @return array
     */
    public function registerConfig(): array
    {
        $registerConfig = [];

        // ! library configs
        $configRegistered = tbbaseconfig(BaseConfigInterface::CONFIG_REGISTERED);
        $registerConfig[] = [
            BaseConfigInterface::CONFIG_NAME . '.' . BaseConfigInterface::CONFIG_REGISTERED => array_merge(
                $configRegistered,
                [FinanceConfigInterface::CONFIG_NAME],
            ),
        ];

        // ! Logging
        $logging          = config('logging.channels');
        $registerConfig[] = [
            'logging.channels' => array_merge(
                $logging,
                [
                    'finance' => [
                        'driver' => 'single',
                        'path' => tbdirlocation('log/finance.log'),
                    ],
                ],
            ),
        ];

        return $registerConfig;
    }
}
