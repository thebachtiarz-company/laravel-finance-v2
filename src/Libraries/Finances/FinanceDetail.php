<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Finances;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class FinanceDetail extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Get finance detail
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('finance/detail')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
