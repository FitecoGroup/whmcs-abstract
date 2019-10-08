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

if (!function_exists('add_hook')) {
    function add_hook(string $hookName, int $priority, callable $callback): void
    {
    }
}

if (!function_exists('addEventSubscriber')) {
    function addEventSubscriber(string $class): void
    {
        foreach ($class::subscribe() as $event => $callable) {
            add_hook($event, 1, $callable);
        }
    }
}