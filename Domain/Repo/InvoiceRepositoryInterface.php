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

namespace IronLions\WHMCS\Domain\Repo;

use IronLions\WHMCS\Domain\Invoice;

interface InvoiceRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return Invoice
     */
    public function getOneById(int $id): Invoice;

    /**
     * @param Invoice $invoice
     */
    public function update(Invoice $invoice): void;
}