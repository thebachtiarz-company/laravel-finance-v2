<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Services;

use TheBachtiarz\Base\App\Http\Requests\Rules\PaginateRule;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Base\App\Services\AbstractService;
use TheBachtiarz\Finance\Libraries\CurlFinanceLibrary;

class FinanceService extends AbstractService
{
    /**
     * Constructor
     */
    public function __construct(
        protected CurlFinanceLibrary $curlFinanceLibrary,
    ) {
    }

    // ? Public Methods

    /**
     * Get owner detail
     *
     * @return array
     */
    public function ownerDetail(string $ownerCode, string $paginateOptions = '{}'): array
    {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'owner-detail',
                data: [
                    'owner_code' => $ownerCode,
                    PaginateRule::INPUT_ATTRIBUTESPAGINATEOPTIONS => $paginateOptions,
                ],
            ),
        );
    }

    /**
     * Create new owner
     *
     * @return array
     */
    public function ownerCreate(string $status = '1', string $attributes = '{}'): array
    {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'owner-create',
                data: [
                    'status' => $status,
                    'attributes' => $attributes,
                ],
            ),
        );
    }

    /**
     * Update current owner
     *
     * @return array
     */
    public function ownerUpdate(
        string $ownerCode,
        string $status = '1',
        string $attributes = '{}',
        bool $regenerate = false,
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'owner-update',
                data: [
                    'owner_code' => $ownerCode,
                    'status' => $status,
                    'attributes' => $attributes,
                    'regenerate_code' => $regenerate,
                ],
            ),
        );
    }

    /**
     * Get purpose detail
     *
     * @return array
     */
    public function purposeDetail(string $purposeCode): array
    {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'purpose-detail',
                data: ['purpose_code' => $purposeCode],
            ),
        );
    }

    /**
     * Get list purpose by owner
     *
     * @return array
     */
    public function purposeByOwner(
        string $ownerCode,
        string $perPage = '15',
        string $currentPage = '1',
        string $sortOptions = '{}',
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'purpose-by-owner',
                data: [
                    'ownerCode' => $ownerCode,
                    PaginateRule::INPUT_PERPAGE => $perPage,
                    PaginateRule::INPUT_CURRENTPAGE => $currentPage,
                    PaginateRule::INPUT_SORTOPTIONS => $sortOptions,
                ],
            ),
        );
    }

    /**
     * Create new purpose
     *
     * @return array
     */
    public function purposeCreate(
        string $ownerCode,
        string $information,
        string $attributes,
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'purpose-create',
                data: [
                    'owner_code' => $ownerCode,
                    'information' => $information,
                    'attributes' => $attributes,
                ],
            ),
        );
    }

    /**
     * Update current purpose
     *
     * @return array
     */
    public function purposeUpdate(
        string $ownerCode,
        string $purposeCode,
        string $information,
        string $attributes = '{}',
        bool $regenerate = false,
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'purpose-update',
                data: [
                    'owner_code' => $ownerCode,
                    'purpose_code' => $purposeCode,
                    'information' => $information,
                    'attributes' => $attributes,
                    'regenerate_code' => $regenerate,
                ],
            ),
        );
    }

    /**
     * get finance detail
     *
     * @return array
     */
    public function financeDetail(string $financeCode): array
    {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'finance-detail',
                data: ['finance_code' => $financeCode],
            ),
        );
    }

    /**
     * Create new finance
     *
     * @return array
     */
    public function financeCreate(string $type, string $attributes = '{}'): array
    {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'finance-create',
                data: [
                    'type' => $type,
                    'attributes' => $attributes,
                ],
            ),
        );
    }

    /**
     * Update current finance
     *
     * @return array
     */
    public function financeUpdate(
        string $financeCode,
        string $type,
        string $attributes = '{}',
        bool $regenerate = false,
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'finance-update',
                data: [
                    'finance_code' => $financeCode,
                    'type' => $type,
                    'attributes' => $attributes,
                    'regenerate_code' => $regenerate,
                ],
            ),
        );
    }

    /**
     * Get transaction detail
     *
     * @return array
     */
    public function transactionDetail(string $referenceCode): array
    {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'transaction-detail',
                data: ['reference_code' => $referenceCode],
            ),
        );
    }

    /**
     * Create new transaction
     *
     * @return array
     */
    public function transactionCreate(
        string $ownerCode,
        string $purposeCode,
        string $financeCode,
        string $type,
        float $nominal,
        string $information,
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'transaction-create',
                data: [
                    'owner_code' => $ownerCode,
                    'purpose_code' => $purposeCode,
                    'finance_code' => $financeCode,
                    'type' => $type,
                    'nominal' => $nominal,
                    'information' => $information,
                ],
            ),
        );
    }

    /**
     * Get list transaction in purpose
     *
     * @return array
     */
    public function transactionBalanceInPurpose(
        string $ownerCode,
        string $purposeCode,
        string $financeCode,
        string $perPage = '15',
        string $currentPage = '1',
        string $sortOptions = '{}',
        string $dateFrom = '',
        string $dateTo = '',
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'transaction-balance-in-purpose',
                data: [
                    'owner_code' => $ownerCode,
                    'purpose_code' => $purposeCode,
                    'finance_code' => $financeCode,
                    PaginateRule::INPUT_PERPAGE => $perPage,
                    PaginateRule::INPUT_CURRENTPAGE => $currentPage,
                    PaginateRule::INPUT_SORTOPTIONS => $sortOptions,
                    'date_from' => $dateFrom,
                    'date_to' => $dateTo,
                ],
            ),
        );
    }

    /**
     * Get list finance in purpose
     *
     * @return array
     */
    public function transactionFinanceInPurpose(
        string $ownerCode,
        string $purposeCode,
        string $perPage = '15',
        string $currentPage = '1',
        string $sortOptions = '{}',
        string $dateFrom = '',
        string $dateTo = '',
    ): array {
        return $this->processResponseHandler(
            curlResponseInterface: $this->curlFinanceLibrary->execute(
                path: 'transaction-finance-in-purpose',
                data: [
                    'owner_code' => $ownerCode,
                    'purpose_code' => $purposeCode,
                    PaginateRule::INPUT_PERPAGE => $perPage,
                    PaginateRule::INPUT_CURRENTPAGE => $currentPage,
                    PaginateRule::INPUT_SORTOPTIONS => $sortOptions,
                    'date_from' => $dateFrom,
                    'date_to' => $dateTo,
                ],
            ),
        );
    }

    // ? Protected Methods

    /**
     * Handler process response
     *
     * @return array
     */
    protected function processResponseHandler(CurlResponseInterface $curlResponseInterface): array
    {
        $this->setResponseData(
            message: $curlResponseInterface->getMessage(),
            data: $curlResponseInterface->getData(),
            status: $curlResponseInterface->getStatus(),
            httpCode: $curlResponseInterface->getHttpCode(),
        );

        return $curlResponseInterface->toArray();
    }

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
