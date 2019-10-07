<?php

declare(strict_types=1);

/**
 *
 * WHMCS Gateway Fees 2019 — NOTICE OF LICENSE
 * This source file is released under commercial license by copyright holders.
 * @copyright 2017-2019 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2019 (c) IronLions (https://ironlions.fi)
 *
 */

namespace IronLions\WHMCS\Infra\Query;

use IronLions\WHMCS\Domain\Repo\GatewayRepositoryInterface;
use IronLions\WHMCS\Infra\AbstractQuery;
use WHMCS\Database\Capsule;

final class Gateway extends AbstractQuery implements GatewayRepositoryInterface
{
    /**
     * @return \IronLions\WHMCS\Domain\Gateway[]
     */
    public function getAll(): array
    {
        $result = Capsule::table(static::TBL_GATEWAYS)
            ->groupBy('gateway')
            ->get();

        foreach ($result as &$item) {
            $item = \IronLions\WHMCS\Domain\Gateway::fromStd($item);
        }

        return $result;
    }
}