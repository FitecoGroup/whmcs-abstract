<?php

declare(strict_types=1);

/**
 *
 * WHMCS Abstract 2019 — NOTICE OF LICENSE
 * This source file is released under commercial license by copyright holders.
 * Please see LICENSE file for more specific licensing terms.
 * @copyright 2017-2019 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2019 (c) IronLions (https://ironlions.fi)
 *
 */

namespace IronLions\WHMCS\Domain\Repo;

use IronLions\WHMCS\Domain\Gateway;

interface GatewayRepositoryInterface
{
    /**
     * @return Gateway[]
     */
    public function getAll(): array;
}
