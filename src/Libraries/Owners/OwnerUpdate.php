<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Owners;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class OwnerUpdate extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Update current owner
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('rest/owner/update')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
