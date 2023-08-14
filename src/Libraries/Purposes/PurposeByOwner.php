<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Purposes;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class PurposeByOwner extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Get list purpose by owner
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('rest/purpose/list-by-owner')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
