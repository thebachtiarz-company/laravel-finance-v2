<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Transactions;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class TransactionDetail extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Get transaction detail
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('transaction/detail')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
