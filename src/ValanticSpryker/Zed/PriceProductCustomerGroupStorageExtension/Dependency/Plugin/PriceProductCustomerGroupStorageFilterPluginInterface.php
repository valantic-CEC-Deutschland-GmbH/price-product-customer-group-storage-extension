<?php

declare(strict_types = 1);

namespace ValanticSpryker\Zed\PriceProductCustomerGroupStorageExtension\Dependency\Plugin;

interface PriceProductCustomerGroupStorageFilterPluginInterface
{
    /**
     * Specification:
     * - Filters `PriceProductCustomerGroupStorageTransfer` out from array if it is non-actual or|and does not fit certain conditions.
     * - Returns array of filtered `PriceProductCustomerGroupStorageTransfer`.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\PriceProductCustomerGroupStorageTransfer> $priceProductCustomerGroupStorageTransfers
     *
     * @return array<\Generated\Shared\Transfer\PriceProductCustomerGroupStorageTransfer>
     */
    public function filter(array $priceProductCustomerGroupStorageTransfers): array;
}
