<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Transactions;

use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class TransactionCreate extends AbstractFinanceLibrary
{
    // ? Public Methods

    /**
     * Create new transaction
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('rest/transaction/create')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
