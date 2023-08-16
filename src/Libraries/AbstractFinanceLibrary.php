<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries;

use TheBachtiarz\Base\App\Libraries\Curl\AbstractCurl;

use function sprintf;
use function tbfinanceconfig;

abstract class AbstractFinanceLibrary extends AbstractCurl
{
    // ? Public Methods

    // ? Protected Methods

    protected function urlDomainResolver(): string
    {
        $baseUrl = tbfinanceconfig(keyName: 'is_production_mode', useOrigin: false)
            ? 'api_url_production'
            : 'api_url_sandbox';

        $this->url = sprintf(
            '%s/%s/%s',
            tbfinanceconfig(keyName: $baseUrl, useOrigin: false),
            'rest',
            $this->getSubUrl(),
        );

        return $this->url;
    }

    protected function bodyDataResolver(): array
    {
        return $this->body;
    }

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
