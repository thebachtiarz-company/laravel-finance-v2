<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Transactions;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class TransactionBalanceInPurpose extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Get list transaction in purpose
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('transaction/list-balance-in-purpose')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
