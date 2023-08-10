<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries;

use TheBachtiarz\Base\App\Libraries\Curl\CurlLibrary;
use TheBachtiarz\Finance\Libraries\Finances\FinanceCreate;
use TheBachtiarz\Finance\Libraries\Finances\FinanceDetail;
use TheBachtiarz\Finance\Libraries\Finances\FinanceUpdate;
use TheBachtiarz\Finance\Libraries\Owners\OwnerCreate;
use TheBachtiarz\Finance\Libraries\Owners\OwnerDetail;
use TheBachtiarz\Finance\Libraries\Owners\OwnerUpdate;
use TheBachtiarz\Finance\Libraries\Purposes\PurposeByOwner;
use TheBachtiarz\Finance\Libraries\Purposes\PurposeCreate;
use TheBachtiarz\Finance\Libraries\Purposes\PurposeDetail;
use TheBachtiarz\Finance\Libraries\Purposes\PurposeUpdate;
use TheBachtiarz\Finance\Libraries\Transactions\TransactionBalanceInPurpose;
use TheBachtiarz\Finance\Libraries\Transactions\TransactionCreate;
use TheBachtiarz\Finance\Libraries\Transactions\TransactionDetail;
use TheBachtiarz\Finance\Libraries\Transactions\TransactionFinanceInPurpose;

class CurlFinanceLibrary extends CurlLibrary
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classEntity = [
            'owner-detail' => OwnerDetail::class,
            'owner-create' => OwnerCreate::class,
            'owner-update' => OwnerUpdate::class,
            'purpose-detail' => PurposeDetail::class,
            'purpose-by-owner' => PurposeByOwner::class,
            'purpose-create' => PurposeCreate::class,
            'purpose-update' => PurposeUpdate::class,
            'finance-detail' => FinanceDetail::class,
            'finance-create' => FinanceCreate::class,
            'finance-update' => FinanceUpdate::class,
            'transaction-detail' => TransactionDetail::class,
            'transaction-create' => TransactionCreate::class,
            'transaction-balance-in-purpose' => TransactionBalanceInPurpose::class,
            'transaction-finance-in-purpose' => TransactionFinanceInPurpose::class,
        ];
    }

    // ? Public Methods

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
