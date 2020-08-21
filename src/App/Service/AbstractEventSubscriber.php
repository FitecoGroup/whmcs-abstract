<?php

/**
 *
 * WHMCS Abstract 2020 — NOTICE OF LICENSE
 * This source file is released under commercial license by copyright holders.
 * Please see LICENSE file for more specific licensing terms.
 * @copyright 2017-2020 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2020 (c) Fiteco (https://fiteco.fi)
 *
 */

namespace IronLions\WHMCS\App\Service;

abstract class AbstractEventSubscriber
{
    /**
     * This function should register all events => callback.
     * Example of this implementation is to return following values
     * ```
     *  return
     *      [
     *          'WhmcsEvent'    => [static::class, 'somePublicFunction'],
     *          'invoiceSplit'  => [static::class, 'onInvoiceSplit'],
     *          'AcceptQuote'   => [static::class, 'onAcceptQuote'],
     *      ];
     * ```.
     */
    abstract public static function subscribe(): array;
}
