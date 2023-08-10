<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Purposes;

use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class PurposeDetail extends AbstractFinanceLibrary
{
    // ? Public Methods

    /**
     * Get detail purpose
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('rest/purpose/detail')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
