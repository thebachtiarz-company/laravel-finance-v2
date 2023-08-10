<?php

declare(strict_types=1);

use TheBachtiarz\Finance\Interfaces\Configs\FinanceConfigInterface;

if (! function_exists('tbfinanceconfig')) {
    /**
     * TheBachtiarz finance config
     *
     * @param string|null $keyName   Config key name | null will return all
     * @param bool|null   $useOrigin Use original value from config
     */
    function tbfinanceconfig(string|null $keyName = null, bool|null $useOrigin = true): mixed
    {
        $configName = FinanceConfigInterface::CONFIG_NAME;

        return tbconfig($configName, $keyName, $useOrigin);
    }
}
