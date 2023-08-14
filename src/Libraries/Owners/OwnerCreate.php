<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Owners;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class OwnerCreate extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Create new owner
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('rest/owner/create')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
