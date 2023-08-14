<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance\Libraries\Owners;

use TheBachtiarz\Base\App\Libraries\Curl\CurlInterface;
use TheBachtiarz\Base\App\Libraries\Curl\Data\CurlResponseInterface;
use TheBachtiarz\Finance\Libraries\AbstractFinanceLibrary;

class OwnerDetail extends AbstractFinanceLibrary implements CurlInterface
{
    // ? Public Methods

    /**
     * Get owner detail
     *
     * @param array $data
     */
    public function execute(array $data = []): CurlResponseInterface
    {
        return $this->setSubUrl('rest/owner/detail')->setBody($data)->post();
    }

    // ? Protected Methods

    // ? Private Methods

    // ? Getter Modules

    // ? Setter Modules
}
