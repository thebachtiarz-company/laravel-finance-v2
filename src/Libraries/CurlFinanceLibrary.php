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
    public const OWNER_DETAIL_PATH                   = 'owner-detail';
    public const OWNER_CREATE_PATH                   = 'owner-create';
    public const OWNER_UPDATE_PATH                   = 'owner-update';
    public const PURPOSE_DETAIL_PATH                 = 'purpose-detail';
    public const PURPOSE_BY_OWNER_PATH               = 'purpose-by-owner';
    public const PURPOSE_CREATE_PATH                 = 'purpose-create';
    public const PURPOSE_UPDATE_PATH                 = 'purpose-update';
    public const FINANCE_DETAIL_PATH                 = 'finance-detail';
    public const FINANCE_CREATE_PATH                 = 'finance-create';
    public const FINANCE_UPDATE_PATH                 = 'finance-update';
    public const TRANSACTION_DETAIL_PATH             = 'transaction-detail';
    public const TRANSACTION_CREATE_PATH             = 'transaction-create';
    public const TRANSACTION_BALANCE_IN_PURPOSE_PATH = 'transaction-balance-in-purpose';
    public const TRANSACTION_FINANCE_IN_PURPOSE_PATH = 'transaction-finance-in-purpose';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classEntity = [
            self::OWNER_DETAIL_PATH => OwnerDetail::class,
            self::OWNER_CREATE_PATH => OwnerCreate::class,
            self::OWNER_UPDATE_PATH => OwnerUpdate::class,
            self::PURPOSE_DETAIL_PATH => PurposeDetail::class,
            self::PURPOSE_BY_OWNER_PATH => PurposeByOwner::class,
            self::PURPOSE_CREATE_PATH => PurposeCreate::class,
            self::PURPOSE_UPDATE_PATH => PurposeUpdate::class,
            self::FINANCE_DETAIL_PATH => FinanceDetail::class,
            self::FINANCE_CREATE_PATH => FinanceCreate::class,
            self::FINANCE_UPDATE_PATH => FinanceUpdate::class,
            self::TRANSACTION_DETAIL_PATH => TransactionDetail::class,
            self::TRANSACTION_CREATE_PATH => TransactionCreate::class,
            self::TRANSACTION_BALANCE_IN_PURPOSE_PATH => TransactionBalanceInPurpose::class,
            self::TRANSACTION_FINANCE_IN_PURPOSE_PATH => TransactionFinanceInPurpose::class,
        ];
    }

    // ? Public Methods

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
