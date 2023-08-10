<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Purposes;

use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class PurposeUpdate extends AbstractFinanceLibrary
{
    // ? Public Methods

    /**
     * Update current purpose
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('rest/purpose/update')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
