<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Finances;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class FinanceCreate extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Create new finance
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('finance/create')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
