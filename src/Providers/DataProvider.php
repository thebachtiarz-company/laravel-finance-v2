<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Providers;

use TheBachtiarz\Base\BaseConfigInterface;
use TheBachtiarz\Finance\Interfaces\Configs\FinanceConfigInterface;

use function array_merge;
use function tbbaseconfig;

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

        return $registerConfig;
    }
}
